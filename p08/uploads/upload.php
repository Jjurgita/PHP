<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf'); // allow inside app

    // ar allowed failai yra $fileActualExt
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../upload/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header('Location; index.php?success');
            } else {
                echo "File is too big";
            }
        } else {
            echo "There was an error uploading file.";
        }
    } else {
        echo "Cannot upload files of this type.";
    }
}
