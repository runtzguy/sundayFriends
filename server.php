<?php 
$conn = openDB();
//For Star Rating
//(($_POST['getStarRating'])($conn));
if (isset($_POST['feedbackID'])){
	//TODO: Need to query from "feedbacks" table in descending order in respect to "F_date"
	//SELECT * FROM `feedbacks` WHERE Prod_ID = '1' ORDER BY F_Date DESC
	$feedbackID = $_POST['feedbackID'];
	$query = "SELECT * FROM feedbacks WHERE Prod_ID='".$feedbackID."' ORDER BY F_Date DESC"; 
    $result = mysqli_query($conn, $query);
    $row2 = mysqli_num_rows($result);
        if ($row2 > 0){
           $counter = 0;
           while(($counter < $row2) && ($row = mysqli_fetch_array($result))){
               $feedbacks[$counter]["F_ID"] = $row["F_ID"]; 
               $feedbacks[$counter]["F_Fname"] = $row["F_Fname"];
               $feedbacks[$counter]["F_Lname"] = $row["F_Lname"];             
               $feedbacks[$counter]["F_Date"] = $row["F_Date"];
               $feedbacks[$counter]["F_Feedback"] = $row["F_Feedback"];
               $feedbacks[$counter]["Prod_ID"] = $row["Prod_ID"];
               $counter++;
           }
        } else {
        	$feedbacks = null;
        }
    echo json_encode($feedbacks);
}
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
