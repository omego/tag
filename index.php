<?php
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
