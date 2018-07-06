<!DOCTYPE html>
<html>
  <head>
    <title>Red Stone Shop</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/main.css">
       <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script src="js/bootstrap.js"></script>
       <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
       <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
  </head>
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar" >
      <div class="container">
        <a href="/>practice/index.php" class="navbar-brand" id="text">Red Stone Shop</a>
        <ul class="nav navbar-nav">
          <!--Drop down menu -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Manu<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Shoes</a></li>
                  <li><a href="#">Accessories</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </nav>
    <div id="background-image">
        <div id="image-1"></div>
        <div id="image-2"></div>
    </div>
  <body>
  <!--Remove the spaces and center the products-->
  <div class="col-md-2">  </div>

  <!--Main content of featured products-->
    <div class="container">
      <div class="row">
        <h2 class="text-center">Featured Products</h2>
      </div>
<br></br>
  <div class="row">
          <div class="col-md-3">
            <h4>Levis Jeans</h>
              <img src="images/levis.jpg" alt="Levis Jeans" class="img-thumbnail"/>
              <p class="list-price text-danger">List Price: <s>$24.99</s></p>
              <p class="price">Our Price: $19.99</p>
              <button type="button" class="btn btn-success" data-toggle="modal" dat-target="#details-1">Details</button>
          </div>
              <div class="col-md-3">
                <h4>Addidas Football</h>
                <img src="images/football.jpg" alt="Addidas Football" class="img-thumbnail"/>
                <p class="list-price text-danger">List Price: <s>$39.99</s></p>
                <p class="price">Our Price: $25.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" dat-target="#details-2">Details</button>
              </div>
              <div class="col-md-3">
                <h4>Watches</h>
                <img src="images/watchs.jpg" alt="Watches" class="img-thumbnail"/>
                <p class="list-price text-danger">List Price: <s>$134.99</s></p>
                <p class="price">Our Price: $99.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" dat-target="#details-3">Details</button>
              </div>
              <div class="col-md-3">
                <h4>Polo Shirt</h>
                <img src="images/polo_shirt.jpg" alt="Polo Shirt" class="img-thumbnail"/>
                <p class="list-price text-danger">List Price: <s>$54.99</s></p>
                <p class="price">Our Price: $34.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" dat-target="#details-4">Details</button>
              </div>
              <div class="col-md-3">
                <h4>Purse</h>
                <img src="images/parse.jpg" alt="Purse" class="img-thumbnail"/>
                <p class="list-price text-danger">List Price: <s>$99.99</s></p>
                <p class="price">Our Price: $74.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" dat-target="#details-5">Details</button>
              </div>
              <div class="col-md-3">
                <h4>Hoodie</h>
                <img src="images/hoodie.jpg" alt="Hoodie" class="img-thumbnail"/>
                <p class="list-price text-danger">List Price: <s>$59.99</s></p>
                <p class="price">Our Price: 34.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" dat-target="#details-6">Details</button>
              </div>
              <div class="col-md-3">
                <h4>Headbands</h>
                <img src="images/headbands.jpg" alt="Headbands" class="img-thumbnail"/>
                <p class="list-price text-danger">List Price: <s>$9.99</s></p>
                <p class="price">Our Price: $4.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" dat-target="#details-5">Details</button>
              </div>
            </div>
            <footer class="text-center" id="footer">&copyright 2018 Red Stone Shop</footer>
        </div>
  </body>
</html>
