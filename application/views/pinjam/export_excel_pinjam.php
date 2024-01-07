<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Pinjam Perpustakaan Online</center>
</h3>
<br />
<table class="table-data">
    <thead>
        <tr>
            <th scope="col">No Pinjam</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">ID User</th>
            <th scope="col">ID Buku</th>
            <th scope="col">Tanggal Kembali</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($pinjam as $p) {
        ?>
            <tr>
                <td><?= $p['no_pinjam']; ?></td>
                <td><?= $p['tgl_pinjam']; ?></td>
                <td><?= $p['id_user']; ?></td>
                <td><?= $p['id_buku']; ?></td>
                <td><?= $p['tgl_kembali']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>