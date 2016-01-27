<?php
define('YOUR_EOL', "\n");
$fp = fopen('counter.txt', 'r');

$pos = -1; $line = ''; $c = '';
do {
    $line = $c . $line;
    fseek($fp, $pos--, SEEK_END);
    $c = fgetc($fp);
} while ($c != YOUR_EOL);

echo $line;

fclose($fp);
?>

<?php
$myfile = fopen("counter.txt", "a") or die("Unable to open file!");
$txt = "\n" . ($line+1);
fwrite($myfile, $txt);
fclose($myfile);


?>
