          <div class="col-lg-12">
            <div class="card card-tab">
              <div role="tabpanel" class="tab-pane active" id="fontawesome">
                  <div class="search-result">
                    <ul class="result">
                      <?php
                          $data = Model\classModel::getClassListByCategory($_GET['c']);
                          //start for each
                          if(!empty($data)){
                              foreach ($data as $val) {
                      ?>
                          <li>
                            <div class="img">
                              <img src="<?php echo $val['filePath']?>" />
                            </div>
                            <div class="info">
                              <?php if($val['type'] == 0){?>  
                                <div><span class="badge badge-success badge-icon"><i class="fa fa-unlock" aria-hidden="true"></i><span>Public</span></span></div>
                              <?php }else if($val['type'] == 1){?>
                                <div><span class="badge badge-primary badge-icon"><i class="fa fa-lock" aria-hidden="true"></i><span>Private</span></span></div>
                              <?php }?>
                              
                              
                              <div class="title"><a href='http://localhost/class/<?php echo $val['class_code']; ?>'><span class="highlight"><?php echo $val['classname']; ?></span></a></div>
                              <div class="description">Created by <?php echo $val['name']; ?></div>                          
                            </div>
                          </li>
                      <?php 
                            }
                          //end of foreach
                          }else{
                            echo "no data found!";
                          }
                      ?>
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
