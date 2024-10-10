<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            color: #555;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        .result {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pass {
            color: #28a745;
            font-weight: bold;
        }

        .fail {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Aplikasi Penilaian Mahasiswa</h2>
    <form method="POST">
        <label for="mata_kuliah1">Mata Kuliah 1:</label>
        <input type="number" name="mata_kuliah1" required><br><br>
        
        <label for="mata_kuliah2">Mata Kuliah 2:</label>
        <input type="number" name="mata_kuliah2" required><br><br>
        
        <label for="mata_kuliah3">Mata Kuliah 3:</label>
        <input type="number" name="mata_kuliah3" required><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST['mata_kuliah1'];
        $nilai2 = $_POST['mata_kuliah2'];
        $nilai3 = $_POST['mata_kuliah3'];

        // Hitung rata-rata
        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

        // Tentukan status kelulusan
        $status = ($rata_rata >= 60) ? "Lulus" : "Tidak Lulus";
        $status_class = ($rata_rata >= 60) ? "pass" : "fail";

        // Tampilkan hasil
        echo "<div class='result'>";
        echo "<h3>Hasil Penilaian</h3>";
        echo "Nilai Rata-Rata: <strong>" . number_format($rata_rata, 2) . "</strong><br>";
        echo "Status Kelulusan: <span class='$status_class'>" . $status . "</span>";
        echo "</div>";
    }
    ?>
</body>
</html>
