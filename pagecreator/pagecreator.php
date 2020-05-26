<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Creator</title>
</head>

<body>
    <?php
    $i = 0;
    $id = null;
    for ($i = 0; $i < 10; $i++) {
        $id .= mt_rand(0, 9);
    }
    $openDocument = fopen("./Documents/" . $id . ".php", "w");
    echo '<iframe src="./Documents/' . $id . '.php' . '" frameborder="0"></iframe>';
    ?>
</body>

</html>