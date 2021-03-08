<?php

require_once 'classes.php';

$books = array();


$connect = mysqli_connect('mysqli', 'root', 'rootpass', 'beetroot');
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_errno()) {
    echo 'Fatal Error to connect MySQL: ' . mysqli_connect_error();
}

$result = mysqli_query($connect, "SELECT * FROM book ORDER BY sort_order");

while ($row = mysqli_fetch_array($result)){
    $books [] = new $row['type']($row);
};

