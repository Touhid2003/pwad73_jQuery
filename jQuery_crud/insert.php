<?php
    
    $db = new mysqli("localhost", "root", "", "jquery_crud");

    $name = $_GET['Name'];
    $adress = $_GET['Address'];

    $db->query("INSERT INTO  students VALUES(NULL, '$name', '$adress')");

    if($db->affected_rows){
        echo "Successfull Inserted";
    } else{
        echo "Sorry, something problem";
    }
?>