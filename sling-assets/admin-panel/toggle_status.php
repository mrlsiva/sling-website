<?php
//toggle_status.php

require_once('auth.php');
require_admin_login_ajax();
include('Dbconfig.php');

if(isset($_POST["image_id"]))
{
 $query = "UPDATE tbl_image SET status = IF(status = 'enabled', 'disabled', 'enabled') WHERE image_id = ?";
 $statement = $connect->prepare($query);
 $statement->execute([$_POST["image_id"]]);

 $query = "SELECT status FROM tbl_image WHERE image_id = ?";
 $statement = $connect->prepare($query);
 $statement->execute([$_POST["image_id"]]);
 $row = $statement->fetch();

 echo json_encode(['success' => true, 'status' => $row['status']]);
}
else
{
 echo json_encode(['success' => false, 'message' => 'Missing image_id']);
}
?>
