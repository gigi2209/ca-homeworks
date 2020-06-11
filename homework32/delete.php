<?php


$id = $_GET["id"];
echo $id;

$link = mysqli_connect('localhost', 'homestead', 'secret', 'users');



        if(!$link){

            echo "ERROR:"
            .mysqli_connect_errno()."<br>"
            .mysqli_connect_error();

        } 

        $query = mysqli_query($link, "DELETE FROM users WHERE id=$id" );

        header("location: index.php");





?>