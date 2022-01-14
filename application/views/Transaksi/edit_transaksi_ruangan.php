<div>
  <section class="content">
  <div>
<?php foreach ($baris as $baris):?>
    <div class="box-header with-border">
              <i class="fa fa-television"></i>

              <h3 class="box-title">Edit Detail <?php echo $baris['id_ruangan']; ?></h3>
            </div>
        <form action="<?php echo site_url('Transaksi/edit')?>" method="post">
          <input type="hidden" value="<?php echo $baris['id_detail_r'];?>" name="id">
          <input type="hidden" value="<?php echo $baris['id_detail_r'];?>" name="id_detail_r">
        <div class="box-body">
              <dl>
                <dt>ID Detail Ruangan :</dt>
                <dd><h5><input type="text" class="form-control" name="id_ruangan" value="<?php echo $baris['id_ruangan']; ?>"></h5></dd>
                <dt>Tools yang dipasang :</dt>
                <dd><h5>
                  <select class="form-control" name="id_tools">
                    <option value="<?php echo $baris['id_tools'];?>" selected><?php echo $baris['id_tools'];?></option>
                  <?php
                    foreach ($list_tools->result() as $lt)
                    {
                      echo"<option value='$lt->id_tools'>$lt->nama_kategori | $lt->nama_tools</option>";
                    }?>
                  </select></h5></dd>
                <dt>Tanggal Pasang :</dt>
                <dd><h5><input type="date" class="form-control" name="tgl_pasang" value="<?php echo $baris['tgl_pasang']; ?>"></h5></dd>
                <dt>Tanggal Lepas :</dt>
                <dd><h5><input type="date" class="form-control" name="tgl_lepas" value="<?php echo $baris['tgl_lepas']; ?>"></h5></dd>
                <dt>Deskripsi :</dt>
                <dd><h5><textarea type="text" class="form-control" name="deskripsi" value="<?php echo $baris['deskripsi']; ?>"><?php echo $baris['deskripsi']; ?></textarea></h5></dd>
                <dt>status :</dt>
                <dd><h5>
                  <select class="form-control" name="status">
                    <option value="<?php echo $baris['status']; ?>" selected><?php echo $baris['status']; ?></option>
                    <option value="Ready">Ready</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Perbaikan">Maintenance</option>
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
