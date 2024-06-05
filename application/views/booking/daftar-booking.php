<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-data table">
                            <tr>
                                <th>No</th>
                                <th>No Pengiriman</th>
                                <th>Tanggal Order</th>
                                <th>ID User</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($pinjam as $p) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><a class="btn btn-link" href="<?= base_url('pinjam/bookingDetail/' . $p['id_booking']); ?>"><?= $p['id_booking']; ?></a></td>
                                    <td><?= $p['tgl_booking']; ?></td>
                                    <td><?= $p['id_user']; ?></td>
                                    <td nowrap>
                                        <form action="<?= base_url('pinjam/pinjamAct/' . $p['id_booking']); ?>" method="post">
                                            <button type="submit" class="btn btn-sm btn-outline-info">Kirim Sekarang</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center"><a href="<?= base_url('pinjam/daftarBooking'); ?>" class="btn btn-link"><i class="fas fa-fw fa-refresh"></i> Refresh</a></td>
            </tr>
        </table>
    </center>
</div>
