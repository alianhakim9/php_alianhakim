<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2d</title>
</head>

<body>
    <div>
        <p>Nama : <?php echo htmlspecialchars($_POST['nama']); ?></p>
        <p>Umur : <?php echo htmlspecialchars($_POST['umur']); ?></p>
        <p>Hobi : <?php echo htmlspecialchars($_POST['hobi']); ?></p>
    </div>
</body>

</html>