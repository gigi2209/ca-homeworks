 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<?php  if( !empty($_POST["city"]) ) : ?> 

 your favorite city is <?php echo $_POST["city"] ?>

<?php else : ?>
    <form action="" method="post" class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    please enter your favorite city <input type="text"  name="city" class="ml-2 form-control">
  </div>
  <button class="btn btn-primary mb-2">Submit</button>
</form>


<?php endif; ?>



</body>
</html>