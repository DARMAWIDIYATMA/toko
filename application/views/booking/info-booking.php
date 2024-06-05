<div class="container">
        
            
                <?php foreach ($useraktif as $u) { ?>
                    <tr>
                        <td>Terima Kasih <b><?= $u->nama; ?>,</b></td>
                    </tr>
                    <tr>
                        <td>Produk yang Anda Beli Adalah Sebagai Berikut:</td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Produk</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Tahun Produksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($items as $i) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>
                                                <img src="<?= base_url('assets/img/upload/' . $i['image']); ?>" class="rounded" alt="No Picture" width="50%">
                                            </td>
                                            <td><?= $i['pengarang']; ?></td>
                                            <td><?= $i['penerbit']; ?></td>
                                            <td><?= $i['tahun_terbit']; ?></td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>
                        
					<a class="btn btn-sm btn-outline-primary" href="<?= base_url(); ?>"> <span class="fas fw fa-text"></span> Selesai
                    </a>
								
                       <a> <span class="far fa-lg fa-fw fa-text"></span>*produk akan dikirim maksimal 1x24 jam</a>
                    </td>
                </tr>
            </table>
        </center>
    </div>