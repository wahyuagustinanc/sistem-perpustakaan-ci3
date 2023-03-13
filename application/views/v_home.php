<?php
  if ($this->session->userdata('level') == 'administrator') {?>
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?= $anggota;?></h3>

                  <p>Anggota</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?= base_url()?>anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?= $buku;?></h3>

                  <p>Buku</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="<?= base_url()?>katalog" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?= $pemesanan;?></h3>

                  <p>Buku di Pesan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-industry"></i>
                </div>
                <a href="<?= base_url()?>pemesanan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?= $kembali;?></h3>

                  <p>Buku Telah di Kembalikan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?= base_url()?>pengembalian" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?= $anggota;?></h3>

                  <p>Anggota</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?= base_url()?>anggota_user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?= $buku;?></h3>

                  <p>Buku</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="<?= base_url()?>katalog_user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?= $pemesanan;?></h3>

                  <p>Buku di Pesan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-industry"></i>
                </div>
                <a href="<?= base_url()?>pemesanan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?= $kembali;?></h3>

                  <p>Buku Telah di Kembalikan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?= base_url()?>pengembalian" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        <?php }