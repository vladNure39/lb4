<?php
$counterFile = "info.txt";

if (!file_exists($counterFile)) {
    $file = fopen($counterFile, "w");
    fwrite($file, "0");
    fclose($file);
}

$file = fopen($counterFile, "r");
$visitCount = fread($file, filesize($counterFile));
fclose($file);

$visitCount = (int)$visitCount;

$visitCount++;

$file = fopen($counterFile, "w");
fwrite($file, $visitCount);
fclose($file);

echo "Ця сторінка була переглянута $visitCount разів.";
?>
