<br><br>
<div class="container">
    <form action="<?php echo base_url('gardu/proses_upload_file_gardu'); ?>" method="post" enctype="multipart/form-data"
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
    </form><br>
    <table id="gardu" class="display" style="width:100%">
        <thead>
            <?php
            foreach ($file as $f) {
            ?>
            <tr>
                <th>ID Data</th>
                <th>File JSON Gardu</th>
                <th>Tanggal Upload</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $f->id_file_gardu ?></td>
                <td>
                    <a href="<?php echo base_url('gardu/tampil_file_gardu/'.$f->nm_file_gardu); ?>"
                        target=_blank><button type="button" class="btn btn-link"><?= $f->nm_file_gardu ?></button></a>
                </td>
                <td><?= $f->tgl_upload_gardu ?></td>
                <td>
                    <a name="" id="" class="btn btn-warning"
                        href="<?php echo base_url('gardu/upload_gardu/'.$f->nm_file_gardu); ?>" role="button"><i
                            class="fa-solid fa-database"></i></a>

                    <a name="" id="" class="btn btn-danger"
                        href="<?php echo base_url('gardu/hapus_file/'.$f->nm_file_gardu); ?>" role="button"><i
                            class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>