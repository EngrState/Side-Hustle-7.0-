<?php
  
  $age = 19;
  $pvc = true;
  $ward = 19;
  
  if($age < 18){
   echo "AGE IS TOO LOW";
  }
  else if ($pvc !== true){
    echo "GO GET TO YOUR PVC";
  }
  else if ($ward === 20){
    echo "GO GET TO YOUR PVC";
  }
  else{
  echo "Voter eligible to vote";
  }
  
?>
