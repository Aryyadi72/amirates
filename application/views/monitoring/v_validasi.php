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
<div class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container">
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    Detail Evaluasi
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->k_kolom; ?></h1>
                        <sub class="fst-italic">* Kelengkapan Pengisian Kolom</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->k_eam; ?></h1>
                        <sub class="fst-italic">* Kelengkapan Pengisian Kolom</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->k_koordinasi; ?></h1>
                        <sub class="fst-italic">* Kesesuaian titik koordinat dan tarikan jaringan</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->k_lokasi; ?></h1>
                        <sub class="fst-italic">* Kesesuaian lokasi GD/Penyulang</sub>
                    </li>
                    <li class="list-group-item">
                        <h1 class="display-6"><?php echo $detail->perbaikan_error; ?></h1>
                        <sub class="fst-italic">* Perbaikan Error</sub>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>