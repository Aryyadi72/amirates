<br><br>
<div class="container">

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

    <!-- Tambah ILP -->
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <a type="button" class="btn btn-primary btn-sm">Tambah ILP</a>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm" aria-haspopup="true"
                aria-expanded="false" data-bs-toggle="modal" data-bs-target="#modalTambahILP"><i
                    class="fa-solid fa-file-circle-plus"></i></button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambahILP" tabindex="-1" aria-labelledby="modalTambahILPLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahILPLabel">Tambah ILP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('ilp/proses_tambah_ilp'); ?>" method="post"
                        enctype="multipart/form-data" role="form">
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Nama Pembuat</label>
                            <input type="text" class="form-control" id="nm_pembuat_ilp" name="nm_pembuat_ilp">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Kriteria 1</label>
                            <input type="text" class="form-control" id="kriteria_ilp_1" name="kriteria_ilp_1">
                            <sub class="fst-italic">
                                *Meminta / menerima imbalan (gratifikasi) dari pelanggan yang dilayani
                                dan/atau
                                dari PIHAK PERTAMA secara langsung.
                            </sub>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Kriteria 2</label>
                            <input type="text" class="form-control" id="kriteria_ilp_2" name="kriteria_ilp_2">
                            <sub class="fst-italic">
                                *Melakukkan pungutan liar, Kolusi Korupsi atau Nepotisme.
                            </sub>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Kriteria 3</label>
                            <input type="text" class="form-control" id="kriteria_ilp_3" name="kriteria_ilp_3">
                            <sub class="fst-italic">
                                *Dengan sengaja tidak memberikan kemudahan, kecepatan dan
                                transparansi terkait layanan publik.
                            </sub>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="formFile" class="form-label mt-4"></label>
                            <input class="form-control" type="file" id="formFile" name="userfile">
                        </div>
                        <hr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Table ILP -->
    <br><br>
    <table id="ilp" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">Nama Pembuat</th>
                <th class="text-center">Tanggal Dibuat</th>
                <th class="text-center">Target Kinerja</th>
                <th class="text-center">Dokumen Laporan Pelanggaran ILP</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($ilp as $ilp) {
            ?>
            <tr>
                <!-- Nama Pembuat ILP -->
                <td><?php echo $ilp->nm_pembuat_ilp; ?></td>
                <!-- Nama Pembuat ILP -->

                <!-- Tanggal Pembuat ILP -->
                <td><?php echo $ilp->tgl_pembuat_ilp; ?></td>
                <!-- Tanggal Pembuat ILP -->

                <!-- Target Kinerja ILP -->
                <td class="text-center">

                    <!-- Kriteria 1 -->
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <sub><?php echo round($ilp->kriteria_ilp_1); ?>%</sub>
                        </div>
                        <div class="col-9" style="margin-top:8px;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                    aria-valuenow="<?php echo round($ilp->kriteria_ilp_1); ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width: <?php echo round($ilp->kriteria_ilp_1); ?>%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kriteria 1 -->

                    <!-- Kriteria 2 -->
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <sub><?php echo round($ilp->kriteria_ilp_2); ?>%</sub>
                        </div>
                        <div class="col-9" style="margin-top:8px;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-dark" role="progressbar"
                                    aria-valuenow="<?php echo round($ilp->kriteria_ilp_2); ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width: <?php echo round($ilp->kriteria_ilp_2); ?>%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kriteria 2 -->

                    <!-- Kriteria 3 -->
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <sub><?php echo round($ilp->kriteria_ilp_3); ?>%</sub>
                        </div>
                        <div class="col-9" style="margin-top:8px;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                    aria-valuenow="<?php echo round($ilp->kriteria_ilp_3); ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width: <?php echo round($ilp->kriteria_ilp_3); ?>%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kriteria 3 -->

                </td>
                <!-- Target Kinerja ILP -->

                <!-- Dokumen ILP -->
                <td>
                    <a name="" id="" class="btn btn-link"
                        href="<?php echo base_url('ilp/detail_dok_ilp/' . $ilp->dok_ilp); ?>" target="_blank"
                        role="button"><?php echo $ilp->dok_ilp; ?> <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </td>
                <!-- Dokumen ILP -->

                <!-- Aksi ILP -->
                <td class="text-center">

                    <!-- Edit -->
                    <a href="<?php echo base_url('ilp/edit_ilp/' . $ilp->id_ilp); ?>"><button type="button"
                            class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>

                    <!-- Hapus -->
                    <a href="<?php echo base_url('ilp/hapus/' . $ilp->id_ilp); ?>"><button type="button"
                            class="btn btn-dark btn-sm" onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                class="fa-solid fa-trash"></i></button>
                    </a>

                    <!-- Export PDF -->
                    <a href="<?php echo base_url('ilp/cetak_lp/' . $ilp->id_ilp); ?>" target="_blank">
                        <button type="button" class="btn btn-danger  btn-sm">
                            <i class="fa-solid fa-file-pdf"></i></button>
                    </a>
                </td>
                <!-- Aksi ILP -->

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>