<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>
<body>
    <h1>List Product</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Product</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $p): ?>
            <tr>
                <td><?php echo $p->id; ?></td>
                <td><?php echo $p->nama_product; ?></td>
                <td><?php echo $p->description; ?></td>
            </tr>

        <?php endforeach?>
        </tbody>
    </table>
</body>
</html>
