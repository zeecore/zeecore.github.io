<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php';?>
<body>
    <div class="main-wrapper">

    <?php include 'includes/topbar.php';?>
    <?php include 'includes/sidebar.php';?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title"><i class="fa fa-handshake-o"></i> Services</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-hover custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Clinic Name</th>
										<th>Doctor Name</th>
										<th>Service Name</th>
										<th>Description</th>
										<th>Amount</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>RC Clinic</td>
										<td>Dr. Cristina Groves</td>
										<td>Health care</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
										<td><span class="custom-badge status-green">1,500</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>Manila Clinic</td>
										<td>Dr. Marie Wells</td>
										<td>Pediatric care</td>
										<td>Fusce gravida scelerisque maximus.</td>
										<td><span class="custom-badge status-green">2,500</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>MD Clinic</td>
										<td>Dr. Linda Barrett</td>
										<td>Dental Care</td>
										<td>Maecenas dapibus dignissim nunc, vitae hendrerit metus blandit vel.</td>
										<td><span class="custom-badge status-green">1,000</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>Cureline Medical Clinic</td>
										<td>Dr. Ronald Jacobs</td>
										<td>Hearing and Vision</td>
										<td>Duis pulvinar facilisis tellus a luctus.</td>
										<td><span class="custom-badge status-green">3,000</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>Clemen's Medical Clinic</td>
										<td>Dr. Mark Hunter</td>
										<td>Urgent care</td>
										<td>Fusce gravida scelerisque maximus.</td>
										<td><span class="custom-badge status-green">2,000</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
		<div id="delete" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="../assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Service?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    <?php include 'includes/footer.php';?>
</body>


<!-- patients23:19-->
</html>