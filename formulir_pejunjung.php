<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Pengunjung Perpustakaan Sarah Nurul Azima</title>
    <style>
        body {
            font-family: Calibri, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 25px;
            max-width: 600px;
            margin: auto;
        }

        table {
            width: 100%;
            margin: 20px 0;
        }

        td {
            padding: 10px;
            vertical-align: top;
        }

        input[type="text"], input[type="email"], input[type="tel"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: background-color 0.3s ease;
        }

        input[type="text"]:hover,
        input[type="email"]:hover,
        input[type="tel"]:hover,
        select:hover {
            background-color: #8000001a; /* hint maroon transparan */
        }

        input[type="submit"] {
            background-color: #600000;
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #800000;
        }
    </style>
</head>
<body>

<h2>Formulir Data Pengunjung Perpustakaan Sarah Nurul Azima</h2>
<div class="form-container">
    <form method="post" action="inputdosen.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td><input type="text" name="NIP" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="tel" name="telepon" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Jenis Pengunjung</td>
                <td>
                    <select name="jenis_pengunjung" required>
                        <option value="">Pilih Jenis Pengunjung</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                        <option value="Pustakawan">Pustakawan</option>
                        <option value="Staff">Staff</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Kirim Data">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>
