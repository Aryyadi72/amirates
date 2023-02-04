<br><br>
<div class="container">
    <table id="lgrd" class="display" style="width:100p%">
        <thead>
            <tr>
                <th>ID Gardu</th>
                <th>Gardu</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($file as $f) {
            ?>
            <tr>
                <td><?= $f->id_gardu ?></td>
                <td><?= $f->nm_gardu ?></td>
                <td class="text-center">
                    <a name="" id="" class="btn btn-primary"
                        href="<?php echo base_url('gardu/list_aset/'.$f->id_gardu); ?>" role="button">Tampil Data
                        <?= $f->nm_gardu ?></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<br><br>