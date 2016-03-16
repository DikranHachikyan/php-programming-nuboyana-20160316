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
            case 'eur':
   ?>                
                <p><?php echo $amnt;?> BGN = <?php echo ($amnt/1.95);?>EUR</p>
   <?php                       
                        break;
            case 'usd': 
    ?>
                <p><?php echo $amnt;?> BGN = <?php echo ($amnt/1.7)?> USD</p>
    <?php
                        break;
            default: 
    ?>            
                 <p>Избраната валута не се подържа!</p>
    <?php            
        } //end of switch
        
    }
    else
    {    
    ?>        
                  <p>Въведете сума и изберете валута!</p>
    <?php    
    } //end of if ... else
?>
</body>
</html>
