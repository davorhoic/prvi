<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload files</title>
</head>

<body>
    <form action="obrada.php" method="post" enctype="multipart/form-data">
        <label for="picture"> Picture:</label>
        <input type="file" name="picture" />
        <input type="submit" value="Send" />
    </form>
</body>

</html>