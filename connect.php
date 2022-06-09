<?php

$conn =new mysqli("localhost","root", "", "MabaseD");

if($conn){
    echo"connection successful";
}else{
    die(mysqli_error($conn));
}