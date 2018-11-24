<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload with PHP</title>
</head>
<body>
    <form action="php/fileUpload.php" method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="foto" id="fileToUpload">
        <input type="text" name="fotoName" id="fotoId">
        <input type="submit" name="submit" value="Upload File Now" >
    </form>
</body>
</html>