 <!-- Begin Page Content -->
 <div class="container-fluid"> <?= $this->session->flashdata('pesan'); ?> <div class="row">
         <div class="col-lg-12"> <?php if (validation_errors()) { ?>

                 <div class="alert alert-danger" role="alert"> <?= validation_errors(); ?> </div> <?php } ?> <?= $this->session->flashdata('pesan'); ?>
             <a href="<?= base_url('laporan/cetak_laporan_pinjam'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
             <a href="<?= base_url('laporan/laporan_pinjam_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
             <a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
             <table class="table table-hover">
                 <thead>
                     <tr>
                     <tr>
                         <th scope="col">No Pinjam</th>
                         <th scope="col">Tanggal Pinjam</th>
                         <th scope="col">ID User</th>
                         <th scope="col">ID Buku</th>
                         <th scope="col">Tanggal Kembali</th>

                     </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($pinjam as $p) { ?> <tr>
                             <td><?= $p['no_pinjam']; ?></td>
                             <td><?= $p['tgl_pinjam']; ?></td>
                             <td><?= $p['id_user']; ?></td>
                             <td><?= $p['id_buku']; ?></td>
                             <td><?= $p['tgl_kembali']; ?></td>

                         </tr> <?php } ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div> <!-- /.container-fluid -->
 </div>
 <!-- End of Main Content -->