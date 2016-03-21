<?php require_once '../includes/site-heading-inc.php'; ?>

<?php



function show()
{
    static $m;
    $m++;
    echo '<p>'.($m).'</p>';
}

show();
show();
show();
?>
<?php



?>
<?php include '../includes/site-footer-inc.php'; 