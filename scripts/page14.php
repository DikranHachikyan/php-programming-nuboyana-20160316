<?php require_once '../includes/site-heading-inc.php'; ?>
   <?php
        $txt = 'Иван#Петров#ip@no.com#100#София';
        $res = explode('#',$txt);
   ?>
   <pre><?php print_r($res);?></pre>
   <hr>
   <?php
        $txt = implode('|',$res);
        echo $txt;
   ?>
<?php include '../includes/site-footer-inc.php'; 