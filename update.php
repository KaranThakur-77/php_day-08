<?php
$serverName = "localhost";
$username = "root";
$password = "";
$database = "news_site";
$conn = new mysqli($serverName,$username,$password,$database);
if ($conn->connect_error) {
    # code...e
    die("connection failed.");
} else {
    # code...
    echo("connection established succesfully");
    $sql="UPDATE news SET Title='hello',Summary='my name is MYSQL.',Rating=5,Category='name' WHERE id=8";
    $result=$conn->query($sql);
    $sql="DELETE FROM news WHERE id=17 ";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        echo("Table updated successfully.");
        # code...
    } else {
        echo("Not added.");
        # code...
    }
    
    $conn->close();
}

?>