<?php
/* ------ Notes ------
1.	The form from modal is passed through from Javascript to here by using the method, 'serialize()'. Serialize()
	turns the forms information to a string. EX: hiddenID=1&modal-fname=j&modal-lname=j&modal-quantity=5&modal-textarea=j&modal-checkbox=on
	The information can be accessed using $_POST['modal-fname'], etc.
2.  print_r('Current PHP version: ' . phpversion()); Prints out the current php version that you are using.
3.	print_r and echo seems like it does the same thing where it can send information back to the user side. Not sure what the difference between the two is.
*/
if (isset($_POST['modal-checkbox'])) {
	$params = array();
	$id = $_POST['hiddenID'];
	$firstName = $_POST['modal-fname'];
	$lastName = $_POST['modal-lname'];
	$rating = $_POST['modal-quantity'];
	$feedbackInput = $_POST['modal-textarea'];
	$date = date("Y-m-d");
	$conn = openDB();
	updateRating($rating, $id);
	$query = "INSERT INTO feedbacks (F_Fname, F_Lname, F_Date, F_Feedback, Prod_ID) VALUES ('".$firstName."', '".$lastName."', '".$date."', '".$feedbackInput."', '".$id."');"; 
    $result = mysqli_query($conn, $query);
    if ($result){
    	echo 'Thanks for the feedback!';
    }
} else {
	echo 'Error, database not affected/updated';
}
 function updateRating ($rating, $id) {
 	$conn = openDB();
 	$query = "SELECT Prod_Rating FROM product WHERE Prod_ID='".$id."'";
 	$result = mysqli_query($conn, $query);

 	if ($result){
    	$returnRating = mysqli_fetch_array($result);
    	$returnRating = $returnRating['Prod_Rating'];

    	$newRating = (($rating + $returnRating) / 2);
    	$newRating = (number_format($newRating, 1));

    	$query2 = "UPDATE product SET Prod_Rating =".$newRating." WHERE Prod_ID=".$id."";
    	$result = mysqli_query($conn, $query2);
    	if ($result) {} 
   	} else 
    	print_r(' Fail to get current rating from database ');
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