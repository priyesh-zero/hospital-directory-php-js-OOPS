<?php
 
function include_css(...$path) {
  echo "<style>";
  foreach ($path as $p) {
    echo file_get_contents($p);
  }
  echo "</style>";
}

function include_js(...$path) {
  echo "<script>";
  foreach ($path as $p) {
    echo file_get_contents($p)."\n\n";
  }
  echo "</script>";
}

function APIResponse($data) {
  die(json_encode([ "status" => "ok", "body" => $data ], JSON_UNESCAPED_UNICODE));
}

function APIError($data) {
  die(json_encode([ "status" => "error", "body" => $data ], JSON_UNESCAPED_UNICODE));
}

// takes search input string, returns arr for PDO (like ['%cat%', '%dog%'])
function inputSearchToPDO($input) {
  //separate input into parts
  $input = trim($input);
    //leave only allowed chars
  $input = preg_replace("/[^a-zA-Z0-9\'\-\s]/m", ' ', $input);
    //get rid of extra-spaces
  $input = preg_replace("/\s+/m", ' ', $input);
  $input = explode(" ", $input);

  //concat for PDO with %%
  for ($i = 0; $i < count($input); $i++) {
    $input[$i] = "%".$input[$i]."%";
  }

  return $input;
}

