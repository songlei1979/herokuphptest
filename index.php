<?php

$server = "us-cdbr-iron-east-01.cleardb.net";
$username = "b7e98acae42e3e";
$password = "d1ce6a3f";
$db = "heroku_19e07d0e5c3a4df";

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "select * from user";

$res = $conn->query($sql);

if ($res->num_rows>0){
    while ($row = $res->fetch_assoc()){
        echo "<br>id: ".$row["id"];
    }
}


?>
