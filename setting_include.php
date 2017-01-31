<?php
include('MysqliDb.php');
include('setting.php');

$mysqli = new mysqli (db_host, db_user, db_pass, db_dbname);
$db = new MysqliDb ($mysqli);	

/*
$db->where ('position', 'header');
$db->where ('main_menu_id', '0');
$db->orderBy("`order`","desc");
$header_menu = $db->get('menus');

$db->where ('position', 'main menu');
$db->where ('main_menu_id', 0);
$db->orderBy("`order`","desc");
$main_menu = $db->get('menus');
*/

?>