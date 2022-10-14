<?php    

        include('../connection.php');  

        $names = $_POST['productNameup'];  
        $prices = $_POST['productPriceup'];  
        $infos=$_POST['exampleFormControlTextarea1up'];  
        $id=  $_POST['idup']; 


      


        $sql = "UPDATE  Furniture.product set namedt = '$names', pricedt = '$prices' , infodt = '$infos' where id = '$id' ";  


        f (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
          
          mysqli_close($con);


    ?>  