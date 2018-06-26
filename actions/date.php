<?php

function sayTheDay() {
  $tab_days = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
  $date = $tab_days[date('w', mktime(0,0,0,date('m'),date('d'),date('Y')))];
  if ($date == 'Lundi') {
    echo "Courage aujourd'hui c'est " . $date . "...";
  } elseif ($date == 'Samedi' | 'Dimanche') {
    echo "Youpi c'est le weekend !";
  } elseif ($date == 'Vendredi') {
    echo "Vendredi enfin !";
  } else {
    echo "Aujourd'hui nous sommes " . $date . " !";
  }
}
sayTheDay();

?>
