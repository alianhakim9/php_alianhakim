<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'testdb';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal : " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3a</title>
    <style>
        .table {
            padding: 0;
            margin: 0;
            border-spacing: 0;
            border: 1px solid black;
        }

        .table tr td,
        .table thead th {
            border: 1px solid black;
            padding: 4px;
        }

        .search-container {
            display: flex;
            flex-direction: column;
            gap: 4px;
            align-items: start;
            margin-bottom: 14px;
            max-width: 200px;
        }
    </style>
</head>

<body>
    <form method="POST" class="search-container">
        <div>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <button type="submit">Search</button>
    </form>

    <table class="table">
        <thead>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM person INNER JOIN hobi ON person.id=hobi.person_id";

            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];

                if (!empty($nama) || !empty($alamat)) {
                    $sql .= " WHERE";

                    if (!empty($nama)) {
                        $sql .= " nama LIKE '%$nama%'";
                    }

                    if (!empty($alamat)) {
                        $sql .= " AND alamat LIKE '%$alamat%'";
                    }
                }
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>\n";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['hobi'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada hasil</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>