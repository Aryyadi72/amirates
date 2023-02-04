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
    <form action="<?php echo base_url('k3/proses_edit_k3/'.$k3['id_k3']); ?>" method="post">

        <input type="hidden" name="id_k3" value="<?php echo $k3['id_k3']; ?>">

        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nama Pembuat</label>
            <input type="text" class="form-control" id="nm_pembuat_k3" name="nm_pembuat_k3"
                value="<?php echo $k3['nm_pembuat_k3']; ?>">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Tanggal Dibuat</label>
            <div class="input-group date">
                <input type="date" name="tgl_pembuat_k3" class="form-control pull-right" id="" placeholder="Tanggal"
                    value="<?php echo $k3['tgl_pembuat_k3']; ?>">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Kriteria 1</label>
            <input type="text" class="form-control" id="kriteria_k3_1" name="kriteria_k3_1"
                value="<?php echo round($k3['kriteria_k3_1']); ?>">
            <sub class="fst-italic">
                *Menggunakan alat pelindung diri (APD) dan menaati peraturan K2 dan Lingkungan.
            </sub>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Kriteria 2</label>
            <input type="text" class="form-control" id="kriteria_k3_2" name="kriteria_k3_2"
                value="<?php echo round($k3['kriteria_k3_2']); ?>">
            <sub class="fst-italic">
                *Peralatan sesuai spesifikasi yang ditetapkan oleh PIHAK PERTAMA.
            </sub>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Kriteria 3</label>
            <input type="text" class="form-control" id="kriteria_k3_3" name="kriteria_k3_3"
                value="<?php echo round($k3['kriteria_k3_3']); ?>">
            <sub class="fst-italic">
                *Peralatan tersedia dengan lengkap sesuai yang dipersyaratkan oleh PIHAK PERTAMA.
            </sub>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Kriteria 3</label>
            <input type="text" class="form-control" id="kriteria_k3_4" name="kriteria_k3_4"
                value="<?php echo round($k3['kriteria_k3_4']); ?>">
            <sub class="fst-italic">
                *Menggunakan alat pelindung diri (APD) dan menaati peraturan K2 dan Lingkungan.
            </sub>
        </div>
        <hr>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>
</div>