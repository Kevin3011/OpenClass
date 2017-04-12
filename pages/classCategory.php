          <div class="col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-header">
                  Categories List
              </div>
              <div class="card-body">
                <div class="row">
                  <?php
                          $data = Model\classModel::getClassCategory(null);
                          //start for each
                          if(!empty($data)){
                              foreach ($data as $val) {
                  ?>
                    <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                        <img src="<?php echo $val['filePath'];?>" class="img-responsive">
                        <div class="caption">
                          <div>
                            <a href="home?c=<?php echo $val['category_code'];?>" class="btn btn-warning btn-block" role="button"><?php echo $val['name'];?></a>
                          </div>
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
