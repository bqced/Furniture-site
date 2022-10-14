

<?php     
        

        
        
        include('../connection.php');  
        
        $sql = "DELETE FROM Furniture.product WHERE id='" . $_GET["id"] . "'";
        $result = mysqli_query($con, $sql);       
        
                    if (mysqli_query($con, $sql)) {
                    
                header("Location: dash.php"); /* Redirect browser */
                exit();  


                } else {
                    echo "Error deleting record: " . mysqli_error($con);
                }
        
        
        
        ?>