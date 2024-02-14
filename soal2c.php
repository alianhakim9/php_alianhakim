<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2c</title>
</head>

<body>
    <form action="soal2d.php" method="GET">
        <div>
            <label for="hobi">Hobi Anda : </label>
            <input type="text" id="hobi" name="hobi" require>
            <?php if (isset($_GET['nama'])) { ?>
                <input type="hidden" name="nama" value="<?php echo htmlspecialchars($_GET['nama']); ?>">
                <input type="hidden" name="umur" value="<?php echo htmlspecialchars($_GET['umur']); ?>">
            <?php } ?>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>