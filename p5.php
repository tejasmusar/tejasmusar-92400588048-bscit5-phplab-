<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        for ($i=5; $i <=10 ; $i++) { 
            echo $i."<br>";
        }
        ?>
</body>
</html>






<br>

<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    foreach (range(5,10) as $i) {
        echo $i."<br>";
    }
    ?>
</body>
</html>