<!-- ignore that it doesn't have php wrapper -->

<?php if ( !isset($page_title) ) 
{ 
	$page_title = 'General Start';
}
?>

<!doctype html>

<html lang="en">
<head>
	<title>GBI: <?php echo $page_title; ?> 
	</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" media="all" href=
	<?php 
	  //echo WWW_ROOT. '/stylesheets/staff.css';  	 
	  echo url_for('stylesheets/staff.css');  
	  ?>   
	/>
</head>

<body>
	<header> <h1>GBI <?php echo $page_title; ?> Area </h1> </header>
	<navigation>
	<ul>
	<li>
	<a href= <?php 
	  //echo WWW_ROOT. '/staff/index.php';  	 
	  echo url_for('/staff/index.php');  
	  ?> 
	> Go to Main Menu </a>
	</li>
		 
	</ul>
	</navigation> 
 