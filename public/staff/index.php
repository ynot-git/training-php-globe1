<?php require_once('../../private/initialize.php');?>

<!--header.php stuff goes here-->
<?php $page_title = 'Staff'; ?>
<?php 
  #include('../../private/shared/staff_header.php')
  include(SHARED_PATH . '/staff_header.php');
?>

<div id="content">
	<div id="main-menu">
	  <h2>Main Menu</h2>
	  <ul>
	    <li><a href= <?php echo url_for('/staff/subjects/index.php'); ?> >Subjects</a>
	      </li>
	    <li><a href= <?php echo url_for('/staff/pages/index.php'); ?> >Pages</a>
	      </li>
	  </ul>
	</div>
</div>

<!-- footer.php stuff will be here -->
<?php 
  #include('../../private/shared/staff_footer.php')
  include(SHARED_PATH . '/staff_footer.php');
?>