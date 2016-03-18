<?php require_once '../includes/site-heading-inc.php'; ?>
    <?php
        $tm = mktime(0/*час*/,0/*мин*/,0/*сек*/,3/*мес*/,0/*ден*/,2016/*год*/);
        echo $tm;
    ?>
    <hr>
    <pre>
        <?php  print_r(getdate($tm));  ?>    
    </pre>
    
<?php include '../includes/site-footer-inc.php'; 