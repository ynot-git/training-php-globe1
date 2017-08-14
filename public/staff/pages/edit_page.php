<?php
require_once( '../../../private/initialize.php');

if (!isset($_GET['id']) ){
	redir_to( url_for('/staff/pages/index.php') );
} else {
	$id = $_GET['id'];
	   echo $id;
}
//Initialize remaining values (in case not a post request)
$foodname ='';
$stock ='';
$owner ='';


if  (is_post_request()) {
	// Handle/Retrieve the form values sent by new.php (the POST variables)
	$foodname= isset($_POST['foodname']) ? $_POST['foodname']  : '';
	$stock= isset($_POST['stock']) ? $_POST['stock']: '';
	$owner=isset($_POST['owner']) ?  $_POST['owner'] : '';
	
	//Do "processing" on the received variables
	echo "Form parameters<br />";
	echo "foodname: " . $foodname. "<br />";
	echo "stock: " . $stock. "<br />";
	echo "owner: " . $owner. "<br />";
	
} else {
	//redir_to( url_for('/staff/pages/index.php') );
	// Instead, if not a 'post' (ie, is a Link Call) then proceed with form display for "Edit"
}

$page_title = "Edit Page";
include (SHARED_PATH . '/staff_header.php');
?>


<div id="content">
 <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to Pages List</a><a>
 </a><div class="page edit"> 
 <h1>Edit Page</h1>
 <form action="<?php echo url_for('/staff/pages/edit_page.php') . "?id=" . h( u( $id )) ;   ?>   " method="post">
  <dl>
     <dt>FoodName: </dt>
     <dd><input type="text" name="foodname" value="<?php echo $foodname?>" /></dd> 
   </dl>
   
   <dl>
     <dt>In Stock? </dt>
     <dd> 
          <input type="hidden" name="stock" value="0" />
          <input type="checkbox" name="stock" value="1" />
     </dd> 
   </dl>
   
   <dl>
     <dt>Owner: </dt>
     <dd><input type="text" name="owner" value="<?php echo $owner?>"  /> </dd> 
   </dl>
   
   <div id="operations"> 
     <input type="submit" name="submit" value="Edit Page" />
   </div> 
 </form>
 
 </div> 
</div> 

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

