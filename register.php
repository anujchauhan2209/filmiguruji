<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = ""; // set your db password
$db = "filmiguruji"; // set your db name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["status"=>"error","msg"=>"Database connection failed"]);
    exit;
}

// Update payment after Razorpay success
if (isset($_POST['update_payment']) && $_POST['update_payment'] == 1) {
    $registration_id = intval($_POST['registration_id']);
    $razorpay_payment_id = $conn->real_escape_string($_POST['razorpay_payment_id'] ?? '');
    if ($registration_id && $razorpay_payment_id) {
        $sql = "UPDATE registrations SET razorpay_payment_id='$razorpay_payment_id', payment_status='success' WHERE id=$registration_id";
        if ($conn->query($sql) === TRUE) {
            echo "success";
        } else {
            http_response_code(500);
            echo "Database update error";
        }
    } else {
        http_response_code(400);
        echo "Missing registration_id or payment_id";
    }
    $conn->close();
    exit;
}

// New registration (pending)
$first_name = isset($_POST['first_name']) ? $conn->real_escape_string($_POST['first_name']) : '';
$last_name = isset($_POST['last_name']) ? $conn->real_escape_string($_POST['last_name']) : '';
$whatsapp = isset($_POST['whatsapp']) ? $conn->real_escape_string($_POST['whatsapp']) : '';
$email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';

if (!$first_name || !$last_name || !$whatsapp || !$email) {
    http_response_code(400);
    echo json_encode(["status"=>"error","msg"=>"Missing required fields"]);
    exit;
}

// Insert as pending, return registration_id
$sql = "INSERT INTO registrations (first_name, last_name, whatsapp, email, payment_status, created_at)
        VALUES ('$first_name', '$last_name', '$whatsapp', '$email', 'pending', NOW())";
if ($conn->query($sql) === TRUE) {
    $registration_id = $conn->insert_id;
    echo json_encode(["status"=>"pending", "registration_id"=>$registration_id]);
} else {
    http_response_code(500);
    echo json_encode(["status"=>"error","msg"=>"Database insert error"]);
}
$conn->close();
?>
