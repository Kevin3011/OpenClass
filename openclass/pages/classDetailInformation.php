          <div class="col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-body">
                <div class="section">
                  <div class="section-body">
                      <div role="tabpanel">
                      </div>
                      <div class="tab-content">
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
                  </div>
                </div>
              </div>
            </div>
          </div>