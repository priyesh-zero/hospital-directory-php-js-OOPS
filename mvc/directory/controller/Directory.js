var Directory = class Directory {
  constructor() {
    let url = "mvc/directory/module/api-directory.php"; 
    this.api = new APIRequest({ url });
  }
  
  addListeners() {
    //write code to add event listeners
  }
  
  getPatients() {
    // add input value to the payload
    let payload = { get_patients: true }
    this.api.send(payload, data => {
      // put results to the page 
    }, error => {
      // handle errors
      console.log(error);
    })
  }
  
  getHospitals() {
    // add input value to the payload
    let payload = { get_hospitals: true }
    this.api.send(payload, data => {
      // put results to the page 
    }, error => {
      // handle errors
      console.log(error);
    })
  }
}

var directory = new Directory();