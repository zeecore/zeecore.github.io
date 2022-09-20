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
                        <h4 class="page-title"><i class="fa fa-calendar-o"></i> Consultation</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-consultation.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Consultation</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-hover custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Appointment No.</th>
										<th>Diagnosis</th>
										<th>Treatment</th>
										<th>Prescription</th>
										<th>Date of Consultation</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>APMT-121-21</td>
										<td>lung ventilation/perfusion scan</td>
										<td>Vitamin deficiency anemias</td>
										<td><img width="28" height="28" src="../assets/img/permit.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Nov 12, 2021</td>
									</tr>
									<tr>
										<td>APMT-342-21</td>
										<td>angiocardiography</td>
										<td>Iron deficiency anemia</td>
										<td><img width="28" height="28" src="../assets/img/permit.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Nov 23, 2021</td>
									</tr>
									<tr>
										<td>APMT-112-21</td>
										<td>cholecystography</td>
										<td>Hemolytic anemias</td>
										<td><img width="28" height="28" src="../assets/img/permit.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Nov 10, 2021</td>
									</tr>
									<tr>
										<td>APMT-232-21</td>
										<td>echocardiography</td>
										<td>Thalassemia</td>
										<td><img width="28" height="28" src="../assets/img/permit.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Nov 13, 2021</td>
									</tr>
									<tr>
										<td>APMT-342-21</td>
										<td>Complete blood count (CBC)</td>
										<td>Sickle cell anemia</td>
										<td><img width="28" height="28" src="../assets/img/permit.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Nov 16, 2021</td>
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
						<h3>Are you sure want to delete this Consultation?</h3>
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