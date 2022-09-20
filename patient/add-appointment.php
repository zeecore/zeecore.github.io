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
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Appointment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Appointment Number</label>
                                        <input class="form-control" type="text" value="APMT-123-21" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Appointment Type</label>
                                        <select class="form-control">
                                        <option>Face to face</option>
                                        <option>Virtual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Appointment Date</label>
                                        <input class="form-control" type="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Clinic</label>
                                        <select class="form-control">
                                        <option>Clinic 1</option>
                                        <option>Clinic 2</option>
                                        <option>Clinic 3</option>
                                        <option>Clinic 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Service Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Doctor</label>
                                        <input class="form-control" type="text" value="Dr. Anne Smith" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Create Patient</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    <?php include 'includes/footer.php';?>
</body>


<!-- add-patient24:07-->
</html>
