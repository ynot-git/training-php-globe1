<?php require_once ('../../../private/initialize.php');  ?>
 
<?php 
//create "page" array, rx-note: Notice the trailing "," at end of last row
$pages = [
  [ 'id' => '10', 'foodname' => 'cake', 'stock' => '1', 'owner' => 'bob'],
  [ 'id' => '20', 'foodname' => 'pie', 'stock' => '0', 'owner' => 'john'],
  [ 'id' => '30', 'foodname' => 'mint','stock' => '0', 'owner' => 'kathy'],
  [ 'id' => '5', 'foodname' => 'choc&carm', 'stock' => '1', 'owner' => 'al'],
];

?>

<!--  header stuff --> 
<?php 
$page_title = 'Pages';
include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
 <div class="pages listing">
 <h1>Pages</h1>
 
     <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/pages/new_page.php'); ?>">Create New Page</a>
    </div>
    
 <table class="list">
  <tr>
  <th>ID  </th>
  <th>FOODNAME </th>  
  <th>IN-STOCK  </th>  
  <th>OWNER  </th>  
  <th>&nbsp; </th> 
  <th>&nbsp; </th>   
  </tr> 
  

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo h( $page['id']); ?></td>
          <td><?php echo h( $page['foodname']); ?></td>
          <td><?php echo $page['stock'] == 1 ? 'YES' : 'no'; ?></td>
          <td><?php echo h( $page['owner'] ) ; ?></td> 
          <td><a class="action" href=<?php echo url_for('staff/pages/show.php') . '?id=' . h( u( $page['id']) ) ; ?>  >View</a></td>
          <td><a class="action" href=<?php echo url_for('staff/pages/edit_page.php') . '?id=' . h( u( $page['id']) ) ; ?>  >Edit</a></td> 
    	  </tr>
      <?php } ?>
  
 </table>
 
 </div> 
</div>

<!--  footer stuff -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>