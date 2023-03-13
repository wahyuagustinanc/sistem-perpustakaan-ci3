<?php 
  if (!empty($this->session->flashdata('info'))) {?>
     <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info')?></div>
   <?php }
?>


<div class="row">
  <div class="col-md-12">
    <a href="<?= base_url()?>katalog/tambah_katalog" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Katalog</a>
  </div>
</div>

<br>

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
          <th>Aksi</th>
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
              <td>
                <a href="<?= base_url()?>katalog/edit/<?= $row->id_katalog;?>" class="btn btn-success btn-xs">Edit</a>
                <a href="<?= base_url()?>katalog/hapus/<?= $row->id_katalog;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus?');">Hapus</a>
              </td>
            </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>