<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Tahun Produksi</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1; 
                foreach ($temp as $t) { 
                ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td>
                        <img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" width="50">
                    </td>
                    <td><?= $t['penulis']; ?></td>
                    <td><?= $t['penerbit']; ?></td>
                    <td><?= substr($t['tahun_terbit'], 0, 4); ?></td>
                    <td>
                        <a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking <?= $t['judul_buku'] ?>')">
                            <i class="btn btn-sm btn-outline-danger fas fw fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php 
                    $no++; 
                } 
                ?>
            </tbody>
        </table>
    </div>
    <hr>
    <div>
        <a class="btn btn-sm btn-outline-primary" href="<?= base_url(); ?>">
            <span class="fas fw fa-reply"></span> Lanjut Belanja
        </a>
        <a class="btn btn-sm btn-outline-success" href="<?= base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>">
            <span class="fas fw fa-credit-card"></span> Bayar Sekarang
        </a>
    </div>
</div>
