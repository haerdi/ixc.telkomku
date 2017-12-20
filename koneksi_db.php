<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $connect = mysql_connect($host, $username, $password);
  // if($connect) echo 'Connected'; //true
  //  else 'Not Connected Yet'; //false
	
	mysql_select_db('digital_touch_point',$connect);
?>