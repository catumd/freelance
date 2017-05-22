<?php
error_reporting(0);
session_start();  
mysql_connect("localhost","root","");
mysql_select_db("freelance");
mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");


?>