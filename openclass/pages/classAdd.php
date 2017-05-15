      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Create a New Class
            </div>
            <div class="card-body">
              <form class="form form-horizontal" action="../action/class/add" method="post" enctype="multipart/form-data">
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
                      <label class="col-md-3 control-label">Class Profile Picture</label>
                      <div class="col-md-9">
                        <input type="file" class="form-control" name="profile" accept="image/*">
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
                      <button type="submit" name="submit" class="btn btn-primary">Create</button>
                      <button type="button" name="cancel" class="btn btn-default">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->



  