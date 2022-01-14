<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Barang Hilang
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Detail Barang Hilang</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php echo form_open('Hilang/edit');?>

  <!-- general form elements -->
  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <input type="hidden" value="<?php echo $record['id_hilang'];?>" name="id">
        <div class="form-group">
          <label>Nama Barang Hilang</label>
          <input type="text" class="form-control" name="nama_barang" value="<?php echo $record['nama_barang'];?>" disabled>
        </div>
        <div class="form-group">
          <label>Kategori</label>
          <input type="text" class="form-control" name="category" value="<?php echo $record['category'];?>" disabled>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea type="text" class="form-control" name="deskripsi" value="<?php echo $record['deskripsi'];?>" disabled><?php echo $record['deskripsi'];?></textarea>
        </div>
        <div class="form-group">
          <label>Tanggal Ditemukan</label>
          <input type="date" class="form-control" name="tgl_ditemukan" value="<?php echo $record['tgl_ditemukan'];?>" disabled>
        </div>
        <div class="form-group">
          <label>Ruangan</label>
          <input type="text" class="form-control" value="<?php echo $record['room_name'];?>" disabled>
        </div>
        <div class="form-group">
          <label>Status</label>
          <input type="text" class="form-control"value="<?php echo $record['status'];?>" disabled>
        </div>
          <!-- /.input group -->
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <a href="<?php echo base_url('index.php/Hilang/edit/'.$this->uri->segment(3))?>" class="btn btn-app"><i class="fa fa-edit"></i> Edit</a>
        <a href="<?php echo base_url('index.php/Hilang/')?>" class="btn btn-app"><i class="fa fa-repeat"></i> Kembali</a>
      </div>
    </form>
  </div>
  <!-- /.box -->
    </div>
    <!-- /.row (main row) -->

  </section>
