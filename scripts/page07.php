<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 02</title>
</head>
<body>
    <ul>
    <?php
        $i=0;
        $pages = array('page02.php',
                       'page03.php',
                       'page01.php',
                       'page05-1.php',
                       'page05-2.php');
        
        $pages[ count($pages)] = 'page06.php';
        while( $i < count($pages))
        {
    ?>
            <li><a href="./<?php echo $pages[$i];?>">Page <?php echo $pages[$i];?></a></li>
    <?php               
            $i++;       
        }//end while    
    ?>   
        
    </ul>
</body>
</html>
