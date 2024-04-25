<?php
    session_start();
    include '../Helper/DataBase.php';
    $emailValue = $_POST['email'];
    $passwordValue = $_POST['password'];
    $email = "";
    $pass = "";
    $sql = "select email, password from emp where email = '$emailValue' AND password='$passwordValue'";
    $result = mysqli_query($conn,$sql);
    if($emailValue!="" && $passwordValue!=""){
        while($row = $result->fetch_assoc()){
            $email = $row['email'];
            $pass =  $row['password'];
            if($_POST['email'] == $email && $_POST['password'] == $pass ){
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['email'] = $email;
                echo "<script>window.location.href='../HTML/index.php'</script>";
            }
        }
    }
    else if($emailValue!=$email){
        echo "<script>
        alert('Please Enter Correct Email');
        window.location.href='../Login.php';
        </script>";
    }
    else if($passwordValue!=$pass){
        echo "<script>
        alert('Please Enter Correct Password');
        window.location.href='../Login.php';
        </script>";
    }
    else{
        echo "<script>
            alert('Please Enter Email and Password ');
            window.location.href='../Login.php';
            </script>";
    }
?>