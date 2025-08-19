<?php
include("connection.php");

if (isset($_POST["submit"])) {
    $firstname   = $_POST["firstname"];
    $surname     = $_POST["surname"];
    $socialmedia = $_POST["socialmedia"];
    $username    = $_POST["username"];
    $phonenumber = $_POST["phonenumber"];

    // Correct SQL query
    $sql = "INSERT INTO attendance (firstname, surname, socialmedia, username, phonenumber) 
            VALUES ('$firstname', '$surname', '$socialmedia', '$username', '$phonenumber')";
    
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "Your registration was successfully received!";
    } else {
        echo "Registration failed: " . mysqli_error($connect);
    }
}
?>
