<?php
require_once 'Dbconfig.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$id = $_POST['id'] ?? '';
$status = $_POST['status'] ?? '';

// Validate inputs
if (empty($id) || empty($status)) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

if (!in_array($status, ['new', 'contacted', 'closed'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid status']);
    exit;
}

try {
    $sql = "UPDATE enquiries SET status = ? WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $result = $stmt->execute([$status, $id]);
    
    if ($result && $stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Status updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'No record found or no changes made']);
    }
    
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error updating status: ' . $e->getMessage()]);
}
?>