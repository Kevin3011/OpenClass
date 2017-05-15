<div class="col-sm-12 col-xs-12">
	<div class="card">
        <div class="card-body">
			<div class="section">
				<div class="section-body">
					<div class="tab-content">
						<div class="row">

							<?php
			                    if($_SESSION['id_user'] == $data['id_user']){
							?>
								<div class="col-sm-2 pull-right">
									<div>
										<button type="button" id="discussionModal" class="btn btn-success" data-toggle="modal" data-target="#myModal">
										Upload A Document
										</button>
									</div>
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
													<h4 class="modal-title">Create new Discussion</h4>
												</div>
												<form action="http://localhost/action/discussion/<?php echo $_GET['ClassCode']?>/add" method="post" enctype="multipart/form-data">
													<div class="modal-body">
														Topic
														<input type="text" class="form-control" placeholder="" name="topic">
														Description
														<textarea class="form-control" placeholder="" name="description"></textarea>
														
														
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
							<?php
								}
							?>



							<div class="col-sm-6 col-xs-12">
								<div class="section-title">Document List</div>
								<div class="section-body">
									<div class="search-result">
										<ul class="result">
											<li>
												<div class="info">
													<div class="title"><a href="http://localhost/documents/170505144219087836/Tugas3_Kevin_32140067.docx"><span class="highlight">Document Name 1</span></a></div>
													<div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
												</div>
											</li>
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
												<li><a href="#">1</a></li>
												<li class="active"><a href="#">2</a></li>
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
