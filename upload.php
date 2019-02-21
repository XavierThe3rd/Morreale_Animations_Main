<?php

$a = isset($_POST["submit1"]);
$b = isset($_POST["submit2"]);
$c = isset($_POST["submit3"]);
$d = isset($_POST["delete1"]);
$e = isset($_POST["delete2"]);
$f = isset($_POST["delete3"]);

if ($a){
    $w = 1;
}
if ($b){
    $w = 2;
}
if ($c){
    $w = 3;
}

for ($x = 1; $x <= 21; $x++) {
    $imgs = array('uploads/1', 'uploads/2', 'uploads/3', 'uploads/4', 'uploads/5', 'uploads/6', 'uploads/7', 'uploads/8', 'uploads/9', 'uploads/10', 'uploads/11', 'uploads/12', 'uploads/13', 'uploads/14', 'uploads/15', 'uploads/16', 'uploads/17', 'uploads/18', 'uploads/19', 'uploads/20', 'uploads/21');  
    foreach ($imgs as $y){
        if ($a){
            if (file_exists($y)){
                $x++;
            }
        }
        if ($d) {
            unlink($y);
            header("Location: something.php?deletesuccess");
        }
    }
    for ($u = 22; $u <= 42; $u++) {
        $imgs = array('uploads/22', 'uploads/23', 'uploads/24', 'uploads/25', 'uploads/26', 'uploads/27', 'uploads/28', 'uploads/29', 'uploads/30', 'uploads/31', 'uploads/32', 'uploads/33', 'uploads/34', 'uploads/35', 'uploads/36', 'uploads/37', 'uploads/38', 'uploads/39', 'uploads/40', 'uploads/41', 'uploads/42');
        foreach ($imgs as $v){
            if ($b){
                if (file_exists($v)){
                    $u++;
                }
            }
            if ($e) {
                unlink($v);
                header("Location: something.php?deletesuccess");
            }
        }
        for ($q = 43; $q <= 63; $q++) {
            $imgs = array('uploads/43', 'uploads/44', 'uploads/45', 'uploads/46', 'uploads/47', 'uploads/48', 'uploads/49', 'uploads/50', 'uploads/51', 'uploads/52', 'uploads/53', 'uploads/54', 'uploads/55', 'uploads/56', 'uploads/57', 'uploads/58', 'uploads/59', 'uploads/60', 'uploads/61', 'uploads/62', 'uploads/63');
            foreach ($imgs as $r){
                if ($c){
                    if (file_exists($r)){
                        $q++;
                    }
                }
                if ($f) {
                    unlink($r);
                    header("Location: something.php?deletesuccess");
                }
            }
            if ($a or $b or $c) {  
                $fileName = $_FILES["file$w"]['name'];
                $fileTmpName = $_FILES["file$w"]['tmp_name'];
                $fileSize = $_FILES["file$w"]['size'];
                $fileError = $_FILES["file$w"]['error'];
                $fileType = $_FILES["file$w"]['type'];
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpg', 'jpeg', 'png', 'pdf');
                $errors = array();
                $file = $_FILES["file$w"];                
                if (in_array($fileActualExt, $allowed) && $fileError === 0 && $fileSize < 1000000 && $x <= 21 && $u <= 42 && $q <= 63){
                    if ($a) {
                        $fileNameNew = $x;
                    }
                    if ($b) {
                        $fileNameNew = $u;
                    }
                    if ($c) {
                        $fileNameNew = $q;
                    }
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: something.php?uploadsuccess");                   
                } 
            } 
        }
    }
}  

if (!in_array($fileActualExt, $allowed)){
    array_push($errors, "cannot upload files of this type");
}
if ($fileError !== 0){
    array_push($errors, "there was an error uploading file");
}
if ($fileSize > 1000000){
    array_push($errors, "file is too big");
}
if ($x >= 22 or $u >= 43 or $q >= 64){
    array_push($errors, "To Many Cooks");
}

echo "<ul>";
foreach ($errors as $z){
    echo "<li>" .$z. "</li>";
}
echo "</ul>";