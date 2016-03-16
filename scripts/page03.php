<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 02</title>
</head>
<body>
   <?php
        $userName = 'Петър';
    ?>
    <h1>Здравей <?php echo $userName; ?></h1>
    <?php
        $price = 12.5;
        echo "<p>Цена на продукта е $price лв.</p>"
    ?>
    <?php
        $price = 12.5;
        echo '<p>Цена на продукта е $price лв.</p>';
    ?>
    <?php
        $price = 12.5;
        echo '<p>Цена на продукта е '.($price + 2.2).' лв.</p>';
    ?>
        <?php
        $price = 12.5;
        echo "<p>Цена на продукта е ${price}BGN.</p>"
    ?>   
</body>
</html>
