<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms, File upload</title>
</head>
<html>

<body>
    <h1> File Upload</h1>
    <?php
    print_r($_FILES);
    // file download logic
    if (isset($_POST['download'])) {
        // print('Path to download: ' . './' . $_GET["path"] . $_POST['download']);
        $file = './' . $_POST['download'];
        // a&nbsp;b.txt --> a b.txt
        $fileToDownloadEscaped = str_replace("&nbsp;", " ", htmlentities($file, null, 'utf-8'));

        ob_clean();
        ob_start();
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf'); // mime type → ši forma turėtų veikti daugumai failų, su šiuo mime type. Jei neveiktų reiktų daryti sudėtingesnę logiką
        header('Content-Disposition: attachment; filename=' . basename($fileToDownloadEscaped));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fileToDownloadEscaped)); // kiek baitų browseriui laukti, jei 0 - failas neveiks nors bus sukurtas
        ob_end_flush();

        readfile($fileToDownloadEscaped);
        exit;
    }
    // file upload logic
    if (isset($_FILES['image'])) {
        $errors = array();

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        // check extension (and only permit jpegs, jpgs and pngs)
        $file_ext = strtolower(end(explode('.', $_FILES['image']['name']))); // telia_bill.PDF --> 'telia_bill', 'PDF' --> 'pdf'
        $extensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "./" . $path . $file_name);
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
        <li>File type: <?php echo $_FILES['image']['type']   ?>
    </ul>

    <?php
    $dir_contents = scandir('./');
    foreach ($dir_contents as $content) {
        if (is_file($content)) {
            print('<form action="?path=' . $content . '" method="POST">');
            print('<input type="submit" name="download" value="' . $content . '"/>');
            print('</form>');
        }
    }
    ?>

    <h2>Examples: </h2>
    <div>
        <a href="fileUploadExample1.php">
            <button>File Upload Example #1</button>
        </a>
    </div>
    <br>
    <div>
        <a href="fileUploadExample2.php">
            <button>File Upload Example #2</button>
        </a>
    </div>
</body>

</html>