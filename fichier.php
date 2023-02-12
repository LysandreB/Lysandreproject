<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
<h1>Bienvenue Lysandre sur votre site</h1>
<a href="index.php">déconnexion</a>
<form action="upload.php" method="post" enctype="multipart/form-data">
<label>Image:</label>
<input type="file" id="fileImg" name="fileImg" accept="image/png, image/jpeg, image/pdf">
<input type="submit" value="Envoyer" name="sub">
</form>
</body>
</html>