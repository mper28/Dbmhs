<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Kontrak Mahasiswa</title>
</head>
<body>
<h1>Edit Kontrak Mahasiswa</h1>
<a href="kontrak.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>Matakuliah_ID</label><br>
<input type="number" name="mk_id" value="<?php echo $data->mk_id ?>"><br>
<label>Nama</label><br>
<input type="text" name="nama" value="<?php echo $data->nama ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>