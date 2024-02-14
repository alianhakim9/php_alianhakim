<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2a</title>
</head>

<body>
    <form action="soal2c.php" method="GET">
        <div>
            <label for="umur">Umur Anda : </label>
            <input type="number" id="umur" name="umur" require>
            <?php if (isset($_GET['nama'])) { ?>
                <input type="hidden" name="nama" value="<?php echo htmlspecialchars($_GET['nama']); ?>">
            <?php } ?>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>