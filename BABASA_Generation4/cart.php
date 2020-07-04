<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gen4";

    session_start();
    $mysqli = mysqli_connect($server, $username, $password, $dbname);

?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            .td{
                color: #808080;
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
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/game.php">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/accessories.php">Accesories</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/cart.php">Cart</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form method="post">
           <div class= "table-responsive-sm">
                            <table class='table table-hover' style='margin-left:10px'>

                <thead>
                    <tr>

                        <!--<td class='tdtable'><b>Product ID</b></td>-->
                        <td class='tdtable'><b>Product Name</b></td>
                        <td class='tdtable'><b>Product Price</b></td>
                        <td class='tdtable'><b>Product Quantity</b></td>
                        <td class='tdtable'><b>Remove Product</b></td>
                        
                    </tr>
                </thead>

                <?php


                $sql="Select * from products ";
                $ctr=0;
                foreach($mysqli->query($sql) as $row){
                    echo '<tr>';

                    echo '<input type="hidden" name="hideProd_ID'.$ctr.']" value='.$row['p_id'].'>';
                    //echo '<td>'.$row['p_id']. '</td>';
                    echo '<td>'.$row['p_name']. '</td>';
                    echo '<td>'.$row['p_price']. '</td>';
                    echo '<td>'.$row['p_quantity']. '</td>';
                   
                    $ctr++;
                }               
            ?>   
            </table>
        </div>
        



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html