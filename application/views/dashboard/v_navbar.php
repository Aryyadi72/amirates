<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - AMIRATES</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dashboard_assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>assets/dashboard_assets/css/bootstrap.min.css" />
    <script src="<?php echo base_url(); ?>assets/dashboard_assets/js/bs_js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard_assets/js/bs_js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard_assets/js/bs_js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard_assets/js/bs_js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard_assets/js/bs_js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f0169eb2cd.js" crossorigin="anonymous"></script>

    <!-- Datatable -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard_assets/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard_assets/css/dataTables.bootstrap5.mincss" />
    <script src="<?php echo base_url(); ?>assets/dashboard_assets/js/jquery-3.5.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard_assets/js/jquery.dataTables.min.js"></script>

    <!-- Datatable Kualitas -->
    <script>
    $(document).ready(function() {
        $("#kualitas").DataTable();
    });
    </script>

    <!-- Datatable Kuantitas -->
    <script>
    $(document).ready(function() {
        $("#kuantitas").DataTable();
    });
    </script>

    <!-- Datatable k3 -->
    <script>
    $(document).ready(function() {
        $("#k3").DataTable();
    });
    </script>

    <!-- Datatable Akun -->
    <script>
    $(document).ready(function() {
        $("#akun").DataTable();
    });
    </script>

    <!-- Datatable ILP -->
    <script>
    $(document).ready(function() {
        $("#ilp").DataTable();
    });
    </script>

    <!-- Datatable harian -->
    <script>
    $(document).ready(function() {
        $("#harian").DataTable();
    });
    </script>

    <!-- Datatable harian -->
    <script>
    $(document).ready(function() {
        $("#ljt").DataTable({
            scrollX: true,
        });
    });
    </script>

    <!-- Datatable file gardu -->
    <script>
    $(document).ready(function() {
        $("#gardu").DataTable({
            scrollX: true,
        });
    });
    </script>

    <!-- Datatable gardu -->
    <script>
    $(document).ready(function() {
        $("#lgrd").DataTable();
    });
    </script>

    <!-- Datatable file tiang tr -->
    <script>
    $(document).ready(function() {
        $("#ttr").DataTable();
    });
    </script>

    <!-- Datatable file list ntiang tr -->
    <script>
    $(document).ready(function() {
        $("#lttr").DataTable({
            scrollX: true,
        });
    });
    </script>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AMIRATES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('dashboard'); ?>">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('monitoring'); ?>">Monitoring
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('monit'); ?>">Harian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('gardu'); ?>">Gardu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('gardu/tampil_gardu'); ?>">List Gardu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('k3'); ?>">SLA K3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('ilp'); ?>">SLA ILP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('akun'); ?>">Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout'); ?>">Logout</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>