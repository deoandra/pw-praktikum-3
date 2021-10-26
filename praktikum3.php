<?php
    $datas = [
        [
            'nama' => 'Tepung',
            'berat(kg)' => 1,
            'stok' => 1
        ],
        [
            'nama' => 'Beras',
            'berat(kg)' => 0.5,
            'stok' => 5
        ],
        [
            'nama' => 'Garam',
            'berat(kg)' => 0.75,
            'stok' => 3
        ],
        [
            'nama' => 'Garam',
            'berat(kg)' => 1,
            'stok' => 0
        ],
        [
            'nama' => 'Telur',
            'berat(kg)' => 0.5,
            'stok' => 5
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Praktikum 3</title>
</head>
<body>
    <h1>Tabel Konversi Pak Joy</h1>
    <table class="barang">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Berat(Kg)</th>
                <th>Berat(gram)</th>
                <th>Berat(miligram)</th>
                <th>Berat(liter)</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $index => $data) { ?>
            <tr>
                <td><?= $index + 1?>.</td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['berat(kg)'] ?></td>
                <td><?= $data['berat(kg)']*1000 ?></td>
                <td><?= $data['berat(kg)']*1000000 ?></td>
                <td><?= $data['berat(kg)']*1000000 ?></td>
                <td class="<?= $data['stok'] == 0 ? 'zeroValue' : '' ?>"><?=

                $data['stok'] == 0 ? 'Kosong' : $data['stok'] ?></td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
</body>
</html>