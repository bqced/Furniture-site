<?php      
        include('connection.php');  
        $username = $_POST['email'];  
        $password = $_POST['password'];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select *from new_user where email = '$username' and password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  


                echo "<h1> Sucessfully Login</h1>";  


                header("Location: Product.php"); /* Redirect browser */
                exit();  
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>  