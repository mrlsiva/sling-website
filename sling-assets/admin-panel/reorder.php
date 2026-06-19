<?php
//reorder.php
require_once('auth.php');
require_admin_login_ajax();
include('Dbconfig.php');
header('Content-Type: application/json');

$ids = $_POST['image_ids'] ?? [];

if (!is_array($ids) || empty($ids)) {
    echo json_encode(['success' => false, 'message' => 'No image order provided']);
    exit;
}

$statement = $connect->prepare("UPDATE tbl_image SET sort_order = ? WHERE image_id = ?");
$order = 1;
foreach ($ids as $image_id) {
    $statement->execute([$order, (int)$image_id]);
    $order++;
}

echo json_encode(['success' => true]);
