<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$myfile = fopen("myname.txt", "a") or die("Unable to open file!");
$txt = "Mickey Mouse";
fwrite($myfile, $txt);
$txt = "Minnie Mouse";
fwrite($myfile, $txt);
fclose($myfile);
?>
<h1>ข้อมูล นศ ใช้ fgets ร่วมกับ feof</h1>
<?php
$myfile = fopen("myname.txt", "r") or die("Unable to open file!");
// loop with whil loop and Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</body>
</html>