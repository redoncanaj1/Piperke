<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buy.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Shortcut icon" type="image/png" href="img/fav.ico">
    <title>Rezervo</title>
</head>

<body>
    <?php require "db_config.php" ?>
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
            <img src="img/logo.PNG" class="logo" id="logo">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class=" collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="produktet.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="logout.php">Log Out</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>


            </div>
        </div>

    </nav>
    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $conn = new mysqli("localhost", "root", "", "piperke");
        // Retrieve form data
        $firstName = $_POST['name'];
        $lastName = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $comment = $_POST['comment'];

        // Sanitize the data (optional)
        $firstName = mysqli_real_escape_string($conn, $firstName);
        $lastName = mysqli_real_escape_string($conn, $lastName);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $address = mysqli_real_escape_string($conn, $address);
        $comment = mysqli_real_escape_string($conn, $comment);

        // Insert data into the database
        $sql = "INSERT INTO buy (name, surname, email, phone, address, comment)
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$address', '$comment')";

        if ($conn->query($sql))
            echo "Form data inserted successfully.";

        $conn->close();
    }
    ?>
    <form class="form-style-1" method="POST" action="">
        <ul class="form-style-1">
            <li><label>Full Name <span class="required">*</span></label>
                <input type="text" name="name" class="field-divided" placeholder="First" required />
                <input type="text" name="surname" class="field-divided" placeholder="Last" />
            </li>
            <li>
                <label>Email <span class="required">*</span></label>
                <input type="email" name="email" class="field-long" required />
            </li>
            <li>
                <label>Phone <span class="required">*</span></label>
                <input type="number" name="phone" class="field-long" required />
            </li>
            <li>
                <label>Address <span class="required">*</span></label>
                <input type="text" name="address" class="field-long" required />
            </li>

            <li>
                <label>Comment <span class="required"></span></label>
                <textarea name="comment" id="comment" class="field-long field-textarea"></textarea>
            </li>
            <li>
                <input type="submit" value="Buy it now" id="buyButton" />
            </li>
        </ul>

    </form>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
</body>

</html>