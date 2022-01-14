<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-gear"></i>
              <h3 class="box-title">Edit Tools <?php echo $baris['nama_tools']; ?></h3>
            </div>
      <form action="<?php echo site_url('Tools/edit')?>" method="post">
        <input type="hidden" value="<?php echo $baris['id_tools'];?>" name="id">
        <div class="box-body">
              <dl>
                <dt>ID Tools :</dt>
                <dd><h5><input type="text" class="form-control" name="id_tools" value="<?php echo $baris['id_tools']; ?>"></h5></dd>
                <dt>No ISBN :</dt>
                <dd><h5><input type="text" class="form-control" name="isbn" value="<?php echo $baris['isbn']; ?>"></h5></dd>
                <dt>Nama Tools :</dt>
                <dd><h5><input type="text" class="form-control" name="nama_tools" value="<?php echo $baris['nama_tools']; ?>"></h5></dd>
                <dt>Kategori :</dt>
                <dd><h5>
                  <select class="form-control" name="id_kategori">
                    <option value="<?php echo $baris['id_kategori']; ?>" selected><?php echo $baris['id_kategori']; ?></option>
                  <?php
                    foreach ($list_kategori->result() as $lkt)
                    {
                      echo"<option value='$lkt->id_tools'>$lkt->nama_kategori</option>";
                    }?>
                    </select>
                </h5></dd>
                <dt>Ruangan :</dt>
                <dd><h5>
                  <select class="form-control" name="id_ruangan">
                    <option value="<?php echo $baris['id_ruangan']; ?>" selected><?php echo $baris['id_ruangan']; ?></option>
                  <?php
                    foreach ($list_ruangan->result() as $lr)
                    {
                      echo"<option value='$lr->id_ruangan'>$lr->nama_ruangan</option>";
                    }?>
                    </select>
                </h5></dd>
                <dt>Generasi :</dt>
                <dd><h5><input type="text" class="form-control" name="generasi" value="<?php echo $baris['generasi']; ?>"></h5></dd>
                <dt>Version :</dt>
                <dd><h5><input type="text" class="form-control" name="version" value="<?php echo $baris['version']; ?>"></h5></dd>
                <dt>Model :</dt>
                <dd><h5><input type="text" class="form-control" name="model" value="<?php echo $baris['model']; ?>"></h5></dd>
                <dt>Deskripsi :</dt>
                <dd><h5><textarea type="text" class="form-control" name="deskripsi" value="<?php echo $baris['deskripsi']; ?>"><?php echo $baris['deskripsi']; ?></textarea></h5></dd>
                <dt>Tanggal beli :</dt>
                <dd><h5><input type="date" class="form-control" name="tgl_beli" value="<?php echo $baris['tgl_beli']; ?>"></h5></dd>
                <dt>status :</dt>
                <dd><h5><select class="form-control" name="status">
                    <option value="<?php echo $baris['status']; ?>" selected><?php echo $baris['status']; ?></option>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                  </select>
                </h5></dd>
              </dl>
            </div>
            <div class="box-footer">
              <button type="button" class="btn btn-default pull-left"><a href="<?php echo site_url('Tools')?>">Tutup</a></button>
              <button type="submit" class="btn btn-default pull-right" name="submit"><i class="fa fa-save"></i>Simpan</a></button>
            </div>
          </form>
      </div>
    <?php endforeach; ?>
      <!-- /.box-body -->
    </div>
</section>
</div>
