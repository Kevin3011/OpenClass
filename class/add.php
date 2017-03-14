<!DOCTYPE html>
<?php 
$current="index";
$page_title="Create Class";
if(isset($_GET['n'])){
  $name = $_GET['n'];
}

?>
<html>
  <?php include('../extends/header.php');?>
<body>
  <div class="app app-default">
    <!-- SIDEBAR -->
    <?php include('../extends/sidebar.php'); ?>
    <!-- END SIDEBAR -->
  
    

    <!-- CONTAINER -->
    <div class="app-container">
      <!-- NAVBAR -->
      <?php include('../extends/navbar.php'); ?>
      <!-- END NAVBAR -->
    
      <!-- CONTENT -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Create a New Class
            </div>
            <div class="card-body">
              <form class="form form-horizontal">
                <div class="section">
                  <div class="section-title">Information</div>
                  <div class="section-body">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Class Name</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-3">
                        <label class="control-label">Description</label>
                        <p class="control-label-help">( short detail of class , 150 max words )</p>
                      </div>
                      <div class="col-md-9">
                        <textarea class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">Category</label>
                      <div class="col-md-4">
                        <div class="input-group">
                          <select class="select2">
                            <option value="1">Computer Science</option>
                            <option value="2">Information System</option>
                            <option value="3">Visual Communication Design</option>
                            <option value="4">Industrial</option>
                          </select>
                        </div>
                      </div>
                    </div>     
                    
                     <div class="form-group">
                      <label class="col-md-3 control-label">Type</label>
                      <div class="col-md-9">
                        <div class="radio radio-inline">
                            <input type="radio" name="radio4" id="radio10" value="option10">
                            <label for="radio10">
                              Private
                            </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" name="radio4" id="radio11" value="option11" checked>
                            <label for="radio11">
                              Public
                            </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                
                <div class="form-footer">
                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button type="submit" class="btn btn-primary">Create</button>
                      <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>

      <!-- FOOTER -->
      <!-- END FOOTER -->

    <!-- END CONTAINER -->
  </div>
  
  
  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>

</body>
</html>



  