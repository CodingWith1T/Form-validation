<?php
  session_start();
  if(!isset($_SESSION['login']) || $_SESSION['login']!= true ){
    echo "<script>alert('Login First for Use');
    window.location.href='../Login.php'</script>";
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <?php require("../Components/Navbar.php"); ?>
        <div class="container my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Phone</th>
                        <th scope="col">City</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
        include("../Helper/DataBase.php");
        $sql = "Select * from emp";
        $result = mysqli_query($conn,$sql);
        foreach($result as $row){
            echo "<tr class='table-secondary '>
            <th scope='row'>".$row['id']."</th>"
            ."<td>".$row['name']."</td>"
            ."<td>".$row['email']."</td>"
            ."<td>".$row['password']."</td>"
            ."<td>".$row['phone']."</td>"
            ."<td>".$row['city']."</td>"
            ."<td><a name='Delete' href=./user-Delete.php?user_id=".$row['id']."><i class='fa-solid fa-trash'></i></a></td>"
            ."<td><a href=./user-Edit.php?user_id=".$row['id']."><i class='fa-regular fa-pen-to-square'></i></a></td>";  
        }
    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h1><?php $_SESSION['email'] ?></h1>
</body>

</html>