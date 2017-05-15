<div class="col-md-12">
      <div class="card card-tab card-mini">
        <div class="card-header">
          <ul class="nav nav-tabs">
            <li role="tab1" class="active">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Edit Class</a>
            </li>
            <li role="tab2">
              <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Setting</a>
            </li>
            <li role="tab3">
              <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Document</a>
            </li>
          </ul>
        </div>
        <div class="card-body tab-content no-padding">
          <div role="tabpanel" class="tab-pane active" id="tab1">


            <div class="card-body">
              <form class="form form-horizontal" action="../api/addClassAPI.php" method="post">
                <div class="section">
                  <div class="section-title">Information</div>
                  <div class="section-body">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Class Name</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="" name="name">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-3">
                        <label class="control-label">Description</label>
                        <p class="control-label-help">( short detail of class , 150 max words )</p>
                      </div>
                      <div class="col-md-9">
                        <textarea class="form-control" name="description"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">Category</label>
                      <div class="col-md-4">
                        <div class="input-group">
                          <select class="select2" name="category">
                            <?php 
                                $data = Model\classModel::getClassCategory(null);
                                //start for each
                                if(!empty($data)){
                                    foreach ($data as $val) {
                                      echo "<option value='" . $val['category_code'] . "'>" . $val['name'] . "</option>";
                                    }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>     
                    
                     <div class="form-group">
                      <label class="col-md-3 control-label">Type</label>
                      <div class="col-md-9">
                        <div class="radio radio-inline">
                            <input type="radio" name="type" id="radio10" value="1">
                            <label for="radio10">
                              Private
                            </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" name="type" id="radio11" value="0" checked>
                            <label for="radio11">
                              Public
                            </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                
                <div class="form-footer">
                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Save</button>
                      <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>







          </div>
          <div role="tabpanel" class="tab-pane" id="tab2">
                Delete Your Own Class
                <a class="btn btn-danger" role="button">DELETE</a>
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          </div>


            <div role="tabpanel" class="tab-pane" id="tab3">
            </div>
        </div>
      </div>
</div>