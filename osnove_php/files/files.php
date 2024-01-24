<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload files</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="picture"> Picture:</label>
        <input type="file" name="picture" />
        <input type="submit" value="Send" />
    </form>
    <?php
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/osnove_php/files/pictures/';
    $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
    echo "<pre>";
    echo 'DOCUMENT_ROOT: '.$_SERVER['DOCUMENT_ROOT'].PHP_EOL;
    if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack";
    }
    echo "</pre>";; ?>
</body>

</html>