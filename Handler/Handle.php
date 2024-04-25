<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        include '../Helper/DataBase.php';
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        echo $country = $_POST['country'];
        echo $state = $_POST['state'];
        echo $city = $_POST['city'];
        
        echo $radio = $_POST['radio'];

        //Check  Whether email is Exists
        $existsSql = "SELECT * FROM `emp` WHERE email='$email'";
        $result = mysqli_query($conn, $existsSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            echo "<script>alert('Email is Already Exists');</script>";
        }
        else{
            $sql = "INSERT INTO `emp` (`name`, `email`, `password`, `phone`, `country`, `state`, `city`) VALUES ('$name', '$email', '$password', '$phone',  '$country','$state','$city')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
            echo "<script>alert('SignIn Successful please login for Further.');
            window.location.href='../login.php'</script>";   
            }
        }
    }
?>











