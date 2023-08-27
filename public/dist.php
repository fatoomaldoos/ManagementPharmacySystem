<?php
      
      
      $con=mysqli_connect('localhost','root','','pharmacyProject');
    
   
    $sql = "SELECT* FROM orders ";
    $result = $con->query($sql);
    if ($result->num_rows> 0) {
        while($row=$result->fetch_assoc())
        {
            echo $row['medname'];
            echo $row['quantity'];
        }
    } 
    $con->close();
    ?>