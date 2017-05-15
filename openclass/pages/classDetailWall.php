<!--          <div class="col-sm-6 col-xs-12">
            <div class="card">
              <div class="card-body">
                <div class="section">
                  <div class="section-body">
                      <div role="tabpanel">
                      </div>
                      <div class="tab-content">
    //                      <?php
      //                      $wallList = Model\classModel::getWallList($code);
        //                    if(!empty($wallList)){
           //                   foreach($wallList as $val){
                          ?>
                              <div class="media social-post">
                                <div class="media-left">
                                  <a href="#">
                                    <img src="../assets/images/profile.png" />
                                  </a>
                                </div>
                                <div class="media-body">
                                  <div class="media-heading">
                                    <h4 class="title"><?php //echo $val['title'];?></h4>
                                    <h5 class="timeing"><?php //echo $val['datetime_crt'];?></h5>
                                  </div>
                                  <div class="media-content">
                                    <p><?php //echo $val['description'];?></p>
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
              //                }
                //            }
                          ?>


                          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
               -->           









<div class="col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-header">
          List
        </div>
        <div class="card-body">
          <div class="row">
            
            <div class="col-sm-12">
              <div class="list-group __timeline">
                <div href="#" class="list-group-item">
                  <span class="badge badge-success">14</span>
                  
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
                <a href="#" class="list-group-item">
                  <span class="badge badge-success">1</span> Morbi leo risus
                </a>
                <a href="#" class="list-group-item">
                  <span class="badge badge-success">2</span> Vestibulum at eros
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>