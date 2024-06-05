<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <img src="<?= base_url(); ?>assets/img/upload/<?= $gambar; ?>" class="card-img-top" alt="Gambar Buku">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $pengarang ?></h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                
                                <th>Kategori:</th>
                                <td><?= $kategori ?></td>
                            </tr>
                            <tr>
                                <th>Harga:</th>
                                <td><?= $penerbit ?></td>
                                
                            </tr>
                            <tr>
                                <th>Tahun Produksi:</th>
                                <td><?= substr($tahun, 0, 4) ?></td>
                                
                            </tr>
                            <tr>
                                <th>No Produk:</th>
                                <td><?= $id ?></td>
                                
                            </tr>
                            <tr>
                                
                                <th>Stok:</th>
                                <td><?= $stok ?></td>
                            </tr>
                        </table>
                    </div>
                    <p>
                        <a class="btn btn-outline-primary fas fw fa-shopping-cart" href="<?= base_url('booking/tambahBooking/' . $id); ?>">Masukan Keranjang</a>
                        <span class="btn btn-outline-secondary fas fw fa-reply" onclick="window.history.go(-1)">Kembali</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
