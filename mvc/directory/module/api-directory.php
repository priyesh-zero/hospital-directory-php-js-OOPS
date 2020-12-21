<?php

include __DIR__."/../../../php/index.php";
include __DIR__."/getPatients.php";
include __DIR__."/getHospitals.php";

// get html data from t_hospital or t_patient depending on the request

if (isset($_POST["get_patients"])) {
  $result = getPatients();
  APIResponse(implode("", $result));
}

if (isset($_POST["get_hospitals"])) {
  $result = getHospitals();
  APIResponse(implode("", $result));
}

APIError("request_not_defined");
