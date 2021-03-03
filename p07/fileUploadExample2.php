<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <h1>File Upload example #2</h1>
    <?php
    // print_r($_FILES);
    if (isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        // check extension (and only permit jpegs, jpgs and pngs)
        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
        $extensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'File size must be smaller than 2 MB';
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "./" . $file_name);
            echo "Success";
        } else {
            print_r($errors);
        }
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="submit" />
    </form>
    <ul>
        <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
        <li>File size: <?php echo $_FILES['image']['size'];  ?>
        <li>File type: <?php echo $_FILES['image']['type'] ?>
    </ul>

</body>

</html>