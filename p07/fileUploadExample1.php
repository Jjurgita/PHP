<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>

<body>
    <h1>File Upload example #1</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="submit" />
    </form>

    <?php
    print('<pre>');
    print_r($_FILES['image']);
    print_r($_FILES['image']['name']);
    print('</pre>');

    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        move_uploaded_file($file_tmp, "./" . $file_name);
        echo "Success";
    }
    ?>


</body>

</html>