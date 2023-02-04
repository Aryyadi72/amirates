<br><br>

<div class="container">
    <form action="<?php echo base_url('monit/proses_upload_file'); ?>" method="post" enctype="multipart/form-data"
        role="form">
        <div class="row">
            <div class="col-11">
                <label for="formFileSm" class="form-label"><sub>* Upload File JSON Disini</sub></label>
                <input class="form-control form-control-sm" id=" formFileSm" type="file" name="userfile">
            </div>
            <div class="col">
                <button type="submit" value="upload" class="btn btn-primary btn-sm"
                    style="margin-top:30px;margin-left:2px;"><i class="fa-sharp fa-solid fa-upload"></i>
                    Upload</button>
            </div>
        </div>
    </form>

    <br>
    <table id="harian" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">ID Data</th>
                <th class="text-center">Nama File</th>
                <th class="text-center">Tanggal Upload</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($file as $f) {
            ?>
            <tr>
                <td><?= $f->id_file_monit ?></td>
                <td>
                    <a href="<?php echo base_url('monit/tampil_file/'.$f->file_monit); ?>" target=_blank><button
                            type="button" class="btn btn-link"><?= $f->file_monit ?></button></a>
                </td>
                <td><?= $f->tgl_upload ?></td>
                <td class="text-center">
                    <a name="" id="" class="btn btn-primary"
                        href="<?php echo base_url('monit/upload_ke/'.$f->file_monit); ?>" role="button"><i
                            class="fa-solid fa-database"></i></a>

                    <a name="" id="" class="btn btn-dark"
                        href="<?php echo base_url('monit/hapus_file/'.$f->file_monit); ?>" role="button"><i
                            class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>