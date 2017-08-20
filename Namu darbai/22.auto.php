<?php

  $autos = array('BMW','VOLVO','VOLKSWAGEN','TOYOTA','LEXUS','FORD');

  function GetAutoDescriptionsWithFor($autos){
    for($i = 0; $i<count($autos); $i++){
      if($autos[$i] == "BMW"){
        echo "<li>" .$autos[$i]." - kompanija gaminanti BMW </li>";
      }
      if($autos[$i] == "VOLVO"){
        echo "<li>" .$autos[$i]." - kompanija gaminanti VOLVO </li>";
      }
      if($autos[$i] == "VOLKSWAGEN"){
        echo "<li>" .$autos[$i]." - kompanija gaminanti VOLKSWAGEN </li>";
      }
      if($autos[$i] == "TOYOTA"){
        echo "<li>" .$autos[$i]." - kompanija gaminanti TOYOTA </li>";
      }
      if($autos[$i] == "LEXUS"){
        echo "<li>" .$autos[$i]." - kompanija gaminanti LEXUS </li>";
      }
      if($autos[$i] == "FORD"){
        echo "<li>" .$autos[$i]." - kompanija gaminanti FORD </li>";
      }
    }
  }
  GetAutoDescriptionsWithFor($autos);




  function GetAutoDescriptionsWithWhile($autos){
    $i = 0;
    while($i < 5){
      if($autos[$i] == 'BMW', 'VOLVO', 'VOLKSWAGEN', 'TOYOTA', 'LEXUS', 'FORD');
      echo "<li>" .$autos[$i]." - kompanija gaminanti BMW </li>";

        $i++;

    }
}

  GetAutoDescriptionsWithWhile($autos);














?>
