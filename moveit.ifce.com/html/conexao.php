<?php
//Conectando-se ao BD
//$con = new mysqli("localhost","root","","moveit");
//$con = new mysqli("db4free.net","adminmoveit","@wh989059435ikari","testemoveit");
//$con = mysqli_connect("sql10.freesqldatabase.com","sql10254005","SlUsiyt7BH","sql10254005");
//$con = mysqli_connect("localhost","id6971294_moveituser","Whikari94351996","id6971294_moveit");
$con = mysqli_connect("moveitdb.clkpzzzhqleh.eu-west-2.rds.amazonaws.com:3306","thiagodefreitas","94351996","moveitDB");
if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>