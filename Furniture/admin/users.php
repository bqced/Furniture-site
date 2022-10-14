<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Users</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="dash.html">Furniture-Admin</a>
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
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dash.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addusermodal">
                                Add Users</button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Actions</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                              <?php
                                include('../connection.php');  

                            $sql = "SELECT * FROM Furniture.new_user";
                            $result = mysqli_query($con, $sql);

                          

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {

                                    $color = 'green';

                            ?>
                                    
                                        <tr>
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["password"]; ?></td>


                                            <td>

                                                <button type="button" class="btn btn-primary"
                                                 onclick='getandSHowit(
                                               
                                               <?php echo $row["id"]; ?> 
                                                    

                                                        )'>Update</button>
                         

                                            <button type="button" class="btn btn-danger"
                                             onclick='deleteMe(
                                                 <?php echo $row["id"]; ?> 
                                                 
                                                 )'>Delete</button>





                                            </td>
                                        </tr>



                                        <?php
                                        }

                                    }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
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




    <!-- Modal -->
<div class="modal fade" id="addusermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action = "adduser.php" method = "POST" >


                         <div class="form-group">
                                    <label for="exampleFormControlInput1">FUll Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name"
                                    name="name" required
                                    >
                                </div>



                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                    name="email" required
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Password</label>
                                    <input type="password" class="form-control"
                                     id="password" placeholder="Password"
                                    name="password" required
                                    >
                                </div>





                                <div class="form-group text-center">
                                    <input type="submit" value="Add Users" id="addproductbtn" class="btn btn-primary">
                                </div>
                            </form>






      </div>

    </div>
  </div>
</div>




    <!-- Modal -->
    <div class="modal fade" id="updateusermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <form action = "updateuser.php" method = "PUT" >



<div class="form-group">
           <label for="exampleFormControlInput1">Id</label>
           <input type="number" class="form-control" id="idup" placeholder="Name"
           name="idup" readonly required
           >
       </div>

<div class="form-group">
           <label for="exampleFormControlInput1">FUll Name</label>
           <input type="text" class="form-control" id="nameup" placeholder="Name"
           name="nameup" required
           >
       </div>



       <div class="form-group">
           <label for="exampleFormControlInput1">Email</label>
           <input type="email" class="form-control" id="emailup" placeholder="Email"
           name="emailup" required
           >
       </div>

       <div class="form-group">
           <label for="exampleFormControlInput1">Password</label>
           <input type="password" class="form-control"
            id="passwordup" placeholder="Password"
           name="passwordup" required
           >
       </div>





       <div class="form-group text-center">
           <input type="submit" value="Add Users" id="updateproductbtn" class="btn btn-primary">
       </div>
   </form>





      </div>

    </div>
  </div>
</div>








</div>

</div>
</div>

<div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>


    <script>

        function deleteMe(id){
            window.location.href="deleteusers.php?id="+id 

        }


        function getandSHowit(id){

            // , name, email, password

            $("#idup").val(id);
            // $("#nameup").val(name);
            // $("#emailup").val(email);
            // $("#passwordup").val(password);


            $('#updateusermodal').modal('show')

            // alert(id+" "+name+" "+ email +" " +password)

        }
        </script>
</body>

</html>