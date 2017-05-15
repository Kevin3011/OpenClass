<?php
if(isset($_GET['d'])){
?>


<div class="col-sm-12 col-xs-12">
	<div class="card">
        <div class="card-body">
			<div class="section">
				<div class="section-body">
					<div class="tab-content">
						<?php
							$data = Model\classDiscussionModel::getByDiscussionId($_GET['d']);				
						?>
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="section-title"><?php echo $data['title']?></div>
								<div class="section-body">
									<div class="media social-post">
										<div class="media-left">
											<a href="#">
											<img src="<?php echo $data['picture']?>" />
											</a>
										</div>
										<div class="media-body">
											<div class="media-heading">
											<h4 class="title"><?php echo $data['name']?></h4>
											<h5 class="timeing"><?php echo Model\dbHelper::humanTiming($data['datetime_crt']) . " ago"; ?></h5>
											</div>
											<div class="media-content">
												<?php echo $data['description'];?>
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

<div class="col-sm-12 col-xs-12">
	<div class="card">
        <div class="card-body">
			<div class="section">
				<div class="section-body">
					<div class="tab-content">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="section-title">Task Answer</div>
								
							</div>
						</div>
						<?php 
						
						$dataReply = Model\classDiscussionModel::getCommentByDiscussionId($_GET['d']);
						if(!empty($dataReply)){
							foreach ($dataReply as $val) {
						?>
						
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="section-body">
										<div class="media social-post">
											<div class="media-left">
												<a href="#">
												<img src="<?php echo $val['picture'];?>" />
												</a>
											</div>
											<div class="media-body">
												<div class="media-heading">
												<h4 class="title"><?php echo $val['name'];?></h4>
												<h5 class="timeing"><?php echo Model\dbHelper::humanTiming($val['datetime_crt']) . " ago"; ?></h5>
												</div>
												<div class="media-content">
													<?php echo $val['comment'];?>
												</div>   
											</div>
											
										</div>
									</div>
									<div class="section-title"></div>
								</div>
							</div>
						
						<?php
							}
						}
						?>
                        <div class="footer">
                            <div class="card-body">
                                <nav>
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
                                </nav>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
}else{
?>


<div class="col-sm-12 col-xs-12">
	<div class="card">
        <div class="card-body">
			<div class="section">
				<div class="section-body">
					<div class="tab-content">
						<div class="row">


							<div class="col-sm-1 pull-right">
								<div>
									<button type="button" id="discussionModal" class="btn btn-success" data-toggle="modal" data-target="#myModal">
									Add Task
									</button>
								</div>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
												<h4 class="modal-title">Create new Task</h4>
											</div>
											<form action="http://localhost/action/discussion/<?php echo $_GET['ClassCode']?>/add" method="post" enctype="multipart/form-data">
												<div class="modal-body">
													Topic
													<input type="text" class="form-control" placeholder="" name="topic">
													Question
													<textarea class="form-control" placeholder="" name="description"></textarea>
                                                    Additional Files
                                                    <input type="file" class="form-control" name="profile" accept="image/*">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
													<button type="submit" name="submit" class="btn btn-sm btn-success">Save changes</button>
												</div>
											</form>

										</div>
									</div>
								</div>
							</div>



							<div class="col-sm-6 col-xs-12">
								<div class="section-title">
									Task List
								</div>
								
								<div class="section-body">
									<div class="search-result">
										<ul class="result">
										<?php
											$data = Model\classDiscussionModel::getListById($_GET['ClassCode']);
											//start for each
											if(!empty($data)){
												foreach ($data as $val) {
										?>
											<li>
												<div class="info">
													<div class="title"><a href="<?php echo $_SERVER['REQUEST_URI'] . "/" . $val['discussion_no']?>"><span class="highlight"><strong><?php echo $val['title']?></strong><i> (moderator: <?php echo $val['name'] ?>)</i></span></a></div>
													<div class="description"><?php echo substr($val['description'],0,50) . "...." ?></div>
												</div>
											</li>
										<?php
												}
											}
										?>
										</ul>
									</div>
								</div>
								<div class="footer">
									<div class="card-body">
										<nav>
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
										</nav>
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



<?php
}
?>