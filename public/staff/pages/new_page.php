<?php 
require_once('../../../private/initialize.php');

$page_title = "Create New Page";
include(SHARED_PATH . '/staff_header.php');  
?>

<div id="content">
 <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to Pages List</a><a>
 </a><div class="page new"> 
 <h1>Create new Page</h1>
 <form action="" method="post">
   <dl>
     <dt>FoodName: </dt>
     <dd><input type="text" name="foodname" value=""/></dd> 
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
     <dd><input type="text" name="owner" value="" /> </dd> 
   </dl>
   
   <div id="operations"> 
     <input type="submit" name="submit" value="Create Page" />
   </div> 
 </form>
 
 </div> 
</div> 
<?php include(SHARED_PATH . '/staff_footer.php'); ?>

