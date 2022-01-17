<?php 

require_once __DIR__ ."/db.php";
require_once __DIR__ ."/Movie.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>oop-movies</title>
</head>

<body>
   
   <?php foreach($movies as $movie) :
      $my_movie = new Movie($movie["title"], $movie["year"]);
      $my_movie->director = $movie["director"];
      $my_movie->actors = $movie["actors"];
      $my_movie->genre = $movie["genre"];

   ?>
   <div>
      <p>Title: <strong> <?php echo $movie["title"] ?></strong></p>
      <p>year: <strong> <?php echo $movie["year"] ?> </strong> </p>
      <p>directed by <strong> <?php echo $movie["director"] ?> </strong></p>
      <p>Cast: 
         <strong> <?php foreach($my_movie->actors as $actor) :?>
            <li><?php echo $actor ?></li>
         <?php endforeach; ?>
         </strong>
      </p>
      <p>Genre: <strong> <?php echo $movie["genre"] ?> </strong></p>
      <hr>
   </div>
   <?php endforeach; ?>

</body>
</html>