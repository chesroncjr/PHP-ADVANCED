<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    for ($x = 0; $x < 18; $x++) {
    }

    ?>
    <ul>
        <?php for ($x = 0; $x < 18; $x++) { ?>
            <li>
                <?php echo "Ik ben $x jaar, dus ik mag nog niet stemmen <br>"; ?>
            </li>
        <?php } ?>
    </ul>
    <ul>
        <li><?php echo "Ik ben 18 jaar, dus ik heb stemrecht!!!!!" ?></li>
    </ul>
</body>

</html>