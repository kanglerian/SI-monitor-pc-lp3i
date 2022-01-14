<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-television"></i>

              <h3 class="box-title">Detail Komputer <?php echo $baris['nama_komputer']; ?></h3>
            </div>
        <div class="box-body">
              <dl>
                <dt>ID Komputer :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['id_komputer']; ?>" disabled></h5></dd>
                <dt>No Meja :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['no_meja']; ?>" disabled></h5></dd>
                <dt>Nama Komputer :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['nama_komputer']; ?>" disabled></h5></dd>
                <dt>Nama Ruangan :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['id_ruangan']; ?>" disabled></h5></dd>
                <dt>Kabel :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['kabel']; ?>" disabled></h5></dd>
                <dt>Deskripsi :</dt>
                <dd><h5><textarea type="text" class="form-control" value="<?php echo $baris['deskripsi']; ?>" disabled><?php echo $baris['deskripsi']; ?></textarea></h5></dd>
                <dt>status :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['status']; ?>" disabled></h5></dd>
              </dl>
            </div>
      </div>
    <?php endforeach; ?>
      <!-- /.box-body -->
    </div>
</section>
</div>
