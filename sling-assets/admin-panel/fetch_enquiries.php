<?php
require_once 'Dbconfig.php';
header('Content-Type: application/json');

try {
    // Build query with filters
    $sql = "SELECT * FROM enquiries WHERE 1=1";
    $params = [];
    
    if (!empty($_GET['status'])) {
        $sql .= " AND status = ?";
        $params[] = $_GET['status'];
    }
    
    if (!empty($_GET['service'])) {
        $sql .= " AND service = ?";
        $params[] = $_GET['service'];
    }
    
    $sql .= " ORDER BY created_at DESC";
    
    $stmt = $connect->prepare($sql);
    $stmt->execute($params);
    $enquiries = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Get statistics
    $statsSQL = "SELECT 
        COUNT(*) as total,
        SUM(CASE WHEN status = 'new' THEN 1 ELSE 0 END) as new,
        SUM(CASE WHEN status = 'contacted' THEN 1 ELSE 0 END) as contacted,
        SUM(CASE WHEN status = 'closed' THEN 1 ELSE 0 END) as closed
        FROM enquiries";
    
    $statsStmt = $connect->prepare($statsSQL);
    $statsStmt->execute();
    $stats = $statsStmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode([
        'success' => true,
        'enquiries' => $enquiries,
        'stats' => $stats
    ]);
    
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error fetching enquiries: ' . $e->getMessage(),
        'enquiries' => [],
        'stats' => ['total' => 0, 'new' => 0, 'contacted' => 0, 'closed' => 0]
    ]);
}
?>