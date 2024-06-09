<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=V, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <p>Nilai variabel integer = <?= $mydata ?></p>
    <?php
        foreach ($myarray as $item) {
            echo "<p>Anime favorit $item</p>";
        }
    ?>

</body>
</html>