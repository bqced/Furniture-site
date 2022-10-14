<?php    



        include('../connection.php');  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $name = $_POST['name'];  

   





            // Attempt insert query execution
        //  $sql = "INSERT INTO product (id, namedt, pricedt,typedt,infodt, imagesdt)  VALUES
        //   ('$id', '$name', '$price', '$type', '$info', '$images')"
      
                $sql = "INSERT INTO new_user (name,email,password)
                VALUES ('$name','$email','$password')";


                if (mysqli_query($con, $sql)) {
                } else {
                    echo "Error: " . $sql . "
            " . mysqli_error($con);
                }
                mysqli_close($con);

                header("Location: users.php"); /* Redirect browser */
                exit();  
    ?>  