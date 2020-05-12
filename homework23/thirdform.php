<?php

foreach($_POST as $key => $value){

    $selectValue = $value;
}

if(empty($selectValue)){

   $selectValue = "select";

}

switch($selectValue){

    case "january":
        echo "January has 31 days";
    break;
    case "february": 
        echo "February has 28 or 29 days";
    break;
    case "march":
        echo "March has 31 days";
    break;
    case "april":
        echo "April has 30 days";
    break;
    case "may":
        echo "May has 31 days";
    break;
    case "june":
        echo "June has 30 days";
    break;
    case "july": 
        echo "July has 31 days"; 
    break;
    case "august": 
        echo "August has 31 days";
    break;
    case "september": 
        echo "September has 30 days";
    break;
    case "october":
        echo "October has 31 days";
    break;
    case "november": 
        echo "November has 30 days";
    break;
    case "december": 
        echo "December has 31 days";
    break;




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <div class="container text-center">

<?php if(empty($_POST) || $selectValue === "select") : ?>
    <form action="" method="post">
        <h1>pick a month</h1>
        <span>please choose a month</span>
        <select name="select">
            <option value="select">Select</option>
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">Ocotber</option>
            <option value="november">November</option>
            <option value="december">December</option>
        </select>

        <button type="submit" class="btn btn-danger">Go</button>
    </form>

<?php else : ?> 

<form action="/homework23/thirdform.php">

<button>Back</button>

</form>




<?php endif; ?>

  
    



  </div>
</body>
</html>