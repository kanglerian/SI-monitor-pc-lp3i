<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-television"></i>

              <h3 class="box-title">Edit Komputer <?php echo $baris['nama_komputer']; ?></h3>
            </div>
        <form action="<?php echo site_url('Komputer/edit')?>" method="post">
          <input type="hidden" value="<?php echo $baris['id_komputer'];?>" name="id">
        <div class="box-body">
              <dl>
                <dt>ID Komputer :</dt>
                <dd><h5><input type="text" class="form-control" name="id_komputer" value="<?php echo $baris['id_komputer']; ?>"></h5></dd>
                <dt>No Meja :</dt>
                <dd><h5><input type="text" class="form-control" name="no_meja" value="<?php echo $baris['no_meja']; ?>"></h5></dd>
                <dt>Nama Komputer :</dt>
                <dd><h5><input type="text" class="form-control" name="nama_komputer" value="<?php echo $baris['nama_komputer']; ?>"></h5></dd>
                <dt>Nama Ruangan :</dt>
                <dd><h5>
                  <select class="form-control" name="id_ruangan">
                    <option value="<?php echo $baris['id_ruangan']; ?>" selected><?php echo $baris['id_ruangan']; ?></option>
                  <?php
                    foreach ($list_ruangan->result() as $lr)
                    {
                      echo"<option value='$lr->id_ruangan'>$lr->nama_ruangan</option>";
                    }?>
                  </select></h5></dd>
                <dt>Jaringan :</dt>
                <dd><h5>
                  <select class="form-control" name="kabel">
                    <option value="<?php echo $baris['kabel']; ?>" selected><?php echo $baris['kabel']; ?></option>
                    <option value="Connect">Connect</option>
                    <option value="Disabled">Disabled</option>
                  </select>
                </h5></dd>
                <dt>Deskripsi :</dt>
                <dd><h5><textarea type="text" class="form-control" name="deskripsi" value="<?php echo $baris['deskripsi']; ?>"><?php echo $baris['deskripsi']; ?></textarea></h5></dd>
                <dt>Status :</dt>
                <dd><h5>
                  <select class="form-control" name="status">
                    <option value="<?php echo $baris['status']; ?>" selected><?php echo $baris['status']; ?></option>
                    <option value="Ready">Ready</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Maintenance">Maintenance</option>
                  </select>
                </h5></dd>
              </dl>
            </div>
            <div class="box-footer">
              <button type="button" class="btn btn-default pull-left"><a href="<?php echo site_url('Komputer')?>">Tutup</a></button>
              <button type="submit" class="btn btn-default pull-right" name="submit"><i class="fa fa-save"></i>Simpan</a></button>
            </div>
          </form>
      </div>
    <?php endforeach; ?>
      <!-- /.box-body -->
    </div>
</section>
</div>
