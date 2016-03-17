<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 02</title>
</head>
<body>
    <ul>
    <?php
        $i=1;
        while( $i <= 5)
        {
    ?>
            <li><a href="./page0<?php echo $i;?>.php">Page 0<?php echo $i;?></a></li>
    <?php               
            $i++;       
        }//end while    
    ?>   
        
    </ul>
</body>
</html>
