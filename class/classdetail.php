<!DOCTYPE html>
<?php 
$current="";
$page_title="Class";
if(isset($_GET['n'])){
  $name = $_GET['n'];
}else{
  header("Location:http://localhost/openclass/home");
}
include_once('../api/models.php');

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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body app-heading">
              <img class="profile-img" src="../images/thumbnail.png">
              <div class="app-title">
                <div class="title"><span class="highlight"><?php if(isset($name)) echo $name;?></span></div>
                <div class="description">Created by Fendy</div>
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
                      <div class="section-body __indent">What you gonna learn in this class is about Web Programming. We teach every good ways to make a nice website and you can starts here!</div>
                    </div>
                    <div class="section">
                      <div class="section-title"><i class="icon fa fa-book" aria-hidden="true"></i> Category</div>
                      <div class="section-body __indent">Computer Engineering</div>
                      <div class="section-body __indent">Computer Science</div>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-12">
                    <div class="section">
                      <div class="section-title">Wall</div>
                      <div class="section-body">
                        <div class="media social-post">
                          <div class="media-left">
                            <a href="#">
                              <img src="../assets/images/profile.png" />
                            </a>
                          </div>
                          <div class="media-body">
                            <div class="media-heading">
                              <h4 class="title">Scott White</h4>
                              <h5 class="timeing">20 mins ago</h5>
                            </div>
                            <div class="media-content">
                              <p>First Wall.
                                Why this is happening?
                              </p>
                              <p>I Thought you should read this images</p>
                              <div class="attach">
                                <a href="#" class="thumbnail">
                                  <img src="http://placehold.it/100x100" class="img-responsive">
                                </a>
                                <a href="#" class="thumbnail">
                                  <img src="http://placehold.it/100x100" class="img-responsive">
                                </a>
                              </div>
                            </div>
                            <div class="media-action">
                              <button class="btn btn-link"><i class="fa fa-thumbs-o-up"></i> 2 Like</button>
                              <button class="btn btn-link"><i class="fa fa-comments-o"></i> 10 Comments</button>
                            </div>
                            <div class="media-comment">
                              <input type="text" class="form-control" placeholder="comment...">
                            </div>
                          </div>
                        </div>
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
                          <div class="media social-post">
                            <div class="media-left">
                              <a href="#">
                                <img src="../assets/images/profile4.png" />
                              </a>
                            </div>
                            <div class="media-body">
                              <div class="media-heading">
                                <h4 class="title">Ricky Tahmas</h4>
                                <h5 class="timeing">Member Since Dec 15, 2016</h5>
                              </div>
                            </div>
                          </div>
                          <div class="media social-post">
                            <div class="media-left">
                              <a href="#">
                                <img src="../assets/images/profile2.png" />
                              </a>
                            </div>
                            <div class="media-body">
                              <div class="media-heading">
                                <h4 class="title">Fendy Winata</h4>
                                <h5 class="timeing">Member Since Dec 15, 2017</h5>
                              </div>
                            </div>
                          </div>
                          <div class="media social-post">
                            <div class="media-left">
                              <a href="#">
                                <img src="../assets/images/profile3.png" />
                              </a>
                            </div>
                            <div class="media-body">
                              <div class="media-heading">
                                <h4 class="title">Yenti Juliana</h4>
                                <h5 class="timeing">Member Since Dec 15, 2016</h5>
                              </div>
                            </div>
                          </div>
                          <div class="media social-post">
                            <div class="media-left">
                              <a href="#">
                                <img src="../assets/images/profile4.png" />
                              </a>
                            </div>
                            <div class="media-body">
                              <div class="media-heading">
                                <h4 class="title">Lany Hariyanto</h4>
                                <h5 class="timeing">Member Since Dec 15, 2017</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                 
              </div>
            </div>
          </div>
        </div>
      </div>

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





                    