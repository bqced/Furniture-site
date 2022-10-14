<!DOCTYPE html>
<html lang="en">

<head>0
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="ml-4 mr-4">

    <div class="container-fluid">


    <nav class="ml-4 mr-4 navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Furniture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white "  data-toggle="modal" data-target="#exampleModal">Login</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white"  href="admin/index.php">Admin</a>
      </li>
      <!-- data-toggle="modal" data-target="#exampleModalregister" -->
    </ul>
 
  </div>
</nav>

<br/>
<div class="jumbotron mt-5">
    <h3 class="display-4">Top-Notch Furniture</h3>
    <p class="lead">The Best Furnitures in the Market </p>
    <hr class="my-4">

</div>


        </div>
    



 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <form action = "loginusers.php" method = "POST" >
      <div class="form-group">
        <label for="usr">Name:</label>
        <input type="email" class="form-control" id="email" name= "email" required>
        </div>
        <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
        </div> 

        <input type="submit" value="Login" id="loginbtn" class="btn btn-primary">
      </div>

      </form>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>