<?php

function getHospitals($input) {
  global $db;
  
  // generate search %LIKE% queries from the input for hosName, hosCity
  $params = [];
  $comparisons = [];
  
  $input = inputSearchToPDO($input);
  foreach($input as $i) {
    // add strings to request
    $comparisons[] = "hosName like ?";
    $comparisons[] = "citName like ?";
    
    // add input to params for each string accordingly
    $params[] = $i;
  }
  
  $comparisons = implode(" or ", $comparisons);
  
  // make a query, join city
  $hospitals = $db->getRows("
    select 
      t_hospital.*,
      t_city.*
    from 
      t_hospital
    left join
      ......
  ", $params);
  
  // create the html result array
  $htmlResult = [];
  foreach($hospitals as $hospital) {
    $htmlResult[] = ""; 
  }
  
  // return the html
  return $htmlResult;
}