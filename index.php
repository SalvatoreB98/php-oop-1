<?php
include 'classes.php';
include 'data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($movies as $key => $data) {
        $movie = new Movie($data); ?>
        <div class="flex">
            <?php
            ?>
            
            <?php
            echo "<div>";
            echo "<h2>" . $movie->title . "</h2>";
            echo "<p>" . $movie->description . "</p>";
            echo "<div>" . $movie->year . "</div>";
            if ($key == "genres") {
                foreach ($movie->genres as $genre) {
                    echo "<a href='#'>" .  $genre . "</a>";
                }
            }
            echo "</div>";
            ?>
        </div>
    <?php
    }
    ?>
</body>

</html>