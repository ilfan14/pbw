<!DOCTYPE html>
<html>
<head>
	<title>
		Upload File
	</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
	Upload File : <br><input type="File" name="file"><br>
	Deskripsi File : <br><textarea name="deskripsi" rows="8" cols="40"></textarea>
	<input type="submit" name="upload" value="Unggah">
</form>

</body>
</html>