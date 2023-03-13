<?php 
  if (!empty($this->session->flashdata('info'))) {?>
     <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info')?></div>
   <?php }
?>


<div class="row">
  <div class="col-md-12">
    <a href="<?= base_url()?>pemesanan/tambah_pemesanan" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pengembalian</a>
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
          <th>No.</th>
          <th>Nama Peminjam</th>
          <th>Judul Buku</th>
          <th>Tanggal Pesan</th>
          <th>Tanggal Kembali</th>
          <th>Tanggal di Kembalikan</th>
        </tr>
      </thead>

      <tbody>
        <?php
          $no = 1;
          foreach ($data as $row) {?>
            <tr>
              <td><?= $no++;?></td>
              <td><?= $row->nama_anggota;?></td>
              <td><?= $row->judul_buku;?></td>
              <td><?= $row->tgl_pesan;?></td>
              <td><?= $row->tgl_kembali;?></td>
              <td><?= $row->tgl_kembalikan;?></td>
            </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>