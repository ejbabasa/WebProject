<html>
    <head>
        <title>
            Generation4
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            body{
                background: #D3D3D3;
            }
            .jumbotron{
                background-image: url("logo.jpg");
                background-size: 100% 100%;
            }
            #display-4{
               style
            }

            #image{
                width: 350px;
                height: 300px;
            }
           
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="http://localhost/home.html">Generation4</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost/home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/game.php">Games</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/accessories.php">Accesories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/cart.php">Cart</a>  
                    </li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid" id="jumbotron">
            <div class="container">
                <div>
                    <h1 class="display-4" style="color:white;">HEIGHTEN YOUR EXPERIENCES. ENRICH YOUR ADVENTURES.</h1>
                    <p class="lead" style="color:white;">Take your gaming to the next level with PlayStation accessories.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 product-grid">
                    <div class="card" style="width: 18rem;">
                        <img src="controller1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">DUALSHOCK 4</h5>
                            <p class="card-text">Experience the evolution of play with the DUALSHOCK®4 wireless controller.</p>
                            <p>Quantity:<input type="text" name="quantity" class="form-control" value="1">
                            Price:<h6>₱3,100</h6></p>
                            <a href="http://localhost/cart.php"><button class="btn btn-primary" name="cart">Add to Card</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 product-grid">
                    <div class="card" style="width: 18rem;">
                        <img src="hyperX.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HyperX Cloud Headset</h5>
                            <p class="card-text">Get the HyperX gear you need for the ultimate PlayStation® gaming experience.</p>
                            <p>Quantity:<input type="text" name="quantity" class="form-control" value="1">
                            Price:<h6>₱3,475</h6></p>
                            <a href="http://localhost/cart.php"><button class="btn btn-primary" name="cart">Add to Card</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 product-grid">
                    <div class="card" style="width: 18rem;">
                        <div class="image">
                            <img src="ps4charger.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Charging Station for PS4</h5>
                            <p class="card-text">Charge and display your DUALSHOCK 4 wireless controllers with the officially licensed Charging Station for PlayStation 4. Feel confident your controllers are always ready to game as it charges on display alongside of your PS4 console.</p>
                            <p>Quantity:<input type="text" name="quantity" class="form-control" value="1">
                            Price:<h6>₱1,250</h6></p>
                            <a href="http://localhost/cart.php"><button class="btn btn-primary" name="cart">Add to Card</button></a>
                    </div>
                </div>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>