<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $judul;?></h3>
    </div>

    <form method="post" action="<?= base_url()?>katalog/update" class="form-horizontal">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">ID Katalog</label>

            <div class="col-sm-10">
              <input type="text" name="id_katalog" value="<?= $data['id_katalog'];?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Cover Buku</label>

            <div class="col-sm-10">
              <input type="file" name="gambar" value="<?= $data['gambar'];?>" id="gambar" required>
            </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
              <select name="id_buku" class="form_control select2">
                <?php
                  foreach ($judul_buku as $row) {
                    if ($data['id_buku'] == $row->id_buku) {?>
                      <option value="<?= $row->id_buku?>" selected><?= $row->judul_buku?></option>
                    <?php } else {?>
                      <option value="<?= $row->id_buku?>"><?= $row->judul_buku?>
                    <?php }
                  }
                ?>
              </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi Buku</label>

              <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control" cols="50" rows="5" required><?= $data['deskripsi'];?></textarea>
              </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

            <div class="col-sm-10">
              <select name="status" class="form-control" required>
                  <?php
                    if ($data['status'] == "Dipinjam") {?>
                      <option value="Dipinjam" selected> Dipinjam </option>
                      <option value="Rusak"> Rusak </option>
                      <option value="Tersedia"> Tersedia </option>
                    <?php } elseif ($data['status'] == "Rusak"){?>
                      <option value="Dipinjam"> Dipinjam </option>
                      <option value="Rusak" selected> Rusak </option>
                      <option value="Tersedia"> Tersedia </option>
                    <?php } else {?>
                      <option value="Dipinjam"> Dipinjam </option>
                      <option value="Rusak"> Rusak </option>
                      <option value="Tersedia"selected> Tersedia </option>
                    <?php }
                  ?>
              </select>
            </div>
          </div>

      <div class="box-footer">
        <a href="<?= base_url()?>katalog" class="btn btn-warning">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
