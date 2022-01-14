<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Barang Hilang
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Barang Hilang</li>
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
          <input type="text" class="form-control" name="nama_barang" value="<?php echo $record['nama_barang'];?>">
        </div>
        <div class="form-group">
          <label>Kategori</label>
          <input type="text" class="form-control" name="category" value="<?php echo $record['category'];?>">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea type="text" class="form-control" name="deskripsi" value="<?php echo $record['deskripsi'];?>"><?php echo $record['deskripsi'];?></textarea>
        </div>
        <div class="form-group">
          <label>Tanggal Ditemukan</label>
          <input type="date" class="form-control" name="tgl_ditemukan" value="<?php echo $record['tgl_ditemukan'];?>">
        </div>
        <div class="form-group">
          <label>Ruangan</label>
          <select class="form-control select2" name="room_name" style="width: 100%;">
            <option selected="selected" value="<?php echo $record['room_name'];?>"><?php echo $record['room_name'];?></option>
              <?php
                foreach ($daftar_rooms->result() as $dr)
                  {
                    echo '<option value="'.$dr->room_name.'">'.$dr->room_name.'</option>';
                  } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control select2" name="status" style="width: 100%;">
            <option selected="selected" value="<?php echo $record['status'];?>"><?php echo $record['status'];?></option>
          </select>
        </div>
          <!-- /.input group -->
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-app" name="submit"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?php echo base_url('index.php/Hilang/')?>" class="btn btn-app"><i class="fa fa-repeat"></i> Batal</a>
      </div>
    </form>
  </div>
  <!-- /.box -->
    </div>
    <!-- /.row (main row) -->

  </section>
