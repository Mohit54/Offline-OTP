<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "classicmodels");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt update query execution
$sql = "UPDATE accounts SET amount= amount + 500 WHERE id=2";


if(mysqli_query($link, $sql)){
    echo "Amount was Transfered successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 






// Attempt update query execution
$sql = "UPDATE accounts SET amount= amount - 500 WHERE id=1";





if(mysqli_query($link, $sql)){
    echo " ";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>