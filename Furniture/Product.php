<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product </title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <style>
        .hideme{
            display: none
        }
    </style>

</head>

<body class="ml-4 mr-4">




    <div class="container-fluid">


        <nav class="ml-4 mr-4 navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Furniture</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <form   method = "POST" class="mb-3 ml-4 mr-4 mt-3">
  <div class="input-group  ">



  <input type="text" class="form-control " placeholder="Search Product" name="Searchparameter"
   aria-label="Search Product" aria-describedby="basic-addon2" />
  <div class="input-group-append ml-2">
    <button class="btn btn-outline-primary" type="submit" name="ok" onclick="hideselectAll()">Search</button>
  </div>

</div>

</form>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Product.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-white ">Profile </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Activity</a>
                    </li> -->


                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Logout</a>
                    </li>



                </ul>

            </div>
        </nav>

        <br/>










        <div id="carouselExampleCaptions" class="carousel slide mt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="carol1.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-dark">Best Furniture Item Available in Market</h4>
                        <!-- <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carol2.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-dark">Contact Us For Best Product</h4>
                        <!-- <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carol3.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-dark">Be Part of our Furniture Community</h4>
                        <!-- <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>













      <!-- <div class="container"> -->

        <button type="button" class="btn btn-primary mt-5">
            Furniture Product Info</span>
        </button>
        </button>


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-4" id="selectall">


        <!-- <div id="Removegarnalai"> -->







        <?php
                                include('connection.php');  





                            $sql = "SELECT * FROM Furniture.product";
                            $result = mysqli_query($con, $sql);

                          

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {



                            ?>





            <div class="col md-4" >

                <div class="card shadow-sm">

                        <img src="admin/uploads/<?php 
                        
                        if($row["imagedt"]==null || ""){

                            echo null; 
                        }else{
                          
                            echo $row["imagedt"]; 
                        }
                        
                        
                        
                        
                        ?>" class="img-fluid"
                                            height="400px" width="100%"
                                            alt="Responsive image">




                    <div class="card-body">
                        <a href="#" class="badge badge-primary"><?php echo $row["typedt"]; ?>  </a> &emsp; Price:  <?php echo $row["pricedt"]; ?>


                        <h4 class="mt-2"> <?php echo $row["namedt"]; ?></h4>
                        <p class="card-text">

                        <?php echo $row["infodt"]; ?>

                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <?php
                                        }

                                    }
                                        ?>
</div>




<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-4" id="selectallByParam">





                         <?php
                                include('connection.php');  

                                if(isset($_POST['ok'])){


                                   

                                    ?>


                                        <script type="text/javascript">
                                        
                                        $("#selectall").addClass("hideme");

                                        
                                        </script>
                                           
                                        <?php

                                    



                                  


                                    $searchParameter = $_POST['Searchparameter'];

                                    if($searchParameter ==null || ""){

                                        // This is in the PHP file and sends a Javascript alert to the client
                                $message = "Enter the Data in Search Field ";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                    }else{

                                                                                // This is in the PHP file and sends a Javascript alert to the client
                                $message = $searchParameter;




                                // $sql = "SELECT * FROM Furniture.product";

                                $sql =   "SELECT * FROM Furniture.product where namedt LIKE '%$message%' OR  pricedt LIKE '%$message%' OR  typedt LIKE '%$message%' OR  infodt LIKE '%$message%' " ;
                                // $result = mysqli_query($conn,$sql);
                                $result = mysqli_query($con, $sql);
    
                              
    
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {





          


                            
                                ?>





                                <div class="col md-4">

                                <div class="card shadow-sm">

                                        <img src="admin/uploads/<?php 
                                        
                                        if($row["imagedt"]==null || ""){

                                            echo null; 
                                        }else{
                                        
                                            echo $row["imagedt"]; 
                                        }
                                        
                                        
        
        
        ?>" class="img-fluid"
                            height="400px" width="100%"
                            alt="Responsive image">




    <div class="card-body">
        <a href="#" class="badge badge-primary"><?php echo $row["typedt"]; ?>  </a> &emsp; Price:  <?php echo $row["pricedt"]; ?>


        <h4 class="mt-2"> <?php echo $row["namedt"]; ?></h4>
        <p class="card-text">

        <?php echo $row["infodt"]; ?>

        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            </div>
        </div>
    </div>
</div>

</div>



<?php
                                    }}

                                    

                                

                                }
                                

                                }

                        ?>





<!-- </div> -->

        </div>

        <!-- </div> -->

    </div>















</body>

</html>