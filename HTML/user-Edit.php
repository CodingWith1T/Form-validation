<?php 
include "../Helper/DataBase.php";
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
    <title>User | Edit </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <?php include("../Components/Navbar.php"); ?>

        <section class="content my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Edit - Registered User
                                </h3>
                                <a href="./User.php" class="btn btn-danger btn-sm float-right">Back</a>
                            </div>
                            <!-- Card -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="../Handler/Edit.php" name="myForm" method="POST">
                                            <?php  
                                            if(isset($_GET['user_id'])){
                                                include "../Helper/DataBase.php";
                                                $user_id = $_GET['user_id'];
                                                $query = "SELECT * FROM EMP WHERE id = '$user_id' LIMIT 1";
                                                $result = mysqli_query($conn,$query);
                                                if(mysqli_num_rows($result)>0){
                                                    foreach ($result as $row) {
                                                       ?>
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <input type="text" value="<?php echo $row['id'] ?>" name="id" class="form-control" />
                                                        <label class="form-label">Id</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control" />
                                                        <label class="form-label">Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-outline mb-4">
                                                    <div data-mdb-input-init class="form-outline">
                                                        <input type="tel" value="<?php echo $row['phone'] ?>" name="phone" class="form-control" />
                                                        <label class="form-label">Phone</label>
                                                    </div>
                                                </div>
                                            <!-- Email input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="email" name="email" value="<?php echo $row['email'] ?>" id="email" class="form-control" />
                                                <label class="form-label">Email address</label>
                                            </div>

                                            <!-- Password input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="text" value="<?php echo $row['password'] ?>" name="password" id="password"
                                                    class="form-control" />
                                                <label class="form-label">Password</label>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="text" name="city" value="<?php echo $row['city'] ?>" id="city" class="form-control" />
                                                <label class="form-label">City</label>
                                            </div>

                                            <?php
                                                    }
                                                }
                                                else {
                                                    echo "<h1>No Record Found</h1>";
                                                }
                                            }
                                            ?>
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <!-- Submit button -->
                                            <button name="updateUser" class="btn btn-primary btn-block mb-4">
                                                Update
                                            </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

</body>

</html>