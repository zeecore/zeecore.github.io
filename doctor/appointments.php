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
                        <h4 class="page-title"><i class="fa fa-calendar"></i> Appointments</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-hover custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Appointment No.</th>
										<th>Appointment Type</th>
										<th>Patient</th>
										<th>Date</th>
										<th>Clinic</th>
										<th>Service</th>
										<th>Amount</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>APMT-101-21</td>
										<td>Virtual</td>
										<td>Terry Baker</td>
										<td>Nov 12, 2021</td>
										<td>Manila Clinic</td>
										<td>Pediatric care</td>
										<td><span class="custom-badge status-orange">2,000</span></td>
										<td><span class="custom-badge status-red">cancelled</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>APMT-111-21</td>
										<td>Face to face</td>
										<td>Julia Sims</td>
										<td>Nov 16, 2021</td>
										<td>RCS Clinic</td>
										<td>Hearing and Vision</td>
										<td><span class="custom-badge status-orange">2,000</span></td>
										<td><span class="custom-badge status-blue">pending</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>APMT-121-21</td>
										<td>Face to face</td>
										<td>Joshua Guzman</td>
										<td>Nov 14, 2021</td>
										<td>Clemen's Medical Clinic</td>
										<td>Dental care</td>
										<td><span class="custom-badge status-orange">4,000</span></td>
										<td><span class="custom-badge status-green">completed</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>APMT-112-21</td>
										<td>Virtual</td>
										<td>Patrick Knight</td>
										<td>Nov 16, 2021</td>
										<td>Manila Clinic</td>
										<td>Pediatric care</td>
										<td><span class="custom-badge status-orange">2,000</span></td>
										<td><span class="custom-badge status-blue">pending</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>APMT-123-21</td>
										<td>Face to face</td>
										<td>Denise Stevens</td>
										<td>Nov 16, 2021</td>
										<td>Medical City Clinic</td>
										<td>Health care</td>
										<td><span class="custom-badge status-orange">1,000</span></td>
										<td><span class="custom-badge status-blue">pending</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>APMT-567-21</td>
										<td>Face to face</td>
										<td>Charles Ortega</td>
										<td>Nov 13, 2021</td>
										<td>MD Clinic</td>
										<td>Pediatric care</td>
										<td><span class="custom-badge status-orange">2,500</span></td>
										<td><span class="custom-badge status-red">cancelled</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>APMT-345-21</td>
										<td>Face to face</td>
										<td>Melissa Burton</td>
										<td>Nov 16, 2021</td>
										<td>Cureline Medical Clinic</td>
										<td>Dental care</td>
										<td><span class="custom-badge status-orange">3,000</span></td>
										<td><span class="custom-badge status-blue">pending</span></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="../assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Appointments?</h3>
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