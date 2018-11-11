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
        $sql = "INSERT INTO getintouch (Name, Email, Subject, Location, Message)
        VALUES ('$name','$email','$subject','$location','$message')";
        if (mysqli_query($conn, $sql)) {
            ?>
            <script>alert("Success");</script>
            <?php
            header("Location: ./");
        } 
        else {
            echo("Error description: " . mysqli_error($conn));
        }

    }
?>