<?php
require_once('../../../private/initialize.php');

if (!isset($_GET['id']) ){ 
	redir_to( url_for('/staff/subjects/index.php') );
} else {
	$id = $_GET['id'];
	//echo $id;
} 
//Initialize remaining values (in case not a post request)
$menu_name ='';
$position ='';
$visible ='';


if  (is_post_request()) {
	// Handle/Retrieve the form values sent by new.php (the POST variables)
	$menu_name = isset($_POST['menu_name']) ? $_POST['menu_name']  : '';
	$position = isset($_POST['position']) ? $_POST['position']: '';
	$visible =isset($_POST['visible']) ?  $_POST['visible'] : '';
	
	//Do "processing" on the received variables
	echo "Form parameters<br />";
	echo "Menu name: " . $menu_name . "<br />";
	echo "Position: " . $position . "<br />";
	echo "Visible: " . $visible . "<br />";
	
} else {
	//redir_to( url_for('/staff/subjects/index.php') );
	// Instead, if not a 'post' (ie, is a Link Call) then proceed with form display for "Edit"
}

?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php') . "?id=" . h( u( $id )) ;   ?>   " method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
