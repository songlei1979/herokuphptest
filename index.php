<?php

$url = parse_url(getenv("mysql://b7e98acae42e3e:d1ce6a3f@us-cdbr-iron-east-01.cleardb.net/heroku_19e07d0e5c3a4df?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

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
