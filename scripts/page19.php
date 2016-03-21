<?php require_once '../includes/site-heading-inc.php'; ?>

<?php

function sanitize($a)
{
    $a = strip_tags($a);
    $a = escapeshellcmd($a);
    
    return $a;
}

?>
<form >
    <label>Text<input type="text" name="txt"></label>
    <input type="submit" value="Send">
</form>
<?php
echo sanitize($_GET['txt']);
?>
<?php include '../includes/site-footer-inc.php'; 