
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
        background-color: <?php echo $_POST["achtergrondkleur"]; ?>;
        }

        table,
        th,
        tr,
        td {
            color: <?php echo $_POST["tekstkleur"] ?>;
            border: <?php echo $_POST["border"] ?> solid;
            padding: <?php echo $_POST["padding"] ?>;
        }
    </style>

    <?php $mijnGegevens = array("Naam" => "Alisha", "Leeftijd" => "16", "Klas" => "0A", "Muziek" => "Indie Pop", "Woonplaats" => "Uithoorn"); ?>
    <?php function maakRij($key, $waarde)
    {
        echo   "<tr>
            <td>
               $key
            </td>
            <td>
               $waarde
            </td>
        </tr>";
    }
    ?>
    <table>
        <tbody>
            <?php foreach ($mijnGegevens as $key => $waarde) : ?>
                <?php maakRij($key, $waarde); ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>