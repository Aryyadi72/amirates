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

 <!-- Tabs -->
 <br /><br />
 <div class="container">
     <ul class="nav nav-tabs" role="tablist">
         <li class="nav-item" role="presentation">
             <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true" role="tab">Kualitas</a>
         </li>
         <li class="nav-item" role="presentation">
             <a class="nav-link" data-bs-toggle="tab" href="#profile" aria-selected="false" tabindex="-1"
                 role="tab">Kuantitas</a>
         </li>
     </ul>
     <br>
     <div id="myTabContent" class="tab-content">
         <div class="tab-pane fade show active" id="home" role="tabpanel">
             <table id="kualitas" class="display" style="width:100%">
                 <thead>
                     <tr>
                         <th>UP3</th>
                         <th>ULP</th>
                         <th>Penyulang</th>
                         <th>Gardu</th>
                         <th>Tanggal Survey</th>
                         <th>Petugas Survey</th>
                         <th>Pengevaluasi</th>
                         <th>Validasi</th>
                         <th>Isi Validasi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        foreach ($data as $kualitas) {
                    ?>
                     <tr>
                         <td><?php echo $kualitas->up3; ?></td>
                         <td><?php echo $kualitas->ulp; ?></td>
                         <td><?php echo $kualitas->nm_penyulang; ?></td>
                         <td><?php echo $kualitas->nm_gardu; ?></td>
                         <td><?php echo $kualitas->tgl_survey; ?></td>
                         <td><?php echo $kualitas->petugas; ?></td>
                         <td><?php echo $kualitas->pengevaluasi; ?></td>
                         <td>
                             <a href="<?php echo base_url('monitoring/detail_valid/'  . $kualitas->id_data_monit); ?>"
                                 target="_blank" class="btn btn-success">Detail</a>
                         </td>
                         <td>
                             <a href="<?php echo base_url('monitoring/edit_evaluasi/'.$kualitas->id_data_monit); ?>"
                                 class="btn btn-warning">Validasi</a>
                         </td>
                     </tr>
                     <?php
                        }
                    ?>
                 </tbody>
             </table>
         </div>
         <div class="tab-pane fade" id="profile" role="tabpanel">
             <table id="kuantitas" class="display" style="width:100%">
                 <thead>
                     <tr>
                         <th>UP3</th>
                         <th>ULP</th>
                         <th>Penyulang</th>
                         <th>Gardu</th>
                         <th>Tanggal Survey</th>
                         <th>Petugas Survey</th>
                         <th>Pengevaluasi</th>
                         <th>Jenis Aset</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        foreach ($data as $kuantitas) {
                    ?>
                     <tr>
                         <td><?php echo $kuantitas->up3; ?></td>
                         <td><?php echo $kuantitas->ulp; ?></td>
                         <td><?php echo $kuantitas->nm_penyulang; ?></td>
                         <td><?php echo $kuantitas->nm_gardu; ?></td>
                         <td><?php echo $kuantitas->tgl_survey; ?></td>
                         <td><?php echo $kuantitas->petugas; ?></td>
                         <td><?php echo $kuantitas->pengevaluasi; ?></td>
                         <td>
                             <a href="<?php echo base_url('monitoring/detail_jenis/'  . $kuantitas->id_data_monit); ?>"
                                 target="_blank" class="btn btn-danger">Detail</a>
                         </td>
                     </tr>
                     <?php
                        }
                    ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <br /><br />
 </body>

 </html>