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
          <th>ID Pemesanan</th>
          <th>Pemesan</th>
          <th>Buku</th>
          <th>Tanggal Pemesanan</th>
          <th>Tanggal Kembali</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($data as $row) {
            $tgl_kembali = new DateTime($row->tgl_kembali);
            $tgl_sekarang = new DateTime();
            $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
            ?>
            <tr>
              <td><?= $row->id_pesan;?></td>
              <td><?= $row->nama_anggota;?></td>
              <td><?= $row->judul_buku;?></td>
              <td><?= $row->tgl_pesan;?></td>
              <td><?= $row->tgl_kembali;?></td>
              <td>
                <?php
                  if ($tgl_kembali >= $tgl_sekarang OR $selisih == 0) {
                    echo "<span class='label label-warning'>Belum di kembalikan</span>";
                  } else{
                    echo "Telat <b style = 'color:red;'>".$selisih."</b> Hari <br> <span class='label label-danger'> Denda perhari = 1.000";
                  }
                ?>
              </td>
            </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>