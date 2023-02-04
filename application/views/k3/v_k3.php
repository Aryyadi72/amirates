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

    <!-- Button Tambah K3 -->
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-primary">Tambah K3</button>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary" aria-haspopup="true" aria-expanded="false"
                data-bs-toggle="modal" data-bs-target="#modalTambahK3"><i
                    class="fa-solid fa-file-circle-plus"></i></button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambahK3" tabindex="-1" aria-labelledby="modalTambahK3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahK3Label">Tambah K3</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('k3/proses_tambah_k3'); ?>" method="post">
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Nama Pembuat</label>
                            <input type="text" class="form-control" id="nm_pembuat_k3" name="nm_pembuat_k3">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Tanggal Dibuat</label>
                            <input type="date" class="form-control" id="tgl_pembuat_k3" name="tgl_pembuat_k3">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Kriteria 1</label>
                            <input type="text" class="form-control" id="kriteria_k3_1" name="kriteria_k3_1">
                            <sub class="fst-italic">
                                *Menggunakan alat pelindung diri (APD) dan menaati peraturan K2 dan Lingkungan.
                            </sub>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Kriteria 2</label>
                            <input type="text" class="form-control" id="kriteria_k3_2" name="kriteria_k3_2">
                            <sub class="fst-italic">
                                *Peralatan sesuai spesifikasi yang ditetapkan oleh PIHAK PERTAMA.
                            </sub>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Kriteria 3</label>
                            <input type="text" class="form-control" id="kriteria_k3_3" name="kriteria_k3_3">
                            <sub class="fst-italic">
                                *Peralatan tersedia dengan lengkap sesuai yang dipersyaratkan oleh PIHAK PERTAMA.
                            </sub>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label mt-4" for="inputDefault">Kriteria 4</label>
                            <input type="text" class="form-control" id="kriteria_k3_4" name="kriteria_k3_4">
                            <sub class="fst-italic">
                                *Menggunakan alat pelindung diri (APD) dan menaati peraturan K2 dan Lingkungan.
                            </sub>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Table K3 -->
    <br><br>
    <table id="k3" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">Nama Pembuat</th>
                <th class="text-center">Tanggal Dibuat</th>
                <th class="text-center">Target Kinerja</th>
                <th class="text-center">Surat Pernyataan dan Dokumentasi</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $k3) {
            ?>
            <tr>
                <td><?php echo $k3->nm_pembuat_k3; ?></td>
                <td><?php echo $k3->tgl_pembuat_k3; ?></td>

                <td class="text-center">
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <sub><?php echo round($k3->kriteria_k3_1); ?>%</sub>
                        </div>
                        <div class="col-9" style="margin-top:8px;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                    aria-valuenow="<?php echo round($k3->kriteria_k3_1); ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width: <?php echo round($k3->kriteria_k3_1); ?>%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-2">
                            <sub><?php echo round($k3->kriteria_k3_2); ?>%</sub>
                        </div>
                        <div class="col-9" style="margin-top:8px;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-dark" role="progressbar"
                                    aria-valuenow="<?php echo round($k3->kriteria_k3_2); ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width: <?php echo round($k3->kriteria_k3_2); ?>%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-2">
                            <sub><?php echo round($k3->kriteria_k3_3); ?>%</sub>
                        </div>
                        <div class="col-9" style="margin-top:8px;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                    aria-valuenow="<?php echo round($k3->kriteria_k3_3); ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width: <?php echo round($k3->kriteria_k3_3); ?>%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-2">
                            <sub><?php echo round($k3->kriteria_k3_4); ?>%</sub>
                        </div>
                        <div class="col-9" style="margin-top:8px;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                    aria-valuenow="<?php echo round($k3->kriteria_k3_4); ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width: <?php echo round($k3->kriteria_k3_4); ?>%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>

                <td class="text-center">
                    <a href="<?php echo base_url('k3/detail_dok/' . $k3->id_k3); ?>" target="_blank"><button
                            type="button" class="btn btn-primary" style="margin-bottom:8px;"><i
                                class="fa-solid fa-circle-info"></i>
                            Dokumen</button></a>
                    <br>
                    <a href="<?php echo base_url('k3/detail_gbr/' . $k3->id_k3); ?>" target="_blank"><button
                            type="button" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i>
                            Gambar</button></a>
                </td>

                <td class="text-center">

                    <!-- Edit -->
                    <button type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button>
                    <!-- Edit -->

                    <!-- Hapus -->
                    <a href="<?php echo base_url('k3/hapus_k3/' . $k3->id_k3); ?>"> <button type="button"
                            class="btn btn-dark" onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                class="fa-solid fa-trash"></i></button>
                    </a>
                    <!-- Hapus -->

                    <!-- Export PDF -->
                    <a href="<?php echo base_url('k3/cetak_k3/' . $k3->id_k3); ?>" target="_blank">
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i></button>
                    </a>
                    <!-- Export PDF-->

                    <br>

                    <!-- Upload Dokumen -->
                    <button style="margin-top:8px;" type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#modalK31">
                        <i class="fa-solid fa-file-arrow-up"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalK31" tabindex="-1" aria-labelledby="modalK31Label"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalK31Label">Upload Dokumen</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('k3/proses_upload_dok'); ?>" method="post"
                                        enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                            <label for="formFile" class="form-label mt-4"></label>
                                            <input class="form-control" type="file" id="formFile" name="userfile">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" value="upload" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Upload Dokumen -->

                    <!-- Upload Gambar -->
                    <button style="margin-top:8px;" type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#modalK32">
                        <i class="fa-solid fa-image"></i>
                    </button>

                    <div class="modal fade" id="modalK32" tabindex="-1" aria-labelledby="modalK32Label"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalK32Label">Upload Dokumentasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url().'k3/proses_upload_gbr'; ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="formFile" class="form-label mt-4"></label>
                                            <input class="form-control" type="file" id="formFile" name="userfile">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" value="upload" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Upload Gambar -->
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>