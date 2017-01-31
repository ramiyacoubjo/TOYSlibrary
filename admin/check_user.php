<?php
session_start();
include('MysqliDb.php');
include('../setting.php');

$mysqli = new mysqli (db_host, db_user, db_pass, db_dbname);
$db = new MysqliDb ($mysqli);	

$db->where ('username', $_POST['uname']);
$db->where ('password', $_POST['password']);

$users = $db->getOne('admins');


if( $users['id']  ){
	$_SESSION['adminLogin'] = $users['id'];
	header('Location: home.php?table=1');
} else {
	header('Location: index.php?error=1');
	exit();
	
}
?>