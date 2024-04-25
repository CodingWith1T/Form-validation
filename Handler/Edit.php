<?php
    include '../Helper/DataBase.php';
        if(isset($_POST['updateUser'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $query = "UPDATE emp SET name='$name', email='$email', password='$password', phone='$phone', city='$city' WHERE id='$id'";
            $result = mysqli_query($conn,$query);
            if ($result) {
                    $_SESSION['status']= "Update User SuccessFully";
                    header("Location: ../HTML/User.php");
                    } 
                }
                else {
                    $_SESSION['status']= "Update User Failed";
                    header("Location: ../HTML/User.php");
             }
    
?>