<?php
 	  $query = "SELECT * FROM product"; 
    $result = mysqli_query(openDB(), $query);
    $row2 = mysqli_num_rows($result);
        if ($row2 > 0){
           $counter = 0;
           while(($counter < $row2) && ($row = mysqli_fetch_array($result))){
               $products[$counter]["Prod_ID"] = $row["Prod_ID"]; 
               $products[$counter]["Prod_Name"] = $row["Prod_Name"];
               $products[$counter]["Prod_Rating"] = $row["Prod_Rating"];             
               $counter++;
           }
        } 
    echo (json_encode($products));

 function openDB(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "118wproject";
        

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }
?>