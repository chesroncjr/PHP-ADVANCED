<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dagen = array(
        "maandag",
        "dinsadg",
        "woensdag",
        "donderdag",
        "vrijdag",
        "zaterdag",
        "zondag"
    );
    ?>
    <ul>
        <?php foreach ($dagen as $dag) { ?>
            <li>
                <?php echo $dag ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>