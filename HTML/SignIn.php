<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <!-- Section: Design Block -->
        <section class="">
            <!-- Jumbotron -->
            <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
                <div class="container">
                    <div class="row gx-lg-5 align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <h1 class="my-5 display-3 fw-bold ls-tight">
                                Register Here<br />
                                <span class="text-primary"> for your business</span>
                            </h1>
                            <p style="color: hsl(217, 10%, 50.8%)">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                                quibusdam tempora at cupiditate quis eum maiores libero
                                veritatis? Dicta facilis sint aliquid ipsum atque?
                            </p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="card">
                                <div class="card-body py-5 px-md-5">
                                    <form action="../Handler/Save.php" name="myForm" method="POST">
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" name="name" class="form-control" required />
                                                    <label class="form-label">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="tel" name="phone" class="form-control" required />
                                                    <label class="form-label">Phone</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control" required />
                                            <label class="form-label">Email address</label>
                                        </div>

                                        <!-- Password input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" name="password" id="password" class="form-control"
                                                required />
                                            <label class="form-label">Password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="col-sm-2">Gender : </label>
                                            <input type="radio" id="male" name="gender" value="male" class="gender-radio">
                                            <label for="male">Male</label>

                                            <input type="radio" id="male" name="gender" value="female" class="gender-radio">
                                            <label for="male">Female</label>

                                            <input type="radio" id="male" name="gender" value="other" class="gender-radio">
                                            <label for="male">Other</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <select class="form-select country" name="country"
                                                aria-label="Default select example" onchange="loadStates()">
                                                <option selected="selected">Select Country</option>
                                            </select>
                                            <select class="form-select state" name="state"
                                                aria-label="Default select example" onchange="loadCities()">
                                                <option selected="selected">Select State</option>
                                            </select>
                                            <select class="form-select city" name="city"
                                                aria-label="Default select example">
                                                <option selected="selected">Select City</option>
                                            </select>
                                        </div>
                                        <!-- Submit button -->
                                        <button class="btn btn-primary btn-block mb-4">
                                            Submit
                                        </button>

                                        <!-- Register buttons -->
                                        <div class="text-center">
                                            <a href="../login.php">Log In with :</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->
    </div>
    <script src="../Assets/Js/app.js">
    </script>
    <script>
    console.log("This is Login Validation")
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    email.addEventListener('blur', () => {
        // console.log("Email is Blured")
        // Validate Email Here
        let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        let str = email.value;
        // console.log(regex,str);
        if (regex.test(str)) {
            console.log('it Valid');
        } else {
            console.log('Not Valid');
            alert("Not Valid");

        }
    })
    </script>
</body>

</html>
