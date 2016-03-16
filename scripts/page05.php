<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 02</title>
</head>
<body>
<form action="" method="get">
    <label>Сума:<input type="text" name="amount"></label><br>
    <select name="currency">
        <option>---Валута---</option>
        <option value="eur">EUR</option>
        <option value="usd">USD</option>
    </select>
    <br>
    <input type="submit" value="Изчисли">
</form>
<?php
    $amnt = $_GET['amount'];
    $crn  = $_GET['currency'];
    
    if( !empty($amnt) && !empty($crn) )
    {
        switch( $crn )
        {
            case 'eur': echo '<p>'.$amnt.' BGN = '.($amnt/1.95).'EUR</p>';
                        break;
            case 'usd': echo '<p>'.$amnt.' BGN = '.($amnt/1.7).'USD</p>';
                        break;
            default: echo '<p>Избраната валута не се подържа!</p>';
        }
        
    }
    else
    {    
        echo '<p>Въведете сума и изберете валута!</p>';
    }
?>
</body>
</html>
