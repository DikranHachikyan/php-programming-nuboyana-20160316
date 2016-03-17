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
        if(true)
        {
            
        }
        
        $pages[ count($pages)] = 'page06.php';
        for( $i=0; $i < count($pages);$i++):
            if( ($i % 2) == 0):    
                
    ?>
            <li><a href="./<?php echo $pages[$i];?>">Page <?php echo $pages[$i];?></a></li>
    <?php               
            endif;//end if       
        endfor;   
    ?>   
        
    </ul>
</body>
</html>
