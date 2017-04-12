<!DOCTYPE html>
<?php 
$current="index";
$page_title="Home";


include_once('model/autoloader.php');
    
?>



<html>
  <?php include('extends/header.php');?>
<body>
  <div class="app app-default">
    <!-- SIDEBAR -->
    <?php include('extends/sidebar.php'); ?>
    <!-- END SIDEBAR -->
  
    

    <!-- CONTAINER -->
    <div class="app-container">
      <!-- NAVBAR -->
      <?php include('extends/navbar.php'); ?>
      <!-- END NAVBAR -->
    
      <!-- CONTENT -->
      <div class="row">
          <?php
          if(isset($_GET['c'])){
              include_once('pages/classList.php');
          }else{
              include_once('pages/classCategory.php');  
          }
          ?>

      </div>


          
















































      <div class="btn-floating" id="help-actions">
      <div class="btn-bg"></div>
      <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
        <i class="icon fa fa-plus"></i>
        <span class="help-text">Shortcut</span>
      </button>
      <div class="toggle-content">
        <ul class="actions">
          <li><a href="class/add">Add Class</a></li>
        </ul>
      </div>
    </div>
      <!-- END CONTENT -->


      <!-- FOOTER -->
      <?php include('extends/footer.php'); ?>
      <!-- END FOOTER -->
    </div>
    <!-- END CONTAINER -->

  </div>
  
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>