<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-gear"></i>
              <h3 class="box-title">Edit Kategori <?php echo $baris['nama_kategori']; ?></h3>
            </div>
      <form action="<?php echo site_url('Tools/editktg')?>" method="post">
        <input type="hidden" value="<?php echo $baris['id_kategori'];?>" name="id">
        <div class="box-body">
              <dl>
                <dt>ID Kategori :</dt>
                <dd><h5><input type="text" class="form-control" name="id_tools" value="<?php echo $baris['id_kategori']; ?>"></h5></dd>
                <dt>Nama Kategori :</dt>
                <dd><h5><input type="text" class="form-control" name="nama_tools" value="<?php echo $baris['nama_kategori']; ?>"></h5></dd>
            </div>
            <div class="box-footer">
              <button type="button" class="btn btn-default pull-left"><a href="<?php echo site_url('Tools/kategori')?>">Tutup</a></button>
              <button type="submit" class="btn btn-default pull-right" name="submit"><i class="fa fa-save"></i>Simpan</a></button>
            </div>
          </form>
      </div>
    <?php endforeach; ?>
      <!-- /.box-body -->
    </div>
</section>
</div>
