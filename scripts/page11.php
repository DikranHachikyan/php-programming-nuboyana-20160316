<?php require_once '../includes/site-heading-inc.php'; ?>
    <ul>
    <?php
        
        $pages = array('page02.php',
                       'page03.php',
                       'page01.php',
                       'page05-1.php',
                       'page05-2.php');
      
        //echo('Hello');
        //echo 'Hello';
        $pages[ count($pages)] = 'page06.php';
        for( $i=0; $i < count($pages);$i++):
            if( ($i % 2) == 0):    
                include '../includes/li-inc.php';             
            endif;//end if       
        endfor;   
    ?>   
        
    </ul>

<?php include '../includes/site-footer-inc.php'; 