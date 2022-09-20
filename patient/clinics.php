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
                        <h4 class="page-title"><i class="fa fa-hospital-o"></i> Clinics</h4>
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
										<th>Permit</th>
										<th>Address</th>
										<th>Latitude</th>
										<th>Longitude</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>RC Clinic</td>
										<td>Dr. Cristina Groves</td>
										<td><img width="28" height="28" src="../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>4654 Rosario Pasig, Metro Manila</td>
										<td>36°42'N</td>
										<td>60°00'W</td>
									</tr>
									<tr>
										<td>Manila Clinic</td>
										<td>Dr. Marie Wells</td>
										<td><img width="28" height="28" src="../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>1465 Manggahan Pasig, Metro Manila</td>
										<td>14°16'S</td>
										<td>89°45'E</td>
									</tr>
									<tr>
										<td>MD Clinic</td>
										<td>Dr. Linda Barrett</td>
										<td><img width="28" height="28" src="../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>1233 Manggahan Pasig, Metro Manila</td>
										<td>40°10'N</td>
										<td>69°11'E</td>
									</tr>
									<tr>
										<td>Cureline Medical Clinic</td>
										<td>Dr. Ronald Jacobs</td>
										<td><img width="28" height="28" src="../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>3643 Ortigas Pasig, Metro Manila</td>
										<td>06°23'N</td>
										<td>68°10'W</td>
									</tr>
									<tr>
										<td>Clemen's Medical Clinic</td>
										<td>Dr. Mark Hunter</td>
										<td><img width="28" height="28" src="../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>7865 Manggahan Pasig, Metro Manila</td>
										<td>34°28'N</td>
										<td>90°26'E</td>
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
						<h3>Are you sure want to delete this Clinic?</h3>
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