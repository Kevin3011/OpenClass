        <!-- CONTENT -->
      <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                Your Joined Class
              </div>
              <div class="card-body">
                <div class="section">
                  <div role="tabpanel" class="tab-pane active no-padding" id="tab1">
                    <div class="search-result">
                      <ul class="result">
                      <?php
                            $data = Model\classModel::getClassListByUser($_SESSION['id_user']);
                            //start for each
                            if(!empty($data)){
                                foreach ($data as $val) {
                        ?>
                            <li>
                              <div class="img">
                                <img src="<?php echo $val['filePath']?>" />
                              </div>
                              <div class="info">
                                
                                
                                <div class="title"><a href='class/<?php echo $val['class_code']; ?>'><span class="highlight"><?php echo $val['classname']; ?></span></a></div>
                                <div class="description">Joined Since <?php  echo date('M j Y',strtotime($val['dateJoin'])); ?></div>                          
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
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                Your Own Class
              </div>
              <div class="card-body">
                <div class="section">
                  <div role="tabpanel" class="tab-pane active no-padding" id="tab1">
                      <div class="search-result">
                        <ul class="result">
                        <?php
                              $data = Model\classModel::getClassListByOwner($_SESSION['id_user']);
                              //start for each
                              if(!empty($data)){
                                  foreach ($data as $val) {
                          ?>
                              <li>
                                <div class="img">
                                  <img src="<?php echo $val['filePath']?>" />
                                </div>
                                <div class="info">
                                  
                                  
                                  <div class="title"><a href='class/<?php echo $val['class_code']; ?>'><span class="highlight"><?php echo $val['classname']; ?></span></a></div>
                                  <div class="description">Created Since <?php  echo date('M j Y',strtotime($val['createDate'])); ?></div>                          
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
            </div>
          </div>
      </div>

      <div class="btn-floating" id="help-actions">
            <div class="btn-bg"></div>
      </div>
      <!-- END CONTENT -->