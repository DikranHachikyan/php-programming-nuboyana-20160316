<?php require_once '../includes/site-heading-inc.php'; ?>

<?php

$msg = 'Hello PHP';

function show($a)
{/* Глобалните променливи НЕ СА достъпни по подразбиране във функциите */
    global $msg; //!!!!
    $msg = strtoupper($msg);
    echo '<h1>'.$msg.'</h1>';
}

//show($msg);
show();
?>
<?php



?>
<?php include '../includes/site-footer-inc.php'; 