<?php
$target_dir = "documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".  <br>";
    $uploadOk = 1;
  } else {
    echo "PDF file <br>";
  }
}

// If file is already present in documents directory.
if (file_exists($target_file)) {
  echo "File already exists  <br>";
  $uploadOk = 0;
}

// We are allowing only pdf and png file formats
if (
  $imageFileType != "pdf" && $imageFileType != "png"
) {
  echo "Only pdf and png files are allowed <br>";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Documents could not be uploaded <br>";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.  <br>";
  } else {
    echo "Error <br>";
  }
}