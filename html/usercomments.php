<?php

$name_entered= $_POST['name'];
$comment_entered= $_POST['comment'];
$table= $_POST['webpage'];

$date= date("m-d-Y");

$user = "user"; 
$password = "password"; 
$host = "host"; 
$dbase = "database"; 

$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($dbase, $connection);


$val = mysql_query("select 1 from $table");

if($val !== FALSE)
{
   
if ((!empty($name_entered)) && (!empty($comment_entered)))
{
mysql_query("INSERT INTO $table (name, date, comments)
VALUES ('$name_entered', '$date', '$comment_entered')");
}

$result= mysql_query( "SELECT * FROM $table ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysql_error()); 

while ($row = mysql_fetch_array($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];


echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "<br><hr><br>";

}
}

else
{
  

$createtable= "CREATE TABLE $table"
( 

$create= mysql_query($createtable, $connection);


if ($create)
{

if ((!empty($name_entered)) && (!empty($comment_entered)))
{
mysql_query("INSERT INTO $table (name, date, comments)
VALUES ('$name_entered', '$date', '$comment_entered')");
}

$result= mysql_query( "SELECT * FROM $table ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysql_error()); 


while ($row = mysql_fetch_array($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];


echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "<br><hr><br>";

}


?> 