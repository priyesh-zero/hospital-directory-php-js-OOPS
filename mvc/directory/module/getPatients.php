<?php

function getPatients($input) {
  global $db;
  
  // generate search %LIKE% queries from the input for patName, patLastname, citName
  $params = [];
  $comparisons = [];
  
  $input = inputSearchToPDO($input);
  foreach($input as $i) {
    // add strings to request
    $comparisons[] = "patName like ?";
    
    // add input to params for each string accordingly
    $params[] = $i;
  }
  
  // make a query, join city
  $hospitals = $db->getRows("
    select 
      t_patient.*,
      t_city.*
    from 
      t_patient
    left join
      ......
  ", $params);
  
  // create the html result array
  $htmlResult = [];
  foreach($patients as $patient) {
    $htmlResult[] = ""; 
  }
  
  // return the html
  return $htmlResult;
}