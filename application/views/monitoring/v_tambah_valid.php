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
 <br><br>
 <div class="container">
     <div class="card">
         <div class="card-body">
             <form action="<?php echo base_url('monitoring/proses_edit_evaluasi/'.$evaluasi['id_data_evaluasi']); ?>"
                 class="add-form" data-toggle="validator" role="form" method="post">

                 <input type="hidden" name="id_data_evaluasi" value="<?php echo $evaluasi['id_data_evaluasi']; ?>">

                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Id Data</label>
                     <input type="text" class="form-control" name="id_data_monit"
                         value="<?php echo $evaluasi['id_data_monit']; ?>" class="form-control" readonly disabled>
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Kelengkapan Pengisian Kolom</label>
                     <input type="text" class="form-control" name="k_kolom" class="form-control"
                         value="<?php echo $evaluasi['k_kolom']; ?>">
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Kesesuaian pengisian dengan template EAM</label>
                     <input type="text" class="form-control" name="k_eam" class="form-control"
                         value="<?php echo $evaluasi['k_eam']; ?>">
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Kesesuaian titik koordinat dan tarikan
                         jaringan</label>
                     <input type="text" class="form-control" name="k_koordinasi" class="form-control"
                         value="<?php echo $evaluasi['k_koordinasi']; ?>">
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Kesesuaian lokasi GD/Penyulang</label>
                     <input type="text" class="form-control" name="k_lokasi" class="form-control"
                         value="<?php echo $evaluasi['k_lokasi']; ?>">
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Kerapihan Gambar</label>
                     <input type="text" class="form-control" name="k_gbr" class="form-control"
                         value="<?php echo $evaluasi['k_gbr']; ?>">
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Perbaikan Error</label>
                     <input type="text" class="form-control" name="perbaikan_error" class="form-control"
                         value="<?php echo $evaluasi['perbaikan_error']; ?>">
                 </div>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
             </form>
         </div>
     </div>
 </div>