<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read text file</title>
    <style>
        .mytxt{color:rgb(255, 0, 0);}
    </style>
</head>
<body>
<h1>ข้อมูล นศ ใช้ fread</h1>
<?php
$myfile = fopen("myname.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("myname.txt"));
fclose($myfile);
?>
<br>
<h1>ข้อมูล นศ ใช้ fgets</h1>
<?php
$myfile = fopen("myname.txt", "r") or die("Unable to open file!");
echo fgets($myfile);    //show 1 line
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