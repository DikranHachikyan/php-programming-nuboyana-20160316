<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 02</title>
</head>
<body>
    <ul>
    <?php
        
        $pages = array('page02.php',
                       'page03.php',
                       'page01.php',
                       'page05-1.php',
                       'page05-2.php');
        
        $pages[ count($pages)] = 'page06.php';
        for( $i=0; $i < count($pages);$i++)
        {
    ?>
            <li><a href="./<?php echo $pages[$i];?>">Page <?php echo $pages[$i];?></a></li>
    <?php               
                   
        }//end for    
    ?>   
        
    </ul>
</body>
</html>
