<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-building"></i>
              <h3 class="box-title">Edit Ruangan <?php echo $baris['nama_ruangan']; ?></h3>
            </div>
      <form action="<?php echo site_url('Ruangan/edit')?>" method="post">
        <input type="hidden" value="<?php echo $baris['id_ruangan'];?>" name="id">
        <div class="box-body">
              <dl>
                <dt>ID Ruangan :</dt>
                <dd><h5><input type="text" class="form-control" name="id_ruangan" value="<?php echo $baris['id_ruangan']; ?>"></h5></dd>
                <dt>Nama Ruangan :</dt>
                <dd><h5><input type="text" class="form-control" name="nama_ruangan" value="<?php echo $baris['nama_ruangan']; ?>"></h5></dd>
                <dt>Lantai :</dt>
                <dd><h5>
                  <select class="form-control" name="lantai">
                      <option value="<?php echo $baris['lantai']; ?>" selected><?php echo $baris['lantai']; ?></option>
                      <option value="Lantai 1">Lantai 1</option>
                      <option value="Lantai 2">Lantai 2</option>
                      <option value="Lantai 3">Lantai 3</option>
                      <option value="Lantai 4">Lantai 4</option>
                      <option value="Lantai 5">Lantai 5</option>
                    </select>
                </h5></dd>
                <dt>Sound :</dt>
                <dd><h5>
                  <select class="form-control" name="sound">
                      <option value="<?php echo $baris['sound']; ?>" selected><?php echo $baris['sound']; ?></option>
                      <option value="Ada">Ada</option>
                      <option value="Tidak Ada">Tidak Ada</option>
                    </select>
                </h5></dd>
                <dt>Kapasitas :</dt>
                <dd><h5><input type="text" class="form-control" name="kapasitas" value="<?php echo $baris['kapasitas']; ?>"></h5></dd>
                <dt>Deskripsi :</dt>
                <dd><h5><textarea type="text" class="form-control" name="deskripsi" value="<?php echo $baris['deskripsi']; ?>"><?php echo $baris['deskripsi']; ?></textarea></h5></dd>
                <dt>status :</dt>
                <dd><h5><select class="form-control" name="status">
                    <option value="<?php echo $baris['status']; ?>" selected><?php echo $baris['status']; ?></option>
                    <option value="Ready">Ready</option>
                    <option value="Dipakai">Dipakai</option>
                    <option value="Perbaikan">Perbaikan</option>
                  </select>
                </h5></dd>
              </dl>
            </div>
            <div class="box-footer">
              <button type="button" class="btn btn-default pull-left"><a href="<?php echo site_url('Ruangan')?>">Tutup</a></button>
              <button type="submit" class="btn btn-default pull-right" name="submit"><i class="fa fa-save"></i>Simpan</a></button>
            </div>
          </form>
      </div>
    <?php endforeach; ?>
      <!-- /.box-body -->
    </div>
</section>
</div>
