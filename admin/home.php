<?php
session_start();
error_reporting(0);
if( !isset($_SESSION['adminLogin'] )){
		header('Location: index.php?error=1');

		exit();
}
?>
<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="content-type" content="text/html;charset=utf-8" />  
    	<title>Welcome To Attco Admin Pages</title>
        <link href="assets/shCore.css" rel="stylesheet" type="text/css" />
        <link href="assets/shThemeDjango.css" rel="stylesheet" type="text/css" /> 
        <link href="assets/style.css" rel="stylesheet" type="text/css" />
		


		
    </head>
    
    <body>
        <div id="page">
            <div id="menu">
			
				<div id="logo"></div>
				<div id="caption">Admin Pages  <small></small></div>
				<a id="buy-button"></a>
				<ul id="leftmenu">
					<li >      <a href="home.php?table=1">Admins</a>    </li>
					<li >      <a href="home.php?table=2">Plans</a>    </li>
					<li >      <a href="home.php?table=3">Toys Types</a>    </li>
					<li >      <a href="logout.php">Logout</a>    </li>

					
					

				</ul>
			</div>
            <div id="content">
					<?php include('curdTables.php');?>
            </div>
        </div>
<?php if ($_GET['table']== '2' ){?>

<Script>

$(document).ready(function(){
	 $(".xcrud").on("change","#mtype",function(){
		 
			var mdata = $("#mtype").val();
		   switch(mdata){
				case 'page':
					getids(1);	
					break;
				case 'category':
					 getids(2);
					break;             
				case 'tabs':
					getids(3);
					 list(icecreams);
					break; 
				default: //default child option is blank
					$("#mtid").html('');  
					getids(100); // get empty select
					break;
			}
		
	  
	});   
});


function getids(val) {
	$.ajax({
	type: "GET",
	url: "menuAjax.php",
	data:'type_id='+val,
	success: function(data){
		$("#mtid").html("");
		$("#mtid").html(data);
	}
	});
}


</script>
<?php }?>
    </body>
</html>