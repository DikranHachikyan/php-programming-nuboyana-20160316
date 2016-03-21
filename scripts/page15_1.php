<?php require_once '../includes/site-heading-inc.php'; ?>
<?php
function html_heading($hn=1,$msg='Default Message'){
?>
    <h<?php echo $hn;?>><?php echo $msg;?></h<?php echo $hn;?>>
<?php   } ?>
<?php

function show($a=1,$b)
{
    
}


?>
<?php

html_heading(1,'Gallery');
html_heading(2,'Christchurch NZ');

html_heading();
html_heading(3);
html_heading(3,'Millennium Monument');

?>
<?php include '../includes/site-footer-inc.php'; 