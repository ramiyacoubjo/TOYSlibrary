<?php
define('db_host','localhost');
define('db_user','root');
define('db_pass','');
define('db_dbname','babygames');

define('upload_path','C:\\xampp\\htdocs\\babygames\\upload');


function get_menu_link($type, $param=''){
	switch($type){
		case 'tabs':
			$plink = 'tabs.php?id='.$param;
			break;
			
		case 'seperator':
			$plink = '#';
			break;

		case 'page':
			$plink = 'page.php?id='.$param;
			break;	
			
		case 'category':
			$plink = 'category.php?id='.$param;
			break;	
			
		case 'news':
			$plink = 'news.php';
			break;
			
		case 'careers':
			$plink = 'careers.php';
			break;

		case 'contact':
			$plink = 'contact_us.php';
			break;

		case 'locations':
			$plink = 'locations.php';
			break;	

		case 'sitemap':
			$plink = 'sitemap.php';
			break;			
	}
	return $plink;					
}

function filter($data,$db) {
	$data = trim(htmlentities(strip_tags($data)));

	if (get_magic_quotes_gpc())
		$data = stripslashes($data);

	$data = mysqli_real_escape_string($db,$data);

	return $data;
}

?>