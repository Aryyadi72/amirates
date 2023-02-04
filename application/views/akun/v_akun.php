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

    <div class="btn-group" role="group" aria-label="Button group with nested dropdown"><a type="button"
            class="btn btn-primary  btn-sm" href="<?php echo base_url('akun/tambah_akun'); ?>">Tambah User</a>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary  btn-sm" aria-haspopup="true"
                aria-expanded="false"><i class="fa-solid fa-user-plus"></i></button>
        </div>
    </div><br><br>
    <table id="ilp" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Unit</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($tampil_akun as $tampil) {
            ?>
            <tr>
                <td><?php echo $tampil->kd_unit; ?></td>
                <td><?php echo $tampil->nama_user; ?></td>
                <td><?php echo $tampil->username; ?></td>
                <td><img src='<?= base_url() ?>./assets/uploads/foto-profil/<?= $tampil->foto_user; ?>'
                        style="width:100%;max-width:100px">
                </td>
                <td class="text-center">
                    <!-- Edit -->
                    <a href="<?php echo base_url('akun/edit_user/'. $tampil->id_user); ?>"> <button type=" button"
                            class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>
                    <!-- Edit -->

                    <!-- Hapus -->
                    <a href="<?php echo base_url('akun/hapus_user/'. $tampil->id_user); ?>"><button type="button"
                            class="btn btn-dark btn-sm"><i class="fa-solid fa-trash"></i></button></a>
                    <!-- Hapus -->

                    <!-- Detail -->
                    <a href="<?php echo base_url('akun/detail_user/'. $tampil->id_user); ?>">
                        <button type="button" class="btn btn-info btn-sm"><i
                                class="fa-solid fa-circle-info"></i></button></a>
                    <!-- Detail -->
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>