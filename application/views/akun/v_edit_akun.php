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
    <form action="<?php echo base_url('akun/proses_edit_akun/' . $akun['id_user']); ?>" method="post"
        enctype="multipart/form-data" role="form">

        <input type="hidden" name="id_user" value="<?php echo $akun['id_user']; ?>">

        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Unit</label>
            <select class="form-select" id="exampleSelect1" name="kd_unit">
                <optgroup label=" --- UP3 ---"></optgroup>
                <option value="7111" <?php if ($akun['kd_unit'] == "7111") echo "selected"; ?>>UP3 Banjarmasin</option>
                <option value="7112" <?php if ($akun['kd_unit'] == "7112") echo "selected"; ?>>UP3 Palangkaraya
                </option>
                <option value="7113" <?php if ($akun['kd_unit'] == "7113") echo "selected"; ?>>UP3 Barabai</option>
                <option value="7114" <?php if ($akun['kd_unit'] == "7114") echo "selected"; ?>>UP3 Kuala Kapuas
                </option>
                <option value="7115" <?php if ($akun['kd_unit'] == "7115") echo "selected"; ?>>UP3 Kotabaru</option>
                <optgroup label=" --- ULP ---"></optgroup>
                <option value="22100" <?php if ($akun['kd_unit'] == "22100") echo "selected"; ?>>ULP MANGKURAT</option>
                <option value="22140" <?php if ($akun['kd_unit'] == "22140") echo "selected"; ?>>ULP PELAIHARI</option>
                <option value="22110" <?php if ($akun['kd_unit'] == "22110") echo "selected"; ?>>ULP AHMAD YANI
                </option>
                <option value="22150" <?php if ($akun['kd_unit'] == "22150") echo "selected"; ?>>ULP MARABAHAN</option>
                <option value="22160" <?php if ($akun['kd_unit'] == "22160") echo "selected"; ?>>ULP GAMBUT</option>
                <option value="22120" <?php if ($akun['kd_unit'] == "22120") echo "selected"; ?>>ULP BANJARBARU
                </option>
                <option value="22130" <?php if ($akun['kd_unit'] == "22130") echo "selected"; ?>>ULP MARTAPURA</option>
                <option value="22230" <?php if ($akun['kd_unit'] == "22230") echo "selected"; ?>>ULP AMUNTAI</option>
                <option value="22270" <?php if ($akun['kd_unit'] == "22270") echo "selected"; ?>>ULP DAHA</option>
                <option value="22260" <?php if ($akun['kd_unit'] == "22260") echo "selected"; ?>>ULP BINUANG</option>
                <option value="22220" <?php if ($akun['kd_unit'] == "22220") echo "selected"; ?>>ULP KANDANGAN</option>
                <option value="22240" <?php if ($akun['kd_unit'] == "22240") echo "selected"; ?>>ULP TANJUNG</option>
                <option value="22210" <?php if ($akun['kd_unit'] == "22210") echo "selected"; ?>>ULP RANTAU</option>
                <option value="22200" <?php if ($akun['kd_unit'] == "22200") echo "selected"; ?>>ULP BARABAI</option>
                <option value="22250" <?php if ($akun['kd_unit'] == "22250") echo "selected"; ?>>ULP PARINGIN</option>
                <option value="22300" <?php if ($akun['kd_unit'] == "22300") echo "selected"; ?>>ULP KOTABARU</option>
                <option value="22310" <?php if ($akun['kd_unit'] == "22310") echo "selected"; ?>>ULP BATULICIN</option>
                <option value="22320" <?php if ($akun['kd_unit'] == "22320") echo "selected"; ?>>ULP SATUI</option>
                <option value="22460" <?php if ($akun['kd_unit'] == "22460") echo "selected"; ?>>ULP NANGA BULIK
                </option>
                <option value="22400" <?php if ($akun['kd_unit'] == "22400") echo "selected"; ?>>ULP PALANGKARAYA TIMUR
                </option>
                <option value="22480" <?php if ($akun['kd_unit'] == "22480") echo "selected"; ?>>ULP KUALA PEMBUANG
                </option>
                <option value="22450" <?php if ($akun['kd_unit'] == "22450") echo "selected"; ?>>ULP PANGKALAN BUN
                </option>
                <option value="22420" <?php if ($akun['kd_unit'] == "22420") echo "selected"; ?>>ULP KASONGAN</option>
                <option value="22430" <?php if ($akun['kd_unit'] == "22430") echo "selected"; ?>>ULP KUALA KURUN
                </option>
                <option value="22410" <?php if ($akun['kd_unit'] == "22410") echo "selected"; ?>>ULP PALANGKARAYA BARAT
                </option>
                <option value="22470" <?php if ($akun['kd_unit'] == "22470") echo "selected"; ?>>ULP SUKAMARA</option>
                <option value="22440" <?php if ($akun['kd_unit'] == "22440") echo "selected"; ?>>ULP SAMPIT</option>
                <option value="22500" <?php if ($akun['kd_unit'] == "22500") echo "selected"; ?>>ULP KUALA KAPUAS
                </option>
                <option value="22530" <?php if ($akun['kd_unit'] == "22530") echo "selected"; ?>>ULP TAMIYANG LAYANG
                </option>
                <option value="22540" <?php if ($akun['kd_unit'] == "22540") echo "selected"; ?>>ULP MUARA TEWEH
                </option>
                <option value="22550" <?php if ($akun['kd_unit'] == "22550") echo "selected"; ?>>ULP PURUK CAHU
                </option>
                <option value="22510" <?php if ($akun['kd_unit'] == "22510") echo "selected"; ?>>ULP PULANG PISAU
                </option>
                <option value="22520" <?php if ($akun['kd_unit'] == "22520") echo "selected"; ?>>ULP BUNTOK</option>
            </select>
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Level</label>
            <select class="form-select" id="exampleSelect1" name="id_level">
                <option value="1" <?php if ($akun['kd_unit'] == "1") echo "selected"; ?>>UID</option>
                <option value="2" <?php if ($akun['kd_unit'] == "2") echo "selected"; ?>>UP3</option>
                <option value="3" <?php if ($akun['kd_unit'] == "3") echo "selected"; ?>>ULP</option>
                <option value="4" <?php if ($akun['kd_unit'] == "4") echo "selected"; ?>>PLNT</option>
            </select>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nama</label>
            <input type="text" class="form-control" id="inputDefault" name="nama_user"
                value="<?= $akun['nama_user'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Alamat</label>
            <input type="text" class="form-control" id="inputDefault" name="alamat_user"
                value="<?= $akun['alamat_user'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Jenis Kelamin</label>
            <select class="form-select" id="exampleSelect1" name="jk_user">
                <option value="Pria" <?php if ($akun['jk_user'] == "Pria") echo "selected"; ?>>Pria</option>
                <option value="Wanita" <?php if ($akun['jk_user'] == "Wanita") echo "selected"; ?>>Wanita</option>
            </select>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nomor HP</label>
            <input type="text" class="form-control" id="inputDefault" name="no_telp_user"
                value="<?= $akun['no_telp_user'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Email</label>
            <input type="email" class="form-control" id="inputDefault" name="email_user"
                value="<?= $akun['email_user'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label for="inputNumber" class="form-label">Upload File</label>
            <input class="form-control" type="file" id="formFile" name="userfile"><br>
            <img src="<?= base_url()?>./assets/uploads/foto-profil/<?= $akun['foto_user'] ?>" name="userfile"
                style="width:100%;max-width:100px">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Username</label>
            <input type="text" class="form-control" id="inputDefault" name="username" value="<?= $akun['username'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Password</label>
            <input type="text" class="form-control" id="inputDefault" name="password" value="<?= $akun['password'] ?>"
                disabled>
        </div>
        <hr>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br><br>
</div>