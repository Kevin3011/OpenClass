<!DOCTYPE html>
<?php 
$current="myclass";
$page_title="My Class";

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
          <div class="col-lg-12">
            <div class="card card-tab">
              <div role="tabpanel" class="tab-pane active no-padding" id="tab1">
                  <div class="search-result">
                    <ul class="result">
                      <li>
                        <div class="img">
                          <img src="images/thumbnail.png" />
                        </div>
                        <div class="info">
                          <div class="title"><a href="#"><span class="highlight">Pemrograman Web</span></a></div>
                          <div class="description">Created by Fendy Winata, S.Kom</div>
                        </div>
                      </li>
                      <li>
                        <div class="img">
                          <img src="images/thumbnail.png" />
                        </div>
                        <div class="info">
                          <div class="title"><a href="#"><span class="highlight">Pemrograman Terstruktur</span></a></div>
                          <div class="description">Created by Ricky Tahmas S.Kom,M.Kom.,M.M.</div>
                        </div>
                      </li>
                    </ul>
                    <div class="footer">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              
            </div>
          </div>
        </div>

            <div class="btn-floating" id="help-actions">
            <div class="btn-bg"></div>
            
      
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