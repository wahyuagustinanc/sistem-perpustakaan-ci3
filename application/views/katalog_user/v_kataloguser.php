<?php 
  if (!empty($this->session->flashdata('info'))) {?>
     <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info')?></div>
   <?php }
?>

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID Katalog</th>
          <th>Cover Buku</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($data->result() as $row) {?>
            <tr>
              <td><?= $row->id_katalog;?></td>
              <td><img src="<?= base_url()?>assets/dist/img/katalog/<?= $row->gambar;?>" width="150"></td>
              <td><?= $row->judul_buku;?></td>
              <td><?= $row->deskripsi;?></td>
              <td><?= $row->status;?></td>
            </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>