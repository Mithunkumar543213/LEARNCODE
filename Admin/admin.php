<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION)) {
    session_start();
}

include_once('../dbConnection.php');

$response = [];

if (!isset($_SESSION['isAdmin_login'])) {
    if (!empty($_POST['adminLogEmail']) && !empty($_POST['adminLogPass'])) {
        $adminEmail = $_POST['adminLogEmail'];
        $adminPass = $_POST['adminLogPass'];

        $sql = "SELECT * FROM admin WHERE admin_email = ? AND admin_pass = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $adminEmail, $adminPass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['isAdmin_login'] = true;
            $_SESSION['admin_email'] = $adminEmail;
            $response = ["status" => "OK"];
        } else {
            $response = ["error" => "Invalid"];
        }
    } else {
        $response = ["error" => "Fill All Fields"];
    }
} else {
    $response = ["error" => "Already Logged In"];
}

ob_clean(); // Clear any extra output
echo json_encode($response);
$conn->close();
exit();
?>