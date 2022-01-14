<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-gear"></i>

              <h3 class="box-title">Detail Tools <?php echo $baris['nama_tools']; ?></h3>
            </div>
        <div class="box-body">
              <dl>
                <dt>ID Tools :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['id_tools']; ?>" disabled></h5></dd>
                <dt>No ISBN :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['isbn']; ?>" disabled></h5></dd>
                <dt>Nama Tools :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['nama_tools']; ?>" disabled></h5></dd>
                <dt>Kategori :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['id_kategori']; ?>" disabled></h5></dd>
                <dt>Ruangan :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['id_ruangan']; ?>" disabled></h5></dd>
                <dt>Generasi :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['generasi']; ?>" disabled></h5></dd>
                <dt>Version :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['version']; ?>" disabled></h5></dd>
                <dt>Model :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['model']; ?>" disabled></h5></dd>
                <dt>Deskripsi :</dt>
                <dd><h5><textarea type="text" class="form-control" value="<?php echo $baris['deskripsi']; ?>" disabled><?php echo $baris['deskripsi']; ?></textarea></h5></dd>
                <dt>Tanggal beli :</dt>
                <dd><h5><input type="date" class="form-control" value="<?php echo $baris['tgl_beli']; ?>" disabled></h5></dd>
                <dt>Status :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['status']; ?>" disabled></h5></dd>
              </dl>
            </div>
      </div>
    <?php endforeach; ?>
      <!-- /.box-body -->
    </div>
</section>
</div>
