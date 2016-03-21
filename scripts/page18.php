<?php require_once '../includes/site-heading-inc.php'; ?>

<?php
function show($a)
{
    if( !is_string($a)) return;
    echo '<p>'.$a.'</p>';
}


show(1);
show('Hello PHP');
show(array('a','b','c'));
?>
<?php include '../includes/site-footer-inc.php'; 