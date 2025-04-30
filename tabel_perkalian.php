<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian 10x10 Interaktif</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            font-family: Calibri, sans-serif;
        }
        th, td {
            border: 1px solid #000;
            padding: 12px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        th {
            background-color: hsl(60, 100%, 97%);
        }
        td:hover {
            background-color: maroon;
            color: white;
        }
        .highlight {
            background-color: maroon !important;
            color: black;
        }
        #result {
            text-align: center;
            font-size: 22px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
    <script>
        function highlightCell(cell, row, col) {
            // Hapus highlight dari semua sel
            var cells = document.querySelectorAll('td');
            cells.forEach(function(c) {
                c.classList.remove('highlight');
            });

            // Tambahkan highlight ke sel yang diklik
            cell.classList.add('highlight');

            // Tampilkan hasil
            var result = document.getElementById('result');
            result.innerHTML = "Hasil: " + row + " x " + col + " = " + (row * col);
        }
    </script>
</head>
<body>

<h2 style="text-align: center;">Tabel Perkalian</h2>
<table>
    <tr>
        <th>x</th>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <th><?php echo $i; ?></th>
        <?php endfor; ?>
    </tr>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr>
            <th><?php echo $i; ?></th>
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <td onclick="highlightCell(this, <?php echo $i; ?>, <?php echo $j; ?>)">
                    <?php echo $i * $j; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<div id="result">Hasil: </div>

</body>
</html>
