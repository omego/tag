<?php

//////////////////Counter Logic/////////////////
////////////////////////////////////////////////
// session_start();
// $counter_name = "counter.txt";
// // Check if a text file exists. If not create one and initialize it to zero.
// if (!file_exists($counter_name)) {
//   $f = fopen($counter_name, "w");
//   fwrite($f,"0");
//   fclose($f);
// }
// // Read the current value of our counter file
// $f = fopen($counter_name,"r");
// $counterVal = fread($f, filesize($counter_name));
// fclose($f);
// // Has visitor been counted in this session?
// // If not, increase counter value by one
// if(!isset($_SESSION['hasVisited'])){
//   $_SESSION['hasVisited']="yes";
//   $counterVal++;
//   $f = fopen($counter_name, "w");
//   fwrite($f, $counterVal);
//   fclose($f); 
// }

////////////////////////////////////////////////
///////////////////////////////////////////////*
session_start();
$count_my_page = ("counter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);

if(isset($_GET['type'])!='ajax'){
    include 'header.php';
    echo "<div id='main-content'>";
}
?>


/


<div class="bubblingG">
<span id="bubblingG_1">
</span>
<span id="bubblingG_2">
</span>
<span id="bubblingG_3">
</span>
</div>
<?php
if($_GET['type']!='ajax'){
    echo "</div>";
    include 'footer.php';
}?>