<?php
  $tgl_pesan = date('Y-m-d');

  $tujuh_hari = mktime(0,0,0,date("n"),date("j") + 7, date("Y"));
  $tgl_kembali = date('Y-m-d', $tujuh_hari);
?>

<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $judul;?></h3>
    </div>

    <form method="post" action="<?= base_url()?>pemesanan/simpan" class="form-horizontal">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">ID Pemesanan</label>

            <div class="col-sm-10">
              <input type="text" name="id_pesan" value="<?= $id_pemesanan;?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Pemesan</label>
            <div class="col-sm-10">
              <select name="id_anggota" class="form_control select2">
                <option value=""> - Pilih Pemesan - </option>
                <?php
                  foreach ($pemesan as $row) {?>
                    <option value="<?= $row->id_anggota;?>"><?= $row->nama_anggota;?></option>
                  <?php }
                ?>
              </select>
            </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Buku</label>
          <div class="col-sm-10">
            <select name="id_buku" id="id_buku" class="form_control select2">
              <option value=""> - Pilih Buku - </option>
              <?php
                foreach ($buku as $row) {?>
                  <option value="<?= $row->id_buku;?>"><?= $row->judul_buku;?></option>
                <?php }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Pemesanan</label>
            <div class="col-sm-10">
              <input type="date" name="tgl_pesan" value="<?= $tgl_pesan;?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Pengembalian</label>
            <div class="col-sm-10">
              <input type="date" name="tgl_kembali" value="<?= $tgl_kembali;?>" class="form-control" readonly>
            </div>
        </div>

      <div class="box-footer">
        <a href="<?= base_url()?>buku" class="btn btn-warning">Cancel</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

<script>
  $('#id_buku').change(function(){
      var id = $(this).val();
      $.ajax({
        url : '<?= base_url()?>pemesanan/jumlah_buku',
        data : {id:id},
        method : 'post',
        dataType : 'json',
        success : function(hasil){
          var jumlah = JSON.stringify(hasil.jumlah);
          var jumlah1 = stok.split('"').join('');
          if (jumlah1 <= 0) {
            alert('Maaf, stok buku ini kosong');
            location.reload();
          }
        }
      });
  });
</script>
