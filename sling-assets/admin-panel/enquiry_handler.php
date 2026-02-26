<?php
header('Content-Type: application/json');
require_once 'Dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

if (empty($service)) {
    $errors[] = 'Service selection is required';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields', 'errors' => $errors]);
    exit;
}

try {
    // Save to database
    $sql = "INSERT INTO enquiries (name, email, phone, company, service, message) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->execute([$name, $email, $phone, $company, $service, $message]);
    
    // Email configuration
    $to = 'slinggroups@gmail.com';
    $subject = 'New Enquiry from ' . $name . ' - ' . $service;

    // Email content
    $email_content = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: #19ad9f; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .field { margin: 10px 0; }
            .label { font-weight: bold; color: #19ad9f; }
            .footer { background: #333; color: white; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h2>New Business Enquiry</h2>
            <p>Sling Software Solutions</p>
        </div>
        
        <div class='content'>
            <div class='field'>
                <span class='label'>Name:</span> {$name}
            </div>
            
            <div class='field'>
                <span class='label'>Email:</span> {$email}
            </div>
            
            <div class='field'>
                <span class='label'>Phone:</span> {$phone}
            </div>
            
            <div class='field'>
                <span class='label'>Company:</span> " . (!empty($company) ? $company : 'Not provided') . "
            </div>
            
            <div class='field'>
                <span class='label'>Service Interested In:</span> {$service}
            </div>
            
            <div class='field'>
                <span class='label'>Message:</span><br>
                " . nl2br(htmlspecialchars($message)) . "
            </div>
            
            <div class='field'>
                <span class='label'>Submitted On:</span> " . date('Y-m-d H:i:s') . "
            </div>
        </div>
        
        <div class='footer'>
            <p>This enquiry was submitted through the Sling Software Solutions website.</p>
        </div>
    </body>
    </html>
    ";

    // Email headers
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: Sling Website <noreply@slinggroups.in>',
        'Reply-To: ' . $email,
        'X-Mailer: PHP/' . phpversion()
    ];

    // Send email
    $mail_sent = mail($to, $subject, $email_content, implode("\r\n", $headers));

    if ($mail_sent) {
        echo json_encode([
            'success' => true, 
            'message' => 'Thank you for your enquiry! We will get back to you soon.'
        ]);
    } else {
        echo json_encode([
            'success' => true, 
            'message' => 'Your enquiry has been saved! We will contact you soon.'
        ]);
    }
    
} catch(PDOException $e) {
    echo json_encode([
        'success' => false, 
        'message' => 'Sorry, there was an error processing your enquiry. Please try again or contact us directly.'
    ]);
}
?>