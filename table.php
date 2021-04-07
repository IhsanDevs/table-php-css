<?php
$nama = ['Budi', 'Rio', 'Hendra', 'Rizky', 'Nadia', 'Dila', 'Sandy', 'Dendi', 'Laura', 'Ihsan Devs'];
$umur = ['20', '21', '22', '21', '28', '27', '29', '18', '32', '13'];
$nomor = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table PHP | CSS</title>
    <link rel="stylesheet" href="support/style.css">
</head>
<body>

<h2>Contoh Table PHP | CSS</h2>
<div class="table-wrapper">
<table border="1" cellpadding="10" class="fl-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
    </thead>

<tbody>
<?php while($nomor < count($nama)) : ?>

    <tr>
            <td><?= $nama[$nomor]; ?></td>
            <td><?= $umur[$nomor]." Tahun"; ?></td>
            </tr>

<?php $nomor++; ?>
<?php endwhile; ?>
</tbody>
</table>
</div>

<div class="footer">
  <p>Made with ❤ by <a href="https://github.com/IhsanDevs" target="_blank">Ihsan Devs</a></p>
</div>
</body>
</html>