<div class="container">
    <center>
        <table>
            <?php foreach ($agt_booking as $ab) { ?>
                <tr>
                    <td>Nama User</td>
                    <td>:</td>
                    <td><?= $ab['nama']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $ab['alamat']; ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>No Produk</th>
                                <th>Nama Produk</th>
                                <th>Jenis Produk</th>
                                <th>Harga</th>
                                <th>Tahun Pembuatan</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($detail as $d) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $d['id_buku']; ?></td>
                                    <td><?= $d['judul_buku']; ?></td>
                                    <td><?= $d['pengarang']; ?></td>
                                    <td><?= $d['penerbit']; ?></td>
                                    <td><?= $d['tahun_terbit']; ?></td>
                                </tr>
                                <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3"><a href="#" onclick="window.history.go(-1)" class="btn btn-outline-dark"><i class="fas fa-fw fa-reply"></i> Kembali</a></td>
            </tr>
        </table>
    </center>
</div>
