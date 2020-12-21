//  Sends the request to the api and expects the response in the json format
//  For the response use the php global function APIResponse.
//  APIResponse will form the response in this format: { "status": "ok", "body": "response text/html/json" }
//  php APIResponse will accept the text/html/json formats

class APIRequest {
  constructor({ url }) {
    this.url = url;
    this.listOfRequestNames = [];
    this.request = undefined;
  }

  sendErrorToAdmin(data) {
    console.log("sent email to admin...");
  }
  
  abort() {
    this.request && this.request.abort();
  }

  send(payload, callback = () => {}, onError = false, { unconstructedData, requestName, dontBlockStack } = false) {
    if (!onError) {
      onError = data => {
        alert("server communication error");
        return ;
      }
    }

    if (requestName) {
      for (let request of this.listOfRequestNames) {
        if (request.name == requestName) {
          request.request.abort();
        }
      }
    } else if (this.request && !dontBlockStack) {
      if (!this.listOfRequestNames.some(n => n.request == this.request)) {
        this.request && this.request.abort();
      }
    }

    return new Promise((res) => {
      this.request = $.post(this.url, payload, data => {
        this.listOfRequestNames = this.listOfRequestNames.filter(n => n.name != requestName)

        if (unconstructedData == true) {
          callback(data);
          res(data);
          return data;
        }

        try {
          data = JSON.parse(data);
        } catch(e) {
          onError(data);
          console.log(data);
          res(false);
          this.sendErrorToAdmin(data);
          return false;
        }

        if (data.status == "ok"){
          callback(data.body);
          res(data.body);
        } else {
          onError(data.body);
          console.log(data.body)
          this.sendErrorToAdmin(data.body);
          res(false);
          return false;
        }
      })

      if (requestName) {
        this.listOfRequestNames.push({ request: this.request, name: requestName })
      }
    })
  }

  post(params) {
    let { payload, callback, onError, unconstructedData, requestName } = params;
    payload            = payload            ? payload            : false;
    callback           = callback           ? callback           : false;
    onError            = onError            ? onError            : false;
    unconstructedData  = unconstructedData  ? unconstructedData  : false;
    requestName        = requestName        ? requestName        : false;

    return this.send(payload, callback, onError, { unconstructedData, requestName });
  }
}