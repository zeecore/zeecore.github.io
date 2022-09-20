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
                        <h4 class="page-title">Add Service</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Clinic Name </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Service Name </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Service Deescription</label>
                                <textarea class="form-control" rows="3" cols="30"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Amount </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Create Service</button>
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
