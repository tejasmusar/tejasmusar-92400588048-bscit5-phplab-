<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*1 - strlen()*/
    echo"<h3>1.strlen()</h3>";
    echo"string:$str<br>";
    echo"length =".strlen($str);

    echo"<hr>";


    /*2 - strpos() */
    echo"<h3>2. strpos()</h3>";
    echo "position of 'php' =";


    /*4 - strrev() */
    echo "<h3>4. strrev()</h3>";
    echo "reverse string =" .strrev($str);


    echo "<hr>";

    /*5 - str_replace() */
    echo "<h3>5. str_replace()</h3>";
    echo str_replace("php", "java", $str);


    echo"<hr>";

    /*6 - strtolower() */
    echo "<h3>6. strtolower()</h3>";
    echo strtolower($str);


    echo"<hr>";

    /*7 - strtoupper() */
    echo "<h3>7. strtoupper()</h3>";
    echo strtoupper($str);
    ?>





</body>
</html>