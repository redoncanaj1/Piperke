<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="karta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                          
<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  
    <style></style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
     <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
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
                </form>


            </div>
        </div>

    </nav>
   
    <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
            <img src="img/card.jpg" alt="Product Image" class="imgcard">
                <a href="#" class="card-link text-danger like"> 
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Rezervoni veshjen</h4>
               
          <p class="card-text"></p>                
                <div class="options d-flex flex-fill">
                   <select class="custom-select mr-1">
                      <option selected hidden>Ngjyra</option>
                      <option value="1">Jeshile</option>
                      <option value="2">Kuq</option>
                      <option value="3">Blu</option>
                      <option value="3">Zeze</option>
                      <option value="3">Bardhe</option>
                      <option value="3">Verdhe</option>
                  </select>
                  <select class="custom-select ml-1">
                      <option selected hidden>Masa</option>
                      <option value="1">39</option>
                      <option value="2">40</option>
                      <option value="3">41</option>
                      <option value="4">42</option>
                      <option value="5">43</option>
                      <option value="6">44</option>
                  </select>
                </div>
                <div class="porosit">
                  <div class="price"></div>
                  <button class="btn btn-danger mt-3"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="buy.php" style="text-decoration: none; color:white" > Rezervo</button>
                </div>
              
            </div>
        
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