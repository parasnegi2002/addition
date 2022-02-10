<?php
  $a=$_GET['num1'];
  $b=$_GET['num2'];
  $c=$_GET['operation_type'];
  if($c=='sum'){
    echo "Sum : ",$a+$b;

  }
  if($c=='sub'){
    echo "Sub : ",$a-$b;
  }
  
  
?>

