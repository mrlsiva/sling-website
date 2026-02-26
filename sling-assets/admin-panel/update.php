<?php
//update.php

include('Dbconfig.php');

if(isset($_POST["image_id"]))
{
 $old_name = get_old_image_name($connect, $_POST["image_id"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["image_name"] . '.' . $file_extension;
 $query = '';
 
 // Check if a replacement image is uploaded
 if(isset($_FILES["replacement_image"]) && $_FILES["replacement_image"]["error"] == 0)
 {
  $upload_file = $_FILES["replacement_image"]["tmp_name"];
  $upload_name = $_FILES["replacement_image"]["name"];
  $upload_array = explode(".", $upload_name);
  $upload_extension = strtolower(end($upload_array));
  
  // Validate file extension
  $allowed_extensions = array("jpg", "jpeg", "png", "gif", "webp");
  if(in_array($upload_extension, $allowed_extensions))
  {
   // Validate file size (2MB limit)
   if($_FILES["replacement_image"]["size"] <= 2000000)
   {
    $new_name = $_POST["image_name"] . '.' . $upload_extension;
    $upload_path = 'files/' . $new_name;
    
    // Delete old image file
    $old_path = 'files/' . $old_name;
    if(file_exists($old_path))
    {
     unlink($old_path);
    }
    
    // Upload new image
    if(move_uploaded_file($upload_file, $upload_path))
    {
     $query = "
     UPDATE tbl_image 
     SET image_name = '".$new_name."', image_description = '".$_POST["image_description"]."', price = '".$_POST["price"]."', ProductName = '".$_POST["ProductName"]."'
     WHERE image_id = '".$_POST["image_id"]."'
     ";
    }
    else
    {
     echo "Error uploading file.";
     exit;
    }
   }
   else
   {
    echo "File size too large. Maximum 2MB allowed.";
    exit;
   }
  }
  else
  {
   echo "Invalid file type. Only JPG, JPEG, PNG, GIF, and WebP files are allowed.";
   exit;
  }
 }
 else
 {
  // No replacement image, just update metadata and/or rename existing file
  if($old_name != $new_name)
  {
   $old_path = 'files/' . $old_name;
   $new_path = 'files/' . $new_name;
   if(rename($old_path, $new_path))
   { 
    $query = "
    UPDATE tbl_image 
    SET image_name = '".$new_name."', image_description = '".$_POST["image_description"]."', price = '".$_POST["price"]."', ProductName = '".$_POST["ProductName"]."'
    WHERE image_id = '".$_POST["image_id"]."'
    ";
   }
  }
  else
  {
   $query = "
    UPDATE tbl_image 
    SET image_description = '".$_POST["image_description"]."', price = '".$_POST["price"]."', ProductName = '".$_POST["ProductName"]."'
    WHERE image_id = '".$_POST["image_id"]."'
    ";
  }
 }
 
 if(!empty($query))
 {
  $statement = $connect->prepare($query);
  $statement->execute();
  echo "success";
 }
}
function get_old_image_name($connect, $image_id)
{
 $query = "
 SELECT image_name FROM tbl_image WHERE image_id = '".$image_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image_name"];
 }
}

?>