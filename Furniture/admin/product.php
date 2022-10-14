<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Products</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="dash.html">Start Bootstrap</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            </li>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#!">Settings</a>
                <a class="dropdown-item" href="#!">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.html">Logout</a>
            </div>
        </ul>
    </nav>


    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="dash.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link" href="product.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Products
                        </a>

                        <a class="nav-link" href="users.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Users
                        </a>

                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Logout
                        </a>


                    </div>
                </div>

            </nav>
        </div>




        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Static Navigation</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dash.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Static Navigation</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">




                            <form action = "adminproduct.php" method = "POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product Name</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Product Name"
                                    name="product"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product Price</label>
                                    <input type="number" class="form-control" id="productPrice" placeholder="Product Price"
                                    name="price"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Product For </label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="types">
                                    <option>Home</option>
                                    <option>Office</option>
                                    <option>Party</option>
                                    <option>Portable</option>
                                    <option>Others</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Information</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                                    name="productinfo"
                                    ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Product Image </label>
                                    <input type="file" class="form-control-file" id="fileToUpload"
                                    name="fileToUpload"
                                    >
                                </div>

                                <div class="form-group text-center">
                                    <input type="submit" value="Submit" id="addproductbtn" class="btn btn-primary">
                                </div>
                            </form>







                        </div>
                    </div>
                    <div style="height: 100vh"></div>
                    <div class="card mb-4">
                        <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <script src="productjs.js"></script>

</body>

</html>