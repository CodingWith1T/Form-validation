<?php
    include "../Helper/DataBase.php";
    $id = $_GET['user_id'];
    echo $id; 
    session_start();
    $admin = "abhishekraghav111@gmail.com"; 
    if($admin == $_SESSION['email']){
        $query = " DELETE FROM emp WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
            echo "<script>alert('Record Delete Successfully')</script>";
            header("Location: ../HTML/User.php");
        }
    else {
        echo '<script>alert("You are not Admin User")</script>';
        header("Location: ../HTML/User.php");
    }
?>