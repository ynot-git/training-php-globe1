<?php require_once('../../../private/initialize.php'); ?>
<?php 

$pageNo = isset($_GET['id']) ? $_GET['id'] : null;
//echo 'The page value is ' . $pageNo . '<p>';

?>
 

<?php $page_title = 'Show Page: ' . $pageNo; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to Page List</a>

  <div class="page show">

    Page ID: <?php echo h($pageNo); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>