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
          <div class="box-body table-responsive">
            <table id="penjualan" class="table table-bordered table-hover" border="2">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>ID PENJUALAN</th>
                  <th>ID KASIR</th>
                  <th>HARGA</th>
                  <th>HARGA JUAL</th>
                  <th>DETAIL</th>
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
                    <td><?php echo $row['id_penjualan']; ?></td>
                    <td><?php echo $row['id_kasir']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td>
                      <a href="index.php?page=detail&id=<?= $row['id_penjualan']; ?>" class="btn btn-warning" role="button" title="Lihat Detail"><i class="glyphicon glyphicon-th-list"></i></a>
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