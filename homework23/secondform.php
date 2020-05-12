<?php

foreach($_POST as $key => $value){

    $selectValue = $value;
}

if(empty($selectValue)){

   $selectValue = "select";

}

switch($selectValue){

    case "monday":
        echo "laugh on Monday, laugh for danger";
    break;
    case "tuesday": 
        echo "laugh on tuesday, kiss a stranger";
    break;
    case "wednesday":
        echo "laugh on wednesday, laugh for a letter";
    break;
    case "thursday":
        echo "laugh on thursday, something better";
    break;
    case "friday":
        echo "laugh on friday, laugh for sorrow";
    break;
    case "saturday":
        echo "laugh on saturday, enjoy tommorow";
    break;
    case "sunday": 
        echo "laugh on sunday, enjoy today"; 
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
        <h1>pick a day</h1>
        <span>please choose a day</span>
        <select name="select">
            <option value="select">Select</option>
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <option value="saturday">Saturday</option>
            <option value="sunday">Sunday</option>
        </select>

        <button type="submit" class="btn btn-danger">Go</button>
    </form>

<?php else : ?> 

<form action="/homework23/secondform.php">

<button>Back</button>

</form>




<?php endif; ?>

  
    



  </div>
</body>
</html>