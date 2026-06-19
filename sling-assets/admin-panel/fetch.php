<?php
require_once('auth.php');
require_admin_login_ajax();
include('Dbconfig.php');
$query = "SELECT * FROM tbl_image ORDER BY sort_order ASC, image_id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$number_of_rows = $statement->rowCount();
$doc_root = str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'], '/\\'));
$admin_dir = str_replace('\\', '/', __DIR__);
$files_base = '/' . trim(str_replace($doc_root, '', $admin_dir), '/') . '/files/';
$output = '';
$output .= '
 <table class="table table-bordered table-striped">
  <thead>
  <tr>
   <th>Order</th>
   <th>Sr. No</th>
   <th>Project Image</th>
   <th>Project Name</th>
   <th>Link</th>
   <th>Description</th>
   <th>Status</th>
   <th>Edit</th>
   <th>Delete</th>
  </tr>
  </thead>
  <tbody>
';
if($number_of_rows > 0)
{
 $count = 0;
 foreach($result as $row)
 {
  $count ++;
  $is_enabled = $row["status"] === 'enabled';
  $output .= '
  <tr data-image_id="'.$row["image_id"].'">
   <td class="drag-handle text-center"><i class="glyphicon glyphicon-resize-vertical"></i></td>
   <td class="sr-no">'.$count.'</td>
   <td><img src="'.$files_base.$row["image_name"].'" class="img-thumbnail" width="100" height="100" /></td>
   <td>'.$row["ProductName"].'</td>
   <td>'.$row["price"].'</td>
   <td>'.$row["image_description"].'</td>
   <td><button type="button" class="btn btn-xs btn-toggle-status '.($is_enabled ? 'btn-success' : 'btn-default').'" id="'.$row["image_id"].'">'.($is_enabled ? 'Enabled' : 'Disabled').'</button></td>
   <td><button type="button" class="btn btn-warning btn-xs edit" id="'.$row["image_id"].'">Edit</button></td>
   <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$row["image_id"].'" data-image_name="'.$row["image_name"].'">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="9" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</tbody></table>';
echo $output;
?>