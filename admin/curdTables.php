<?php
include('../setting.php');
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
//$xcrud->unset_csv();
	
	$planId =  array('values'=>'2009,2014');
	
switch($_GET['table']){
	case 1:
		$xcrud->table('admins');
		$xcrud->validation_required('username');
		$xcrud->validation_required('password');
		break;
		
	case 2:
		$xcrud->table('plans');	
		$xcrud->validation_required('title');
		

		break;	

	case 3:
		$xcrud->table('toys_types');	
		$xcrud->validation_required('title');
		break;	

	case 4:
		$xcrud->table('toys');	
		$xcrud->validation_required('title');

		$xcrud->relation('gender_type','toys_types','id','title',array('filter_by'=>'Gender'));
		$xcrud->relation('age_type','toys_types','id','title',array('filter_by'=>'Age'));

		
		$xcrud->fk_relation(
		'Toys Cat',
		'id',
		'toys_cats',
		'toyid',
		'catid',
		'toys_types',
		'id',
		'title'
		,array('filter_by'=>'cat'));
		
		
		
		$xcrud->change_type('image','image','',array('crop'=>true,'manual_crop'=>true,'path'=>upload_path.'/toys')); // resize main image				
	break;

	case 5:
		$xcrud->table('pages');	
		$xcrud->validation_required('title');
		

		break;	
}

echo $xcrud->render();    
?>
