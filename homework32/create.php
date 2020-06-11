<?php
if(isset($_POST["firstname"]) && isset($_POST["lastname"])){

    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"])){

        $firstname = trim($_POST["firstname"]);
        $lastname = trim($_POST["lastname"]);
        
        
        $link = mysqli_connect('localhost', 'homestead', 'secret', 'users');



        if(!$link){

            echo "ERROR:"
            .mysqli_connect_errno()."<br>"
            .mysqli_connect_error();

        } 

        $query = mysqli_query($link, "INSERT INTO users VALUES(NULL,'$firstname','$lastname')" );

        header("location: index.php");



    }





}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form class="needs-validation" action="" method="POST">
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationCustom01">First name</label>
            <input type="text" class="form-control" id="validationCustom01" value="Mark" name="firstname" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationCustom02">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" value="Otto" name="lastname" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Create user</button>
    </form>
</div>    
</body>
</html>