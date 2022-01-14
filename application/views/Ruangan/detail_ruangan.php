<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-building"></i>

              <h3 class="box-title">Detail Ruangan <?php echo $baris['nama_ruangan']; ?></h3>
            </div>
        <div class="box-body">
              <dl>
                <dt>ID Ruangan :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['id_ruangan']; ?>" disabled></h5></dd>
                <dt>Nama Ruangan :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['nama_ruangan']; ?>" disabled></h5></dd>
                <dt>Lantai :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['lantai']; ?>" disabled></h5></dd>
                <dt>Sound :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['sound']; ?>" disabled></h5></dd>
                <dt>Kapasitas :</dt>
                <dd><h5><input type="text" class="form-control" value="<?php echo $baris['kapasitas']; ?>" disabled></h5></dd>
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
