<?php
    if ($this->session->flashdata('sukses')) {
?>
<div class="callout callout-success">
    <p style="font-size:14px">
        <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
    </p>
</div>
<?php
    }
?>

<style>
.grey-bg {
    background-color: #F5F7FA;
}
</style>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<br><br>
<div class="grey-bg container-fluid">
    <section id="minimal-statistics">
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <div class="d-grid gap-2">
                    <button type="button" name="" id="" class="btn btn-dark btn-block btn-lg" disabled>
                        <h4 class="text-uppercase text-center">Detail Data <u><?= $detail->username; ?></u></h4>
                    </button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Nama Pengguna -->
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-user success font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h3 class="success"><?= $detail->nama_user; ?></h3>
                                    <span>Nama Pengguna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nama Pengguna -->

            <!-- Alamat Pengguna -->
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-pointer danger font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h3><?= $detail->alamat_user ?></h3>
                                    <span>Alamat Pengguna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Alamat Pengguna -->

            <!-- Jenis Kelamin -->
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-users primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h3><?= $detail->jk_user ?></h3>
                                    <span>Jenis Kelamin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jenis Kelamin -->

            <!-- Nomor Telpon -->
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-call-end primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h3><?= $detail->no_telp_user ?></h3>
                                    <span>Nomor Telpon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nomor Telpon -->

            <!-- Email User -->
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-envelope primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h3><?= $detail->email_user ?></h3>
                                    <span>Email User</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Email User -->

            <!-- Unit -->
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-home primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h3><?= $detail->kd_unit ?></h3>
                                    <span>Unit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Unit -->

            <!-- Level -->
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <i class="icon-flag primary font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h3><?= $detail->id_level ?></h3>
                                    <span>Level</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Level -->
        </div>
    </section>
    <section id="stats-subtitle">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <div class="media align-items-stretch">
                                <div class="align-self-center">
                                    <i class="icon-picture primary font-large-2 mr-2"></i>
                                </div>
                                <div class="media-body">
                                    <h4><?= $detail->foto_user ?></h4>
                                    <span>Foto User</span>
                                </div>
                                <div class="align-self-center">
                                    <h1><img src='<?= base_url() ?>./assets/uploads/foto-profil/<?= $detail->foto_user; ?>'
                                            style="width:100%;max-width:100px"></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a name="" id="" class="btn btn-primary btn-block" href=" <?php echo base_url('akun'); ?>""
        role=" button">Kembali</a>
</div>