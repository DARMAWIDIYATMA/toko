<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- end row ux-->

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- row table-->
  <div class="row">
    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-users text-primary mt-2 "> Data User</span>
        <a class="text-danger" href="<?php echo base_url('user/anggota'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
      </div>
      <table class="table mt-3">
        <thead>
          <tr>
            <th>No</th>
            <th>ID_User</th>
            <th>NamaAnggota</th>
            <th>Email</th>
            
            <th>DaftarSejak</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($anggota as $a) { ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $a['id']; ?></td>
              <td><?= $a['nama']; ?></td>
              <td><?= $a['email']; ?></td>
              
              <td><?= date('Y-m-d', $a['tanggal_input']); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-book text-warning mt-2"> Data Produk</span>
        <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
      </div>
      <div class="table-responsive">
        <table class="table mt-3" id="table-datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>NamaProduk</th>
              <th>JenisProduk</th>
              <th>Harga</th>
              <th>TahunPembuatan</th>
              <th>NoProduk</th>
              <th>Stok</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($buku as $b) { ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $b['judul_buku']; ?></td>
                <td><?= $b['pengarang']; ?></td>
                <td><?= $b['penerbit']; ?></td>
                <td><?= $b['tahun_terbit']; ?></td>
                <td><?= $b['isbn']; ?></td>
                <td><?= $b['stok']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>


  </div>
  <!-- end of row table-->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->