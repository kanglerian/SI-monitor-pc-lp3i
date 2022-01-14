<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/lerian.jpg')?>  " class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Lerian | Abu Ibrahim</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="<?php echo site_url('Transaksi/result');?>" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="v" class="form-control" placeholder="Search Komputer..">
          <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- search form -->
      <form action="<?php echo site_url('Transaksi/resultr');?>" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="vr" class="form-control" placeholder="Search Room...">
          <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="active treeview" class="header">
        <li>
          <a href="<?php echo base_url(); ?>Dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          </li>
          </a>
        </li>
        <li class="header">TRANSAKSI</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-television"></i>
            <span>Komputer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Transaksi/input"><i class="fa fa-plus-square"></i> Pasang Tools</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Ruangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Transaksi/inputruangan"><i class="fa fa-plus-square"></i> Pasang Tools</a></li>
          </ul>
        </li>
        <li class="header">MASTER DATA</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-television"></i>
            <span>Master Komputer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Komputer"><i class="fa fa-file-text-o"></i> Data Komputer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Master Tools</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url(); ?>Tools"><i class="fa fa-file-text-o"></i> Data Tools</a>
              <a href="<?php echo base_url(); ?>Tools/kategori"><i class="fa fa-file-text-o"></i> Data Kategori</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Master Ruangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Ruangan"><i class="fa fa-file-text-o"></i> Data Ruangan</a></li>
          </ul>
        </li>
        <li class="header">REPORT</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Komputer/pdf"><i class="fa fa-television"></i> Report Komputer</a></li>
            <li><a href="<?php echo base_url(); ?>Rooms/input"><i class="fa fa-building"></i> Report Ruangan</a></li>
            <li><a href="<?php echo base_url(); ?>Rooms/input"><i class="fa fa-gear"></i> Report Tools</a></li>
          </ul>
        </li>
        <li class="header">
          <a href="<?php echo base_url(); ?>Auth/logout">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
