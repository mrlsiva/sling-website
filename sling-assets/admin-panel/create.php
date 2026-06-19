<?php
//create.php

require_once('auth.php');
require_admin_login_ajax();
include('Dbconfig.php');

if(!isset($_FILES["image"]) || $_FILES["image"]["error"] != 0)
{
 echo "Image is required.";
 exit;
}

$file_name = $_FILES["image"]["name"];
$tmp_name = $_FILES["image"]["tmp_name"];
$file_array = explode(".", $file_name);
$file_extension = strtolower(end($file_array));

$allowed_extensions = array("jpg", "jpeg", "png", "gif", "webp");
if(!in_array($file_extension, $allowed_extensions))
{
 echo "Invalid file type. Only JPG, JPEG, PNG, GIF, and WebP files are allowed.";
 exit;
}

if($_FILES["image"]["size"] > 2000000)
{
 echo "File size too large. Maximum 2MB allowed.";
 exit;
}

if(file_already_uploaded($file_name, $connect))
{
 $file_name = $file_array[0] . '-' . rand() . '.' . $file_extension;
}

$location = 'files/' . $file_name;
if(!move_uploaded_file($tmp_name, $location))
{
 echo "Error uploading file.";
 exit;
}

$next_order = (int)$connect->query("SELECT COALESCE(MAX(sort_order), 0) + 1 FROM tbl_image")->fetchColumn();

$query = "
INSERT INTO tbl_image (image_name, ProductName, price, image_description, sort_order)
VALUES (?, ?, ?, ?, ?)
";
$statement = $connect->prepare($query);
$statement->execute([
 $file_name,
 $_POST["ProductName"] ?? '',
 $_POST["price"] ?? 0,
 $_POST["image_description"] ?? '',
 $next_order
]);

echo "success";

function file_already_uploaded($file_name, $connect)
{
 $query = "SELECT * FROM tbl_image WHERE image_name = ?";
 $statement = $connect->prepare($query);
 $statement->execute([$file_name]);
 return $statement->rowCount() > 0;
}
?>
