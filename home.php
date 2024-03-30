<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PIPERKË</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="Shortcut icon" type="image/png" href="img/fav.ico">
</head>

<body>


   
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
 *               </form>
8

            </div>
        </div>

    </nav>
    <div id="carousel" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/banner2.webp" class="d-block w-100" alt="...">
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>


    </div>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">



    <div class="hello">
        <h1>Pershendetje</h1>
        <h3>Miresevini ne faqen tone!</h3>
    </div>
    <div class="container">
        <div class="row">


           
            <div class="col-sm-3">
                <img class="card-img" src="img/fustan.jpg">
                <h5 class="card-title">
                    Fustane
                </h5>
                <p class="card-text"> Veshjet me cilesore qe mund ti gjeni vetem tek ne me cmimet me te lira ne treg.
</p>
                <button class="buy" id="buy">
    <a href="produktet.php" class="go-somewhere">Shiko produktet</a>
</button>

            </div>
           <div class="col-sm-3">
                <img class="card-img" src="img/xhinse.jpg">
                <h5 class="card-title">
                    Xhinse
                </h5>
                <p class="card-text"> Veshjet me cilesore qe mund ti gjeni vetem tek ne me cmimet me te lira ne treg.
</p>
                <button class="buy" id="buy">
    <a href="produktet.php#xhinse" class="go-somewhere">Shiko produktet</a>
</button>

            </div>
            <div class="col-sm-3">
                <img class="card-img" src="img/bluza.jpg">
                <h5 class="card-title">
                    Bluza
                </h5>
                <p class="card-text"> Veshjet me cilesore qe mund ti gjeni vetem tek ne me cmimet me te lira ne treg.
</p>
                <button class="buy" id="buy">
    <a href="produktet.php#bluza" class="go-somewhere">Shiko produktet</a>
</button>

            </div>
            <div class="col-sm-3">
                <img class="card-img" src="img/pantallona.jpg">
                <h5 class="card-title">
                    Pantallona
                </h5>
                <p class="card-text"> Veshjet me cilesore qe mund ti gjeni vetem tek ne me cmimet me te lira ne treg.
</p>
                <button class="buy" id="buy">
    <a href="produktet.php#pantallona" class="go-somewhere">Shiko produktet</a>
</button>

            </div>

        </div>
    </div>

    <?php include "footer.php" ?> <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>