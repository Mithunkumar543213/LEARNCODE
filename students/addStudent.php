<?php
header('Content-Type: application/json'); 

if(!isset($_SESSION)){
    session_start();
}

include_once('../dbConnection.php');

header('Content-Type: application/json'); // Ensure JSON output

error_reporting(E_ALL);
ini_set('display_errors', 1);

// **Fix: Clear output buffer to prevent unwanted output**
ob_clean();
flush();

$response = [];
$emailreponce = [];

//cheking email already registered or not

if(isset($_POST['checkemail']) && isset($_POST['stuemail'])) {
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_Email FROM sturegistration WHERE stu_Email = '$stuemail'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
    
    // if ($result->num_rows > 0) {
    //     echo json_encode(["exists" => true]);
    // } else {
    //     echo json_encode(["exists" => false]);
    // }
    $conn->close();
    exit();
}



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
            echo json_encode($response);
            exit();
        } else {
            $response = ["error" => "Database Insert Failed: " . $conn->error];
            echo json_encode($response);
            $conn->close();
            exit();
        }
    }
}   

if(!isset($_SESSION['is_login'])){
if(isset($_POST['checkLogEmail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){
    $stuemail = $_POST['stuLogEmail'];
    $stupass = $_POST['stuLogPass'];

    $sql = "SELECT * FROM sturegistration WHERE stu_Email = '$stuemail' AND stu_pass = '$stupass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $response = ["status" => "OK"];
        $_SESSION['is_login'] = true;
        $_SESSION['stuLogEmail'] = $stuemail;
        echo json_encode($response);

        exit();
    }else if($result->num_rows == 0){
        $response = ["error" => "Not Found"];
        echo json_encode($response);
        $conn->close();
        exit();
    } 
    else {
        $response = ["error" => "Invalid"];
        echo json_encode($response);
        $conn->close();
        exit();
    }
} else {
    $response = ["error" => "Fill All Field"];
    echo json_encode($response);
    $conn->close();
    exit();
}
}

?>
