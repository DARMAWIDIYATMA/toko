<div class="container"> 
    <center> 
        <table> 
            <tr> 
                <td> 
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr> 
                                <th>No Pengiriman</th> 
                                <th>Tanggal Order</th> 
                                <th>ID User</th> 
                                <th>ID Produk</th> 
                                <th>Status</th> 
                            </tr> 
                            <?php foreach ($pinjam as $p) { ?> 
                                <tr> 
                                    <td><?= $p['id_booking']; ?></td> 
                                    <td><?= $p['tgl_pinjam']; ?></td> 
                                    <td><?= $p['id_user']; ?></td> 
                                    <td><?= $p['id_buku']; ?></td> 
                                    <td nowrap> 
                                        
                                            <i class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-fw fa-edit"></i>Terkirim
                                            </i> 
                                       
                                    </td> 
                                </tr> 
                            <?php } ?> 
                        </table> 
                    </div> 
                </td> 
            </tr> 
        </table> 
    </center> 
</div>
