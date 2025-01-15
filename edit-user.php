<?php
include("php/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $phoneNumber = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $query = "UPDATE users SET Username=?, Email=?, date=?, Phonenumber=?, Gender=?, Country=? WHERE Id=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'sssssssi', $username, $email, $date, $phoneNumber, $gender, $country, $id);
    $success = mysqli_stmt_execute($stmt);
    if ($success) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("success" => false, "error" => mysqli_error($con)));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
    exit();
} else {
    echo json_encode(array("success" => false, "error" => "Invalid request method"));
}
