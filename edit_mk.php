<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Matakuliah</title>
</head>
<body>
<h1>Edit Matakuliah</h1>
<a href="matakuliah.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>NIM</label><br>
<input type="number" name="nim" value="<?php echo $data->nim ?>"><br>
<label>Nama MK</label><br>
<input type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>