<?php
include '../../db.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "UPDATE customers set verification_status=1 where email='$email'";
    if ($conn->query($sql) === TRUE) {
        echo "true";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
