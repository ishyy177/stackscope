<?php

require_once "db.php";


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
   
    if(empty($name) && empty($email) && empty($phone)){
        header("Location: ../index.php?emptyfields");
    } else{
        $sql = "INSERT INTO applications (uname, email, phone) VALUES ('$name', '$email', '$phone')";

        if(mysqli_query($conn, $sql)){
            header("Location: ../index.php?insertedsuccessfully");
        } else {
            echo "error:" . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);

        header("Location: ../index.php?success=complete");
    }
    
}


