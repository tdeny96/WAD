	 <?
     sesion_start();
	 $uname = $POST["uname"]; 
	 $upas = $POST["psw"];
	  $_SESSION["uname"] = $uname;
	  header('Location: one.html');
	  echo "Hello & welcome.";
	  $connect = mysql_connect("localhost",$user,$password);
	  mysql_select_db(admdb) or("Database not found.");
	  $query="SELECT * FROM `admdb` WHERE `username`=`$uname`";
	  $querypass="SELECT * FROM `admdb` WHERE `password`=`$upas`";
	  $result = mysql_query($query);
	  $resultpass = mysql_query($querypass);
	  echo $query;
	  echo $querypass;
	  mysql_close();
?>

