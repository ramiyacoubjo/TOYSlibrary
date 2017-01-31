 <?php 

 include('../setting.php');
 include ('MysqliDb.php');
 
$mysqli = new mysqli (db_host, db_user, db_pass, db_dbname);
$db = new MysqliDb ($mysqli);	

switch($_GET['type_id']){
	case 1:
		$results = $db->get('pages');
		
		break;

	case 2:
		$db->where ('related_to', 'experiance');
		$results = $db->get('categories');
		
		break;
		
	case 3:
		$db->where ('related_to', 'tabs');
		$results = $db->get('categories');
		
		break;		
		
}



echo '<option value="0">Select State</option>';

foreach($results as $state) {

	echo '	<option value="'. $state["id"].'">'. $state["title"].'</option>';

}

?>
