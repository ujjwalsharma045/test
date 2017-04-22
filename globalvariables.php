<?php
  $x = 5;
  manipulate();
  function manipulate(){
    global $x;
    global $y;
    $y = 2; 
    echo "<br/>Value Of X Before Changes:-".$x;
    echo "<br/>Value Of Y Before Changes:-".$y;
    $x= $x+5;
    $y+= $x;
  }
  echo "<br/>Value of X after Changes:-".$x;
  echo "<br/>Value Of Y after Changes:-".$y;
?>