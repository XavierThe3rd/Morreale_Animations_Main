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
        $removeFile = 'uploads/img1';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img1";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 

    if (isset($_POST['submit2'])) {
        $file = $_FILES['file2'];

        $fileName = $_FILES['file2']['name'];
        $fileTmpName = $_FILES['file2']['tmp_name'];
        $fileSize = $_FILES['file2']['size'];
        $fileError = $_FILES['file2']['error'];
        $fileType = $_FILES['file2']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img2';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img2";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 

    if (isset($_POST['submit3'])) {
        $file = $_FILES['file3'];

        $fileName = $_FILES['file3']['name'];
        $fileTmpName = $_FILES['file3']['tmp_name'];
        $fileSize = $_FILES['file3']['size'];
        $fileError = $_FILES['file3']['error'];
        $fileType = $_FILES['file3']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img3';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img3";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 



    if (isset($_POST['submit4'])) {
        $file = $_FILES['file4'];

        $fileName = $_FILES['file4']['name'];
        $fileTmpName = $_FILES['file4']['tmp_name'];
        $fileSize = $_FILES['file4']['size'];
        $fileError = $_FILES['file4']['error'];
        $fileType = $_FILES['file4']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img4';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img4";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 

    if (isset($_POST['submit5'])) {
        $file = $_FILES['file5'];

        $fileName = $_FILES['file5']['name'];
        $fileTmpName = $_FILES['file5']['tmp_name'];
        $fileSize = $_FILES['file5']['size'];
        $fileError = $_FILES['file5']['error'];
        $fileType = $_FILES['file5']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img5';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img5";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 

    if (isset($_POST['submit6'])) {
        $file = $_FILES['file6'];

        $fileName = $_FILES['file6']['name'];
        $fileTmpName = $_FILES['file6']['tmp_name'];
        $fileSize = $_FILES['file6']['size'];
        $fileError = $_FILES['file6']['error'];
        $fileType = $_FILES['file6']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img6';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img6";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 



    if (isset($_POST['submit7'])) {
        $file = $_FILES['file7'];

        $fileName = $_FILES['file7']['name'];
        $fileTmpName = $_FILES['file7']['tmp_name'];
        $fileSize = $_FILES['file7']['size'];
        $fileError = $_FILES['file7']['error'];
        $fileType = $_FILES['file7']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img7';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img7";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 

    if (isset($_POST['submit8'])) {
        $file = $_FILES['file8'];

        $fileName = $_FILES['file8']['name'];
        $fileTmpName = $_FILES['file8']['tmp_name'];
        $fileSize = $_FILES['file8']['size'];
        $fileError = $_FILES['file8']['error'];
        $fileType = $_FILES['file8']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img8';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img8";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 

    if (isset($_POST['submit9'])) {
        $file = $_FILES['file9'];

        $fileName = $_FILES['file9']['name'];
        $fileTmpName = $_FILES['file9']['tmp_name'];
        $fileSize = $_FILES['file9']['size'];
        $fileError = $_FILES['file9']['error'];
        $fileType = $_FILES['file9']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/img9';

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000){
                    unlink($removeFile);
                    $fileNameNew = "img9";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 



    if (isset($_POST['submit10'])) {
        $file = $_FILES['file10'];

        $fileName = $_FILES['file10']['name'];
        $fileTmpName = $_FILES['file10']['tmp_name'];
        $fileSize = $_FILES['file10']['size'];
        $fileError = $_FILES['file10']['error'];
        $fileType = $_FILES['file10']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/vid1';

        $allowed = array('mp4');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000000){
                    unlink($removeFile);
                    $fileNameNew = "vid1";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 

    if (isset($_POST['submit11'])) {
        $file = $_FILES['file11'];

        $fileName = $_FILES['file11']['name'];
        $fileTmpName = $_FILES['file11']['tmp_name'];
        $fileSize = $_FILES['file11']['size'];
        $fileError = $_FILES['file11']['error'];
        $fileType = $_FILES['file11']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $removeFile = 'uploads/vid2';

        $allowed = array('mp4');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000000){
                    unlink($removeFile);
                    $fileNameNew = "vid2";
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");
                } else{
                    echo "file is too big";
                }
            } else {
                echo "there was an error uploading file";
            }
        } else {
            echo "cannot upload files of this type";
        }
    } 