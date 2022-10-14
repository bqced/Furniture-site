

<?php     
        

        
        
        include('../connection.php');  
        
        $sql = "DELETE FROM Furniture.new_user WHERE id='" . $_GET["id"] . "'";
        $result = mysqli_query($con, $sql);       
        
                    if (mysqli_query($con, $sql)) {
                    
                header("Location: users.php"); /* Redirect browser */
                exit();  


                } else {
                    echo "Error deleting record: " . mysqli_error($con);
                }
        
        
        
        ?>