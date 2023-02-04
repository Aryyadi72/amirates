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

<form action="<?php echo base_url('gardu/proses_validasi_ttr'); ?>" method="post">

    <div class="form-group">
        <td>
            <select size="1" id="value_1" name="value_1">
                <option selected disabled>Validasi</option>
                <option value="1">Sesuai</option>
                <option value="0">Tidak Sesuai</option>
            </select>
        </td>
        <td>
            <select size="1" id="value_2" name="value_2">
                <option selected disabled>Validasi</option>
                <option value="1">Sesuai</option>
                <option value="0">Tidak Sesuai</option>
            </select>
        </td>
        <td>
            <select size="1" id="value_3" name="value_3">
                <option selected disabled>Validasi</option>
                <option value="1">Sesuai</option>
                <option value="0">Tidak Sesuai</option>
            </select>
        </td>
        <td>
            <select size="1" id="value_4" name="value_4">
                <option selected disabled>Validasi</option>
                <option value="1">Sesuai</option>
                <option value="0">Tidak Sesuai</option>
            </select>
        </td>
        <td>
            <select size="1" id="value_5" name="value_5">
                <option selected disabled>Validasi</option>
                <option value="1">Sesuai</option>
                <option value="0">Tidak Sesuai</option>
            </select>
        </td>
        <td>
            <select size="1" id="value_6" name="value_6">
                <option selected disabled>Validasi</option>
                <option value="1">Sesuai</option>
                <option value="0">Tidak Sesuai</option>
            </select>
        </td>
        <td>
            <select size="1" id="value_7" name="value_7">
                <option selected disabled>Validasi</option>
                <option value="1">Sesuai</option>
                <option value="0">Tidak Sesuai</option>
            </select>
        </td>
        <input type="submit" name="save" value="Save" class="btn btn-primary">
    </div>
</form>