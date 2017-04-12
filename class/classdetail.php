<!DOCTYPE html>
<?php 
$current="";
$page_title="Class";
$page = isset($_GET['p']) ? $_GET['p'] : 1;
include_once('../model/autoloader.php');
?>
<html>
  <?php include('../extends/header.php');
    

    if(isset($_GET['n'])){
      $isAccepted = Model\classModel::getUserStatus($_SESSION['id_user'],$_GET['n']);
      $code = $_GET['n'];
      $data = Model\classModel::getClassByCode($code);  
    }else{
      header("Location:http://localhost/openclass/home");
    }

    if(isset($_GET['s'])){
      if(empty($isAccepted) && !is_numeric($isAccepted)){
        if($_SESSION['id_user'] != $data['id_user']){
          if($_GET['s'] == "join"){
            Model\classModel::joinClass($_SESSION['id_user'],$_GET['n'],$data['type']);
            header("Location:http://localhost/openclass/class/classdetail?n=".$_GET['n']);
          }
        }   
      }else{
        //header("Location:http://localhost/openclass/home");    
      }
    }  
  ?>
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
        if(isset($data)){
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
                <?php
                    if($_SESSION['id_user'] != $data['id_user']){
                      if(empty($isAccepted) && !is_numeric($isAccepted)){
                ?>
                      <a href=<?php echo "classdetail?s=join&n=" . $_GET['n'] ?> type="button" class="btn btn-success"><i class="fa fa-user-plus"></i> Join</a>
                      
                <?php
                      }else if($isAccepted == "0"){
                ?>
                      <button type="button" class="btn btn-default" disabled=""><i class="fa fa-clock-o"></i> Requested</button>
                <?php      
                      }
                    }
                }
                ?>
              </div>
              <div class="card-body">
                  <div class="section">
                    <div class="section-body">
                      <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" <?php echo ($page == 1 ? 'class="active"' : "")?>><a href="<?php echo "classdetail?n=".$_GET['n']."&p=1";?>">Detail</a></li>
                            <?php if($isAccepted == 1){?>
                              <li role="presentation" <?php echo ($page == 2 ? 'class="active"' : "")?>><a href="<?php echo "classdetail?n=".$_GET['n']."&p=2";?>">Wall</a></li>
                              <li role="presentation" <?php echo ($page == 3 ? 'class="active"' : "")?>><a href="<?php echo "classdetail?n=".$_GET['n']."&p=3";?>">Discussion</a></li>
                              <li role="presentation" <?php echo ($page == 4 ? 'class="active"' : "")?>><a href="<?php echo "classdetail?n=".$_GET['n']."&p=4";?>">Task</a></li>
                              <li role="presentation" <?php echo ($page == 5 ? 'class="active"' : "")?>><a href="<?php echo "classdetail?n=".$_GET['n']."&p=5";?>">Document</a></li>
                            <?php }?>
                            <li role="presentation" <?php echo ($page == 6 ? 'class="active"' : "")?>><a href="<?php echo "classdetail?n=".$_GET['n']."&p=6";?>">Member List</a></li>
                        </ul>
                        <!-- Tab panes -->
                        
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        

        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-body">
                <div class="section">
                  <div class="section-body">
                      <div role="tabpanel">
                      </div>
                      <div class="tab-content">
                        <?php
                          switch($page){
                            case 1:
                              include_once('../pages/classDetailInformation.php');
                              break;
                            case 2:
                              if($isAccepted == 1){
                                include_once('../pages/classDetailWall.php');
                              }else{
                                include_once('../pages/classDetailInformation.php');
                              }
                              break;
                            case 3:
                              if($isAccepted == 1){
                                include_once('../pages/classDetailMemberList.php');
                              }else{
                                include_once('../pages/classDetailInformation.php');
                              }
                              break;
                            case 4:
                              if($isAccepted == 1){
                                include_once('../pages/classDetailMemberList.php');
                              }else{
                                include_once('../pages/classDetailInformation.php');
                              }
                              break;
                            case 5:
                              if($isAccepted == 1){
                                include_once('../pages/classDetailMemberList.php');
                              }else{
                                include_once('../pages/classDetailInformation.php');
                              }
                              break;
                            case 6:
                              include_once('../pages/classDetailMemberList.php');
                              break;                            
                          }
                        ?>  
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>






































      <?php 

        }else{
          echo "THE PAGE YOU'RE LOOKING FOR INVALID";
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





                    