<?php
include("conf/koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='" . $_GET['id'] . "'") or die(mysqli_error($koneksi));
$row = mysqli_fetch_array($query);
?>

<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
              <h1>
                     UBAH DATA
              </h1>
              <ol class="breadcrumb">
                     <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
                     <li class="active">UBAH DATA</li>
              </ol>
       </section>

       <!-- Main content -->
       <section class="content">
              <div class="row">
                     <!-- left column -->
                     <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                   <!-- /.box-header -->
                                   <!-- form start -->
                                   <form role="form" method="post" action="pages/buku/update_buku.php">
                                          <div class="box-body">
                                                 <input type="hidden" name="id" value="<?php echo $row['id_buku']; ?>">
                                                 <div class="form-group">
                                                        <label>Judul</label>
                                                        <input type="text" name="judul" class="form-control" placeholder="Judul" value="<?php echo $row['judul']; ?>" required>
                                                 </div>
                                                 <div class="form-group">
                                                        <label>NoISBN</label>
                                                        <input type="text" name="noisbn" class="form-control" placeholder="NoISBN" value="<?php echo $row['noisbn']; ?>" required>
                                                 </div>
                                                 <div class="form-group">
                                                        <label>Penulis</label>
                                                        <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="<?php echo $row['penulis']; ?>" required>
                                                 </div>
                                                 <div class="form-group">
                                                        <label>Penerbit</label>
                                                        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="<?php echo $row['penerbit']; ?>" required>
                                                 </div>
                                                 <div class="form-group">
                                                        <label>Tahun</label>
                                                        <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="<?php echo $row['tahun']; ?>" required>
                                                 </div>
                                                 <div class="form-group">
                                                        <label>Stok</label>
                                                        <input type="text" name="stok" class="form-control" placeholder="Stok" value="<?php echo $row['stok']; ?>" required>
                                                 </div>
                                                 <div class="form-group">
                                                        <label>Harga Pokok</label>
                                                        <input type="text" name="harga_pokok" class="form-control" placeholder="Harga Pokok" value="<?php echo $row['harga_pokok']; ?>" required>
                                                 </div>
                                                 <div class="form-group">
                                                        <label>Harga Jual</label>
                                                        <input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual" value="<?php echo $row['harga_jual']; ?>" required>
                                                 </div>
                                                 <li>
                                                        <label for="gambar">GAMBAR :</label><br>
                                                        <img src="dist/img/<?= $row["gambar"]; ?>" width="40"><br>
                                                        <input type="file" name="gambar" id="gambar">
                                                 </li>
                                          </div>
                                          <!-- /.box-body -->
                                          <div class="box-footer">
                                                 <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                                          </div>
                                   </form>
                            </div>
                            <!-- /.box -->
                     </div>
              </div>
       </section>
       <!-- /.content -->
</div>