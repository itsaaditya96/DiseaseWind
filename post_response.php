<?php
    include 'getpostdb.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO responses (Name, Email, Subject, Location, Message)
        VALUES ('$name','$email','$subject','$location','$message')";
        if (mysqli_query($conn, $sql)) {
            header("Location: ./");
        } 
        else {
            echo("Error description: " . mysqli_error($conn));
        }
    }
?>