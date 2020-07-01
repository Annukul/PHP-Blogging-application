<?php
require './inc/config.php';
require './inc/db.php';

// Upload an image
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($POST["submit"])) {
    $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
    } else {
        echo "File is not an image";
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["imageUpload"]["size"] > 500000) {
    echo "Sorry, file is too large.";
    $uploadOk = 0;
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIFs are allowed.";
    $uploadOk = 0;
}

// Check for $uploadOk is 0 or 1
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["imageUpload"]["temp_name"], $target_file)) {
        echo "The file " . basename($_FILES["imageUpload"]["name"]) . "has been uploaded.";
    } else {
        "Sorry, there was an error uploading ypur file.";
    }
}
