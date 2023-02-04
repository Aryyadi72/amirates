<br><br>
<div class="container">
    <table id="ljt" class="display" style="width:120px">
        <thead>
            <tr>
                <th>UP3</th>
                <th>ULP</th>
                <th>Nama Penyulang</th>
                <th>Nama Gardu</th>
                <th>Tanggal</th>
                <th>Petugas Survey</th>
                <th>Pengevaluasi</th>
                <th>Pendataan Tiang TR</th>
                <th>Pendataan JTR</th>
                <th>Pendataan STL TM</th>
                <th>Pendataan STL/TR</th>
                <th>Pendataan APP</th>
                <th>Kotak APP</th>
                <th>Kotak KWH</th>
                <th>Kotak MCB</th>
                <th>Kotak CT</th>
                <th>Kotak PT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($file as $f) {
            ?>
            <tr>
                <td><?= $f->up3 ?></td>
                <td><?= $f->ulp ?></td>
                <td><?= $f->nm_penyulang ?></td>
                <td><?= $f->nm_gardu ?></td>
                <td><?= $f->tgl_survey ?></td>
                <td><?= $f->petugas ?></td>
                <td><?= $f->pengevaluasi ?></td>
                <td><?= $f->tiang_tr ?></td>
                <td><?= $f->jtr ?></td>
                <td><?= $f->stl_tm ?></td>
                <td><?= $f->stl_tr ?></td>
                <td><?= $f->app ?></td>
                <td><?= $f->kotak_app ?></td>
                <td><?= $f->kwh ?></td>
                <td><?= $f->mcb ?></td>
                <td><?= $f->ct ?></td>
                <td><?= $f->pt ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<br><br>