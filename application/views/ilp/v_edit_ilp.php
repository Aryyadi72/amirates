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

<div class="container">
    <form action="<?php echo base_url('ilp/proses_edit_ilp/'.$ilp['id_ilp']); ?>" method="post"
        enctype="multipart/form-data" role="form">

        <input type="hidden" name="id_ilp" value="<?php echo $ilp['id_ilp']; ?>">

        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nama Pembuat</label>
            <input type="text" class="form-control" id="nm_pembuat_ilp" name="nm_pembuat_ilp"
                value="<?php echo $ilp['nm_pembuat_ilp']; ?>">
        </div>

        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Kriteria 1</label>
            <input type="text" class="form-control" id="kriteria_ilp_1" name="kriteria_ilp_1"
                value="<?php echo round($ilp['kriteria_ilp_1']); ?>">
            <sub class="fst-italic">
                *Meminta / menerima imbalan (gratifikasi) dari pelanggan yang dilayani
                dan/atau
                dari PIHAK PERTAMA secara langsung.
            </sub>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Kriteria 2</label>
            <input type="text" class="form-control" id="kriteria_ilp_2" name="kriteria_ilp_2"
                value="<?php echo round($ilp['kriteria_ilp_2']); ?>">
            <sub class="fst-italic">
                *Melakukkan pungutan liar, Kolusi Korupsi atau Nepotisme.
            </sub>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Kriteria 3</label>
            <input type="text" class="form-control" id="kriteria_ilp_3" name="kriteria_ilp_3"
                value="<?php echo round($ilp['kriteria_ilp_3']); ?>">
            <sub class="fst-italic">
                *Dengan sengaja tidak memberikan kemudahan, kecepatan dan
                transparansi terkait layanan publik.
            </sub>
        </div>
        <hr>
        <div class="form-group">
            <label for="formFile" class="form-label mt-4"></label>
            <input class="form-control" type="file" id="formFile" name="userfile">
            <sub><?php echo $ilp['dok_ilp']; ?></sub>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</div>
</form>
<br>