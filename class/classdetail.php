<!DOCTYPE html>
<?php 
$current="";
$page_title="Class";
include_once('../model/autoloader.php');
    
if(isset($_GET['n'])){

  $code = $_GET['n'];
  $data = Model\classModel::getClassByCode($code);  
}else{
  header("Location:http://localhost/openclass/home");
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
    
      <?php
        if($data != null){   
      ?>
        <!-- CONTENT -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body app-heading">
                <img class="profile-img" src="../images/thumbnail.png">
                <div class="app-title">
                  <div class="title"><span class="highlight"><?php echo $data['classname'];?></span></div>
                  <div class="description">Created by <?php echo $data['name'];?></div>
                </div>
                <!-- JOIN -->
                <button type="button" class="btn btn-success"><i class="fa fa-user-plus"></i> Join</button>
        
              </div>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-tab">
              <div class="card-header">
                <ul class="nav nav-tabs">
                  <li role="tab1" class="active">
                    <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Detail</a>
                  </li>
                  <li role="tab3">
                    <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Member</a>
                  </li>
                </ul>
              </div>
              <div class="card-body no-padding tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1">
                  <div class="row">
                    <div class="col-md-3 col-sm-12">
                      <div class="section">
                        <div class="section-title"><i class="icon fa fa-user" aria-hidden="true"></i> Description</div>
                        <div class="section-body __indent"><?php echo $data['description'];?></div>
                      </div>
                      <div class="section">
                        <div class="section-title"><i class="icon fa fa-book" aria-hidden="true"></i> Category</div>
                        <div class="section-body __indent"><?php echo $data['category_name'];?></div>
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                      <div class="section">
                        <div class="section-title">Wall</div>
                        <div class="section-body">
                          <?php
                            $wallList = Model\classModel::getWallList($code);
                            if(!empty($wallList)){
                              foreach($wallList as $val){
                          ?>
                              <div class="media social-post">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="../assets/images/profile.png" />
                                  </a>
                                </div>
                                <div class="media-body">
                                  <div class="media-heading">
                                    <h4 class="title"><?php echo $val['title'];?></h4>
                                    <h5 class="timeing"><?php echo $val['datetime_crt'];?></h5>
                                  </div>
                                  <div class="media-content">
                                    <p><?php echo $val['description'];?></p>
                                  </div>
                                  <div class="media-action">
                                    <button class="btn btn-link"><i class="fa fa-comments-o"></i> 10 Comments</button>
                                  </div>
                                  <div class="media-comment">
                                    <input type="text" class="form-control" placeholder="comment...">
                                  </div>
                                </div>
                              </div>
                          <?php
                              }
                            }
                          ?>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab3">
                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="section">
                          <div class="section-title">Member List</div>
                          <div class="section-body">
                            <?php 
                              $memberlist = Model\classModel::getClassMember($code);
                              if(!empty($memberlist)){
                                foreach ($memberlist as $val) {
                            ?>
                              <div class="media social-post">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="../assets/images/profile4.png" />
                                  </a>
                                </div>
                                <div class="media-body">
                                  <div class="media-heading">
                                    <h4 class="title"><?php echo $val['name'];?></h4>
                                    <h5 class="timeing">Member Since <?php echo date('M j Y',strtotime($val['dateJoin']));?></h5>
                                  </div>
                                </div>
                              </div>
                            <?php
                                }
                              }
                            ?>


                          </div>
                        </div>
                      </div>
                    </div>                 
                </div>
              </div>
            </div>
          </div>
        </div>



      <?php 

        }
        //end of IF DATA ISNT NULL
      ?>
      <!-- END CONTENT -->

      

      <!-- FOOTER -->
      <?php include('../extends/footer.php'); ?>
      <!-- END FOOTER -->
    </div>
    <!-- END CONTAINER -->

  </div>
  
  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>

</body>
</html>





                    