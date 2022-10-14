<?php    


if (($_FILES['fileToUpload']['name']!="")){
  // Where the file is going to be stored
    $target_dir = "uploads/";
    $file = $_FILES['fileToUpload']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['fileToUpload']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;
   
  // Check if file already exists
  if (file_exists($path_filename_ext)) {
   echo "Sorry, file already exists.";
   }else{
   move_uploaded_file($temp_name,$path_filename_ext);
   echo "Congratulations! File Uploaded Successfully.";
   }
  }



        include('../connection.php');  
        $names = $_POST['product'];  
        $prices = $_POST['price'];  
        $types=$_POST['types'];  
        $infos=$_POST['productinfo'];  
        $images=  $_FILES["fileToUpload"]["name"];  





            // Attempt insert query execution
        //  $sql = "INSERT INTO product (id, namedt, pricedt,typedt,infodt, imagesdt)  VALUES
        //   ('$id', '$name', '$price', '$type', '$info', '$images')"
      
                $sql = "INSERT INTO product (namedt,pricedt,typedt,infodt,imagedt)
                VALUES ('$names','$prices','$types','$infos','$images')";


                if (mysqli_query($con, $sql)) {
                } else {
                    echo "Error: " . $sql . "
            " . mysqli_error($con);
                }
                mysqli_close($con);

         header("Location: users.php"); /* Redirect browser */
        //  exit();  



    ?>  