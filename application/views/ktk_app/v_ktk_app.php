<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        columnDefs: [{
            orderable: false,
            targets: [1, 2, 3],
            scrollX: true,
        }, ],
    });

    $('button').click(function() {
        var data = table.$('input, select').serialize();
        alert('The following data would have been submitted to the server: \n\n' + data.substr(0, 120) +
            '...');
        return false;
    });
});
</script>

<br><br>
<div class="container">
    <button class="btn btn-primary btn-sm" type="submit" style=margin-bottom:10px;>Submit form</button>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nama Kotak APP</th>
                <th>Tanggal Survey</th>
                <th>Nama Petugas</th>
                <th class="text-center">(1)</th>
                <th class="text-center">(2)</th>
                <th class="text-center">(3)</th>
                <th class="text-center">(4)</th>
                <th class="text-center">(5)</th>
                <th class="text-center">(6)</th>
                <th class="text-center">(7)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($file as $f) {
            ?>
            <tr>
                <td><?= $f->nm_kotak_app ?></td>
                <td><?= $f->tgl_survey ?></td>
                <td><?= $f->nm_petugas ?></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                        <option selected disabled>Validasi</option>
                        <option value="Sesuai">
                            Sesuai
                        </option>
                        <option value="Tidak Sesuai">
                            Tidak Sesuai
                        </option>
                    </select></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                        <option selected disabled>Validasi</option>
                        <option value="Sesuai">
                            Sesuai
                        </option>
                        <option value="Tidak Sesuai">
                            Tidak Sesuai
                        </option>
                    </select></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                        <option selected disabled>Validasi</option>
                        <option value="Sesuai">
                            Sesuai
                        </option>
                        <option value="Tidak Sesuai">
                            Tidak Sesuai
                        </option>
                    </select></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                        <option selected disabled>Validasi</option>
                        <option value="Sesuai">
                            Sesuai
                        </option>
                        <option value="Tidak Sesuai">
                            Tidak Sesuai
                        </option>
                    </select></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                        <option selected disabled>Validasi</option>
                        <option value="Sesuai">
                            Sesuai
                        </option>
                        <option value="Tidak Sesuai">
                            Tidak Sesuai
                        </option>
                    </select></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                        <option selected disabled>Validasi</option>
                        <option value="Sesuai">
                            Sesuai
                        </option>
                        <option value="Tidak Sesuai">
                            Tidak Sesuai
                        </option>
                    </select></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                        <option selected disabled>Validasi</option>
                        <option value="Sesuai">
                            Sesuai
                        </option>
                        <option value="Tidak Sesuai">
                            Tidak Sesuai
                        </option>
                    </select></td>
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