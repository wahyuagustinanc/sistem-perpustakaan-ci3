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
          <th>ID Anggota</th>
          <th>Nama Anggota</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>No. HP</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($data as $row) {?>
            <tr>
              <td><?= $row->id_anggota;?></td>
              <td><?= $row->nama_anggota;?></td>
              <td><?= $row->jenis_kelamin;?></td>
              <td><?= $row->alamat;?></td>
              <td><?= $row->nohp;?></td>
            </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>