<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
    <?php
        $paragrafo = "SSSLorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur eaque, perferendis soluta architecto pariatur quod distinctio dolores dolor, tempore facere illum excepturi officiis incidunt illo dicta minus sapiente vel? Consectetur?";

        $lunghezzaP = strlen($paragrafo);

        $get = $_GET["censura"];

    ?>
    <style>
        body {background-color: blue;}
        p    {color: red; text-align : center}
    </style>
</head>
<body>
    <p>
        <?php
            echo $paragrafo;
            echo "<br>";
            echo $lunghezzaP
        ?>
    </p>
    <p>
        <?php
            
        ?>
    </p>
</body>
</html>