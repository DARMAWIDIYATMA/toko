<style>
    /* Styling untuk Banner */
    .banner {
        position: relative;
        text-align: center;
        height: 300px;
        overflow: hidden;
    }

    .banner img {
        width: 100%;
        height: auto;
    }

    .banner-content {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        color: #fff; /* Warna teks */
        z-index: 1; /* Supaya teks berada di depan gambar */
        background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang teks */
        width: 100%; /* Agar teks mencakup seluruh lebar banner */
        padding: 1px 0; /* Spasi atas dan bawah teks */
    }

    .banner-content h1 {
        font-size: 2em;
        margin-bottom: 10px;
    }

    .banner-content p {
        font-size: 1em;
        margin: 0; /* Hapus margin default */
    }
</style>

<div class="banner">
    <img src="assets/img/toko.png" alt="Banner Image">
    <div class="banner-content">
        
        <p>Shop now!!!</p>
    </div>
</div>


<style>
    .produk {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .produk .thumbnail {
        height: 400px;
        border: 1px solid #ddd;
        border-radius: 50px;
        overflow: hidden;
        position: relative;
        transition: transform 0.3s ease-in-out;
    }

    .produk .thumbnail:hover {
        transform: scale(1.00);
    }

    .produk .thumbnail img {
        max-width: 100%;
        max-height: 100%;
        height: 200px;
        width: 180px;
        transition: transform 0.3s ease-in-out;
    }

    .produk .thumbnail:hover img {
        transform: scale(1.2);
    }

    .produk .caption {
        text-align: center;
    }

    .produk .btn {
        transition: transform 0.3s ease-in-out;
    }

    .produk .btn:hover {
        transform: scale(1.1);
    }
</style>

<?= $this->session->flashdata('pesan'); ?>

<div style="padding: 25px;">
    <div class="x_panel">
        <div class="x_content">
            <!-- Tampilkan semua produk -->
            <div class="row produk">
                <!-- looping products -->
                <?php foreach ($buku as $produk) { ?>
                    <div class="col-md-2 col-md-3">
                        <div class="thumbnail">
                            <a href="<?= base_url('home/detailBuku/' . $produk->id); ?>">
                                <img src="<?= base_url(); ?>assets/img/upload/<?= $produk->image; ?>" style="display: block; margin: 0 auto;">
                            </a>
                            <div class="caption">
                                <h5 style="min-height:30px;"><?= $produk->pengarang ?></h5>
                                <h5><?= $produk->penerbit ?></h5>
                                <h5><?= substr($produk->tahun_terbit, 0, 4) ?></h5>
                                <p>
                                    <?php if ($produk->stok < 1) { ?>
                                        <i class='btn btn-outline-primary fas fw fa-shopping-cart'> Produk Kosong&nbsp;&nbsp 0</i>
                                    <?php } else { ?>
                                        <a class='btn btn-outline-primary fas fw fa-shopping-cart' href='<?= base_url('booking/tambahBooking/' . $produk->id) ?>'> Masukan Keranjang</a>
                                    <?php } ?>
                                    <a class="btn btn-outline-warning fas fw fa-search" href="<?= base_url('home/detailBuku/' . $produk->id); ?>"> Detail Produk</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- end looping -->
            </div>
        </div>
    </div>
</div>

