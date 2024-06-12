<?php

$sname = "localhost";

$uname = "root";

$password = "";

$db_name = "bhome";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if (!$conn) {
    echo "Connection failed!";
}

function validate($data) {
    foreach($data as $key => $values){
        $data[$key] = trim($values);
        $data[$key] = stripcslashes($values);
        $data[$key] = htmlspecialchars($values);
        $data[$key] = strip_tags($values);

    }
    return $data;
}

function select($sql,$values,$datatypes){
    $conn = $GLOBALS ['conn'];
    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    }
    else{
        die("Query cannot be executed - Select");
    }
}