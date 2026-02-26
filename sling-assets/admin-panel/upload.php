<?php
//upload.php
include('Dbconfig.php');
if(count($_FILES["file"]["name"]) > 0)
{
 //$output = '';
 sleep(3);
 for($count=0; $count<count($_FILES["file"]["name"]); $count++)
 {
  $file_name = $_FILES["file"]["name"][$count];
  $tmp_name = $_FILES["file"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = strtolower(end($file_array));
  
  // Validate file extension
  $allowed_extensions = array("jpg", "jpeg", "png", "gif", "webp");
  if(!in_array($file_extension, $allowed_extensions))
  {
   continue; // Skip this file if invalid extension
  }
  
  // Validate file size (2MB limit)
  if($_FILES["file"]["size"][$count] > 2000000)
  {
   continue; // Skip this file if too large
  }
  
  if(file_already_uploaded($file_name, $connect))
  {
   $file_name = $file_array[0] . '-'. rand() . '.' . $file_extension;
  }
  $location = 'files/' . $file_name;
  if(move_uploaded_file($tmp_name, $location))
  {
   $query = "
   INSERT INTO tbl_image (image_name, image_description) 
   VALUES ('".$file_name."', '')
   ";
   $statement = $connect->prepare($query);
   $statement->execute();
  }
 }
}

function file_already_uploaded($file_name, $connect)
{
 
 $query = "SELECT * FROM tbl_image WHERE image_name = '".$file_name."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $number_of_rows = $statement->rowCount();
 if($number_of_rows > 0)
 {
  return true;
 }
 else
 {
  return false;
 }
}

?>