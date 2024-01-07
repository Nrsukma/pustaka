<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 10px 10px 10px;
        }
    </style>

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
            <?php foreach ($pinjam as $p) { ?> <tr>
                    <td><?= $p['no_pinjam']; ?></td>
                    <td><?= $p['tgl_pinjam']; ?></td>
                    <td><?= $p['id_user']; ?></td>
                    <td><?= $p['id_buku']; ?></td>
                    <td><?= $p['tgl_kembali']; ?></td>
                <?php
            }
                ?>
        </tbody>
    </table>
</body>

</html>