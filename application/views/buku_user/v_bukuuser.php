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
          <th>ID Buku</th>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Jumlah</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($data->result() as $row) {?>
            <tr>
              <td><?= $row->id_buku;?></td>
              <td><?= $row->judul_buku;?></td>
              <td><?= $row->nama_pengarang;?></td>
              <td><?= $row->nama_penerbit;?></td>
              <td><?= $row->tahun_terbit;?></td>
              <td><?= $row->jumlah;?></td>
            </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>