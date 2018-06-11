<header id="header">
  <div class="today">
    <?php
    // indication of days and some funny text added
    // next step to add: include just the Class in the php file
    function sayTheDay() {
      $tab_days = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
      $date = $tab_days[date('w', mktime(0,0,0,date('m'),date('d'),date('Y')))];
      if ($date == 'Lundi') {
        echo "Courage, aujourd'hui c'est " . $date . "...";
      } elseif ($date == 'Samedi' | 'Dimanche') {
        echo "Youpi c'est le weekend !";
      } else {
        echo "Aujourd'hui nous sommes " . $date . " !";
      }
    }
    sayTheDay();
     ?>
  </div>
  <h1>Dans Ton Dev</h1>
  <p>"Site actuellement en construction"</p>
</header>
