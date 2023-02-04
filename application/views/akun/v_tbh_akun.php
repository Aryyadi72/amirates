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
    <form action="<?php echo base_url('akun/proses_tambah_akun'); ?>" method="post" enctype="multipart/form-data"
        role="form">
        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Unit</label>
            <select class="form-select" id="exampleSelect1" name="kd_unit">
                <option selected disabled>Pilih Unit</option>
                <optgroup label=" --- UP3 ---"></optgroup>
                <option value="7111">UP3 Banjarmasin</option>
                <option value="7112">UP3 Palangkaraya</option>
                <option value="7113">UP3 Barabai</option>
                <option value="7114">UP3 Kuala Kapuas</option>
                <option value="7115">UP3 Kotabaru</option>
                <optgroup label=" --- ULP ---"></optgroup>
                <option value="22100">ULP MANGKURAT</option>
                <option value="22140">ULP PELAIHARI</option>
                <option value="22110">ULP AHMAD YANI</option>
                <option value="22150">ULP MARABAHAN</option>
                <option value="22160">ULP GAMBUT</option>
                <option value="22120">ULP BANJARBARU</option>
                <option value="22130">ULP MARTAPURA</option>
                <option value="22230">ULP AMUNTAI</option>
                <option value="22270">ULP DAHA</option>
                <option value="22260">ULP BINUANG</option>
                <option value="22220">ULP KANDANGAN</option>
                <option value="22240">ULP TANJUNG</option>
                <option value="22210">ULP RANTAU</option>
                <option value="22200">ULP BARABAI</option>
                <option value="22250">ULP PARINGIN</option>
                <option value="22300">ULP KOTABARU</option>
                <option value="22310">ULP BATULICIN</option>
                <option value="22320">ULP SATUI</option>
                <option value="22460">ULP NANGA BULIK</option>
                <option value="22400">ULP PALANGKARAYA TIMUR</option>
                <option value="22480">ULP KUALA PEMBUANG</option>
                <option value="22450">ULP PANGKALAN BUN</option>
                <option value="22420">ULP KASONGAN</option>
                <option value="22430">ULP KUALA KURUN</option>
                <option value="22410">ULP PALANGKARAYA BARAT</option>
                <option value="22470">ULP SUKAMARA</option>
                <option value="22440">ULP SAMPIT</option>
                <option value="22500">ULP KUALA KAPUAS</option>
                <option value="22530">ULP TAMIYANG LAYANG</option>
                <option value="22540">ULP MUARA TEWEH</option>
                <option value="22550">ULP PURUK CAHU</option>
                <option value="22510">ULP PULANG PISAU</option>
                <option value="22520">ULP BUNTOK</option>
            </select>
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Level</label>
            <select class="form-select" id="exampleSelect1" name="id_level">
                <option selected disabled>Pilih Level</option>
                <option value="1">UID</option>
                <option value="2">UP3</option>
                <option value="3">ULP</option>
                <option value="4">PLNT</option>
            </select>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nama</label>
            <input type="text" class="form-control" id="inputDefault" name="nama_user">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Alamat</label>
            <input type="text" class="form-control" id="inputDefault" name="alamat_user">
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Jenis Kelamin</label>
            <select class="form-select" id="exampleSelect1" name="jk_user">
                <option selected disabled>Gender</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nomor HP</label>
            <input type="text" class="form-control" id="inputDefault" name="no_telp_user">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Email</label>
            <input type="email" class="form-control" id="inputDefault" name="email_user">
        </div>
        <hr>
        <div class="form-group">
            <label for="inputNumber" class="form-label">Upload File</label>
            <input class="form-control" type="file" id="formFile" name="userfile">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Username</label>
            <input type="text" class="form-control" id="inputDefault" name="username">
        </div>
        <hr>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Password</label>
            <input type="text" class="form-control" id="inputDefault" name="password">
        </div>
        <hr>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Kembali</button>
    </form>
    <br><br>
</div>