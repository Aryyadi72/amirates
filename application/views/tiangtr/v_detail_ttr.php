<br><br>
<div class="container">
    <form action="<?php echo base_url('gardu/proses_validasi_ttr'); ?>" method="post">
        <button type="submit" class="btn btn-primary btn-sm" style="margin-bottom:10px;">Submit Data</button>
        <table id="lttr" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>KD Tiang TR</th>
                    <th>Nama Tiang TR</th>
                    <th>Foto Tiang TR</th>
                    <th>Tanggal Survey</th>
                    <th>Nama Petugas</th>
                    <th>(1)</th>
                    <th>(2)</th>
                    <th>(3)</th>
                    <th>(4)</th>
                    <th>(5)</th>
                    <th>(6)</th>
                    <th>(7)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach ($file as $f) {
            ?>
                <tr>
                    <td><?= $f->kd_tiangtr ?></td>
                    <td><?= $f->nm_tiangtr ?></td>
                    <td>
                        <img src="<?= $f->foto_tiangtr ?>" heigt="100px" width="100px">
                    </td>
                    <td><?= $f->tgl_survey ?></td>
                    <td><?= $f->nm_petugas ?></td>
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
                    <td>
                        <a name="" id="" class="btn btn-primary"
                            href="<?php echo base_url('gardu/proses_validasi_ttr/' . $f->kd_tiangtr); ?>"
                            role="button">Button</a>
                    </td>
</div>
</form>
</tr>
<?php
            }
            ?>
</tbody>
</table>
</div><br><br>

<div class="container">
    <div class="list-group">
        <button type="button" class="list-group-item list-group-item-primary list-group-item-action active"
            aria-current="true">
            Indikator Validasi
        </button>
        <button type="button" class="list-group-item list-group-item-action">(1) Kelengkapan Pengisian Kolom
        </button>
        <button type="button" class="list-group-item list-group-item-action">(2) Keseuaian pengisian dengan format EAM
        </button>
        <button type="button" class="list-group-item list-group-item-action">(3) Kesesuaian Titik Koordinat dan Tarikan
            Jaringan
        </button>
        <button type="button" class="list-group-item list-group-item-action">(4) Kesesuaian dengan Lokasi Gardu
        </button>
        <button type="button" class="list-group-item list-group-item-action">(5) Kesesuaian dengan Lokasi Penyulang
        </button>
        <button type="button" class="list-group-item list-group-item-action">(6) Kerapihan Gambar
        </button>
        <button type="button" class="list-group-item list-group-item-action">(7) Perbaikan Error N-1
        </button>
    </div>
</div><br><br>