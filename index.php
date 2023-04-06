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
    $sql="INSERT INTO news (Id,Title,Summary,Rating,Category) VALUES(null,'Hello World','lorem ipsum',4,'abc')";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        echo("Added successfully.");
        # code...
    } else {
        echo("Not added.");
        # code...
    }
    
    $conn->close();
}

?>