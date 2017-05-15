
<?php 
$current="";
$page_title="Class";
$page = isset($_GET['p']) ? $_GET['p'] : 'detail';

    if(isset($_GET['d'])){

    }
    

    if(isset($_GET['ClassCode'])){
      $isAccepted = Model\classModel::getUserStatus($_SESSION['id_user'],$_GET['ClassCode']);
      $code = $_GET['ClassCode'];
      $data = Model\classModel::getClassByCode($code);
    }else{
      header("Location:http://localhost/home");
    }


  ?>


      <?php
        if(isset($data)){
          if($data != null){
      ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body app-heading">
                <img class="profile-img" src="<?php echo $data['filePath']?>">
                <div class="app-title">
                  <div class="title"><span class="highlight"><?php echo $data['classname'];?></span></div>
                  <div class="description">Created by <?php echo $data['name'];?></div>
                </div>
                
                <?php
                //JOIN CLASS
                    if($_SESSION['id_user'] != $data['id_user']){
                      if(empty($isAccepted) && !is_numeric($isAccepted)){
                ?>
                      <a href=<?php echo $_GET['ClassCode'] ."/join" ?> type="button" class="btn btn-success"><i class="fa fa-user-plus"></i> Join</a>                      
                <?php
                      }else if($isAccepted == "0"){
                ?>
                      <button type="button" class="btn btn-default" disabled=""><i class="fa fa-clock-o"></i> Requested</button>
                <?php      
                      }
                    }
                //END OF JOIN CLASS
          
                
                ?>
              </div>
              <div class="card-body">
                  <div class="section">
                    <div class="section-body">
                      <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" <?php echo ($page == 'detail' ? 'class="active"' : "")?>><a href="<?php echo 'http://localhost/class/' . $_GET['ClassCode'];?>">Home</a></li>
                            <?php if($isAccepted == 1 || $_SESSION['id_user'] == $data['id_user']){?>
                              <!--<li role="presentation" <?php //echo ($page == 'wall' ? 'class="active"' : "")?>><a href="<?php //echo 'http://localhost/class/' . $_GET['ClassCode']."/wall";?>">Wall</a></li>-->
                              <li role="presentation" <?php echo ($page == 'discussion' ? 'class="active"' : "")?>><a href="<?php echo 'http://localhost/class/' . $_GET['ClassCode']."/discussion";?>">Discussion</a></li>
                              <li role="presentation" <?php echo ($page == 'task' ? 'class="active"' : "")?>><a href="<?php echo 'http://localhost/class/' . $_GET['ClassCode']."/task";?>">Task</a></li>
                              <li role="presentation" <?php echo ($page == 'document' ? 'class="active"' : "")?>><a href="<?php echo 'http://localhost/class/' . $_GET['ClassCode']."/document";?>">Document</a></li>
                            <?php }?>
                            <li role="presentation" <?php echo ($page == 'memberlist' ? 'class="active"' : "")?>><a href="<?php echo 'http://localhost/class/' . $_GET['ClassCode']."/memberlist";?>">Member List</a></li>
                            <?php if($_SESSION['id_user'] == $data['id_user']){?>
                              <li role="presentation" <?php echo ($page == 'options' ? 'class="active"' : "")?>><a href="<?php echo 'http://localhost/class/' . $_GET['ClassCode']."/options";?>">Options</a></li>
                            <?php } ?>
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
           <?php
                switch($page){
                  case 'detail':
                    include_once('pages/classDetailInformation.php');
                    break;
                  case 'wall':
                    if($isAccepted == 1 || $_SESSION['id_user'] == $data['id_user']){ 
                      include_once('pages/classDetailWall.php');
                    }else{
                      
                    }
                    break;
                  case 'discussion':
                    if($isAccepted == 1 || $_SESSION['id_user'] == $data['id_user']){
                      include_once('pages/classDetailDiscussion.php');
                    }else{
                      
                    }
                    break;
                  case 'task':
                    if($isAccepted == 1 || $_SESSION['id_user'] == $data['id_user']){
                      include_once('pages/classDetailTask.php');
                    }else{

                    }
                    break;
                  case 'document':
                    if($isAccepted == 1 || $_SESSION['id_user'] == $data['id_user']){ 
                      include_once('pages/classDetailDocument.php');
                    }else{
                      
                    }
                    break;
                  case 'memberlist':
                    include_once('pages/classDetailMemberList.php');
                    break;  
                  case 'options':
                    if($_SESSION['id_user'] == $data['id_user']){ 
                      include_once('pages/classDetailOption.php');
                    }else{

                    }
                    break;                          
                }
            ?>  
                      
        </div>


      <?php 
          }else{
              echo "SORRY THE PAGE YOU'RE LOOKING FOR IS INVALID";
          }
        }else{
          echo "THE PAGE YOU'RE LOOKING FOR INVALID";
        }
        //end of IF DATA ISNT NULL
      ?>

      