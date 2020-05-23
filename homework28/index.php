<?php


$filename="movies/movies.csv";

$handle = fopen($filename, "r");

$data = [];

while(!feof($handle)){

  $data[] = fgetcsv($handle);


}

fclose($handle);  

array_shift($data);

$years = [];
$genres = [];

foreach($data as $film){
 
   if(!in_array($film[7], $years)){ 
   $years[] = $film[7];
   }



}

foreach($data as $film){
 
    if(!in_array($film[1], $genres)){ 
    $genres[] = $film[1];
    }
 
 
 
 }

 

 





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <select name="years">
    <?php foreach($years as $year) : ?>
    <option value=<?php echo $year; ?>><?php echo $year; ?></option>
    <?php endforeach; ?>
    </select>

    <select name="genre">
    
    <?php foreach($genres as $genre) : ?>
    <option value=<?php echo $genre; ?>><?php echo $genre; ?></option>
    <?php endforeach; ?>
    
    </select>

    <button type="submit">Submit</button>
    </form>


    <table>
    <tr>
    <th>Film</th>
    <th>Genre</th>
    <th>Year</th>
    </tr>
   
   <?php if(isset($_POST["years"])) : ?>
   <?php foreach($data as $film) : ?>
   <?php if($film[7] == $_POST["years"]) : ?>
   <?php if($film[1] === $_POST["genre"]) : ?>

   <tr>
   <td><?php echo $film[0] ?></td>
   <td><?php echo $film[1] ?></td>
   <td><?php echo $film[7] ?></td>
   </tr>

   <?php endif; ?>
   <?php endif; ?>
   <?php endforeach; ?>
   

   <?php endif; ?>
   </table>



</body>
</html>