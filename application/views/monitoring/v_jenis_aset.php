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
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container">
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Detail Jenis Aset
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->tiang_tr; ?></h1>
                        <sub class="fst-italic">batang</sub><br>
                        <sub class="fst-italic">* Tiang Tegangan Rendah</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->jtr; ?></h1>
                        <sub class="fst-italic">kms</sub><br>
                        <sub>* Pendataan JTR</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->tiang_tr; ?></h1>
                        <sub class="fst-italic">kms</sub><br>
                        <sub>* Pendataan STL TM</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->stl_tr; ?></h1>
                        <sub class="fst-italic">kms</sub><br>
                        <sub>* Pendataan STL TM</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->app; ?></h1>
                        <sub class="fst-italic">pelanggan</sub><br>
                        <sub>* Pendataan APP</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->kotak_app; ?></h1>
                        <sub class="fst-italic">pelanggan</sub><br>
                        <sub>* Pendataan Asesories Pelanggan : Kotak APP</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->kwh; ?></h1>
                        <sub class="fst-italic">pelanggan</sub><br>
                        <sub>* Pendataan Asesories Pelanggan : Kotak KWH</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->mcb; ?></h1>
                        <sub class="fst-italic">pelanggan</sub><br>
                        <sub>* Pendataan Asesories Pelanggan : Kotak KWH</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->ct; ?></h1>
                        <sub class="fst-italic">pelanggan</sub><br>
                        <sub>* Pendataan Asesories Pelanggan : Kotak CT</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->pt; ?></h1>
                        <sub class="fst-italic">pelanggan</sub><br>
                        <sub>* Pendataan Asesories Pelanggan : Kotak PT</sub>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>