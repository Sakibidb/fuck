<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php //echo($title); ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo site_url('../vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo site_url('../css/sb-admin-2.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('../vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo $this->include("includes/sidebar") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php echo $this->include("includes/topbar") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="container">

                        <div class="card">
                            <div class="card-body">

                                <?php if (session()->getFlashdata('message') !== NULL) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo session()->getFlashdata('message'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                <?php endif; ?>
                                
                                <h5 class="card-title">Add Product Form</h5>
                                <?= validation_list_errors()?>
                                <!-- No Labels Form -->
                                <form class="row g-3" action="/products/store" method="post" enctype="multipart/form-data">
                                    
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Product Name" name="pname" value="<?=set_value('pname')?>">
                                    </div>
                                    <div class="col-md-6">
                                        <select id="inputState" class="form-select" name="cat" value="<?//=set_value('cat')?>" >
                                            <option selected>Category</option>
                                            <option value="<?=set_value('Car')?>">Car</option>
                                            <option value="<?=set_value('Bus')?>">Bus</option>
                                            <option value="<?=set_value('Truck')?>">Truck</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Model" name="model" value="<?=set_value('model')?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Price" name="price" value="<?=set_value('price')?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="SKU" name="sku" value="<?=set_value('sku')?>">
                                    </div>

                                    <div class="col-md-12">
                                        <input type="file" class="form-control" placeholder="add a photo" name="photo" value="<?=set_value('photo')?>">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- End No Labels Form -->

                            </div>
                        </div>

                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php echo $this->include("includes/footer") ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

     <!-- Bootstrap core JavaScript--> 
     <script src="<?php echo site_url('../vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo site_url('../vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo site_url('../vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo site_url('../js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo site_url('../vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo site_url('../vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo site_url('../js/demo/datatables-demo.js')?>"></script>

</body>

</html>