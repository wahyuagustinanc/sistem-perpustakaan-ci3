<?php
  if ($this->session->userdata('level') == 'administrator') {?>
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url()?>assets/dist/img/library.jfif" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><b>Library</b>Online</p>
            Indonesia
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active">
            <a href="<?= base_url()?>dashboard">
              <i class="fa fa-home"></i> <span>Home</span>
            </a>
          </li>

          <li>
            <a href="<?= base_url()?>anggota">
              <i class="fa fa-user"></i> <span>Data Anggota</span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Daftar Buku</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>pengarang"><i class="fa fa-circle-o"></i> Pengarang</a></li>
              <li><a href="<?= base_url()?>penerbit"><i class="fa fa-circle-o"></i> Penerbit</a></li>
              <li><a href="<?= base_url()?>buku"><i class="fa fa-circle-o"></i> Buku</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-list-alt"></i>
              <span>Aktivitas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>pemesanan"><i class="fa fa-circle-o"></i> Pemesanan Buku</a></li>
              <li><a href="<?= base_url()?>katalog"><i class="fa fa-circle-o"></i> Daftar Katalog Buku</a></li>
              <li><a href="<?= base_url()?>pengembalian"><i class="fa fa-circle-o"></i> Pengembalian Buku</a></li>
            </ul>
          </li>

          <li><a href="<?= base_url()?>aboutUs"><i class="fa fa-laptop"></i> About Us</a></li>

          <hr>
          <li><a href="<?= base_url()?>login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
  <?php } else{ ?>
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/dist/img/library.jfif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><b>Library</b>Online</p>
          Indonesia
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class>
          <a href="<?= base_url()?>dashboard">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>

        <li>
          <a href="<?= base_url()?>anggota_user">
            <i class="fa fa-user"></i> <span>Data Anggota</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Daftar Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>pengarang_user"><i class="fa fa-circle-o"></i> Pengarang</a></li>
            <li><a href="<?= base_url()?>penerbit_user"><i class="fa fa-circle-o"></i> Penerbit</a></li>
            <li><a href="<?= base_url()?>buku_user"><i class="fa fa-circle-o"></i> Buku</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Aktivitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>pemesanan_user"><i class="fa fa-circle-o"></i> Pemesanan Buku</a></li>
            <li><a href="<?= base_url()?>katalog_user"><i class="fa fa-circle-o"></i> Daftar Katalog Buku</a></li>
            <li><a href="<?= base_url()?>pengembalian_user"><i class="fa fa-circle-o"></i> Pengembalian Buku</a></li>
          </ul>
        </li>

        <li><a href="<?= base_url()?>aboutUs"><i class="fa fa-laptop"></i> About Us</a></li>

        <hr>
        <li><a href="<?= base_url()?>login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php }
?>


