<?php
include_once('../dbConnection.php');

header('Content-Type: application/json'); // Ensure JSON output
error_reporting(E_ALL);
ini_set('display_errors', 1);

// **Fix: Clear output buffer to prevent unwanted output**
ob_clean();
flush();

$response = [];

if(isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupassword']) && isset($_POST['stuconfPass'])) {
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupassword'];
    $stuconfPass = $_POST['stuconfPass'];

    if ($stupass !== $stuconfPass) {
        $response = ["error" => "Passwords do not match"];
    } else {
        $sql = "INSERT INTO sturegistration (stu_Name, stu_Email, stu_pass) VALUES ('$stuname', '$stuemail', '$stupass')";

        if ($conn->query($sql) === TRUE) {
            $response = ["status" => "OK"];
        } else {
            $response = ["error" => "Database Insert Failed: " . $conn->error];
        }
    }
} else {
    $response = ["error" => "Fill All Fields"];
}

// **Fix: Encode and exit**
echo json_encode($response);
exit();

$conn->close();
?>
