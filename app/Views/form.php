<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM INPUT DATA</h1>
    <form method="POST" action="<?php echo site_url('process-form');?>">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">Nim:</label><br>
        <input type="text" id="nim" name="nim"><br><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br><br>

        <label for="matakuliah">Mata kuliah:</label><br>
        <input type="text" id="matakuliah" name="matakuliah"><br><br>

        <label for="dosen">Dosen Pengampu:</label><br>
        <input type="text" id="dosen" name="dosen"><br><br>

        <label for="asisten">Asisten Praktikum:</label><br>
        <input type="text" id="asisten" name="asisten"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>