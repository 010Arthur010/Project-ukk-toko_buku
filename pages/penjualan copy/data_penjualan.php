<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA PENJUALAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA PENJUALAN</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <a href="index.php?page=tambah_penjualan" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
          <div class="box-body table-responsive">
            <table id="penjualan" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>ID BUKU</th>
                  <th>JUDUL</th>
                  <th>HARGA</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "conf/koneksi.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM penjualan
                ORDER BY id_penjualan DESC")
                  or die(mysqli_error($koneksi));
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['id_buku']; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo $row['harga_jual']; ?></td>
                    <td>
                      <a href="index.php?page=ubah_penjualan&id=<?= $row['id_penjualan']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="javascript:void(0);" class="btn btn-danger" role="button" title="Hapus Data" onclick="hapusPenjualan(<?= $row['id_penjualan']; ?>);"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#penjualan').DataTable();
  });

  function hapusPenjualan(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/penjualan/hapus_penjualan.php?id=" + id;
    }
  }
</script>