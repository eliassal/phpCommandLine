<?php
var_dump(is_file("employees.xml"));
  $xmldata = simplexml_load_file("employees.xml") or die("Failed to load");
  echo $xmldata->employee[0]->firstname . "<\n>";
  echo $xmldata->employee[1]->firstname; 
?>