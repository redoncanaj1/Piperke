<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                          
<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
   
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
     <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
     <link rel="Shortcut icon" type="image/png" href="img/fav.ico"> 

</head>

<body oncontextmenu='return false' class='snippet-body'>
<?php require "db_config.php"?>

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
   
    </div>
    <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6" id="fustane">
                <h3 class="title-mb-3">Fustane</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                               
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan i gjate</h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>25 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan2.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan i kuq</h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>29 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan3.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan roze</h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>27 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan4.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan blu</h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>22 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                             
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan5.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan i madh</h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>23 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan6.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan i bardhe </h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>31 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan7.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan blu</h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>32 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fustan8.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Fustan roze</h4>
                                                    <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                                    <h4>28 $<h4>
                                                    <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                               
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="img/fustan9.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Fustan i zi</h4>
                                            <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                            <h4 >34 $<h4>
                                            <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="img/fustan10.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Fustan me pika</h4>
                                            <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                            <h4 >32 $<h4>
                                            <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="img/fustan11.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Fustan i bardhe</h4>
                                            <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                            <h4 >31 $<h4>
                                            <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="img/fustan12.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Fustan i bardhe</h4>
                                            <p class="card-text">Fustanet tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Fustaneve dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                            <h4 >30 $<h4>
                                            <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-5 pb-5">

<div class="container">
    <div class="row">
 
<div class="col-6" id="xhinse">
            <h3 class="title-mb-3">Xhinse</h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                      

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse1.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>22 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse2.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>24 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse3.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse te grisura per djem</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>25 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse4.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu me stickera</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>26 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                            
            
                    <div class="carousel-item">
                        <div class="row">
                     
    

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse5.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse gri te grisura per djem</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>29 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse6.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu te grisura per djem</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>20 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse7.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>23 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse8.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>28 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
         
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                      
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse9.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>32 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse10.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>40 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse11.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra</h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>29 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/xhinse12.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Xhinse blu per femra </h4>
                                        <p class="card-text">Xhinsat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Xhinsave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>28 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
         
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="pt-5 pb-5">

<div class="container">
    <div class="row">
 
<div class="col-6" id="bluza">
            <h3 class="title-mb-3">Bluza</h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators4" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                    

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza1.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze portokalli</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4>12 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza2.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze e zeze</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >10 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza3.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze blu</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >9 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza4.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze kafe</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >15 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
         

                        </div>
                    </div>
                            
            
                    <div class="carousel-item">
                        <div class="row">
                       
    

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza5.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze blu</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >12 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza6.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze e zeze</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >20 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza7.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze e zeze</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >18 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza8.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze bezhe</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >17 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            
         
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                       
    
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza9.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze e zeze</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >21 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza10.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze e bardhe</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >17 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza11.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze e zeze</h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >14 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/bluza12.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bluze e zeze </h4>
                                        <p class="card-text">Bluzat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Bluzave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p>
                                        <h4 >15 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
         
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="pt-5 pb-5">

<div class="container">
    <div class="row">
 
<div class="col-6" id="pantallona">
            <h3 class="title-mb-3">Pantallona</h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators5" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                  
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona1.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona kafe per femra</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >20 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona2.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona jeshile per femra</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >21 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona3.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona te zeza per femra</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >25 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona4.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona jeshile per djem</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >24 $?<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                            
            
                    <div class="carousel-item">
                        <div class="row">
                       
           
    

                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona5.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona gri per femra</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!</p>
                                        <h4 >23 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona6.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona kafe per femra</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p></p>
                                        <h4 >29 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona7.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona te bardha per djem</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p></p>
                                        <h4 >40 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona8.jfif">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona gri per djem</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p></p>
                                        <h4 >32 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            
         
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                       
    
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona9.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona gri per djem</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p></p>
                                        <h4 >31 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona10.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona jeshile per femra</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p></p>
                                        <h4 >32 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona11.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona kafe per femra</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p></p>
                                        <h4 >30 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/pantallona12.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pantallona te zeza per djem</h4>
                                        <p class="card-text">Pantallonat tona jane qendisur dhe dizenjuar me kujdesin me te madh. Ne iu vijme ne ndihme juve me te gjitha llojet e Pantallonave dhe te gjitha llojet e ngjyrave.Ju faleminderit!<p class="card-text"></p></p>
                                        <h4 >34 $<h4>
                                        <button class="buy" id="buy"> <a href="karta.php" class="go-somewhere">Porosit</a></button>
                                    </div>
                                </div>
                            </div>
         
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

</section>
</section>
</section>
</section>


                            <script type='text/javascript'></script>
                          
                            
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <?php include "footer.php" ?>
</body>

</html>