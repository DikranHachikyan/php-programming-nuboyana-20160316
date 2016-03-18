<?php require_once '../includes/site-heading-inc.php'; ?>
   <form action="" method="get">
       <?php include_once '../includes/dates-inc.php';?>
       <?php include_once '../includes/months-inc.php';?>
       <?php include_once '../includes/years-inc.php';?>
       <input type="submit" value="Провери" >
   </form>
    <?php
        $d = $_GET['dt'];
        $mn = $_GET['mnt'];
        $yr = $_GET['yrs'];
        
        if( !empty($d) && !empty($mn) && !empty($yr)):
            if( checkdate( $mn, $d, $yr) ):
                $tm = mktime(0,0,0, $mn, $d, $yr);
                $date = getdate($tm);
    ?>
            <p>Избраната дата: 
                <?php echo $date['mday'];?>.
                <?php echo $date['mon'];?>.
                <?php echo $date['year'];?>
                е валидна дата и представлява 
                <?php echo $date['yday'];?> ден от годината!
            </p>
             <?php else: ?>
                 <p>Избраните ден, месец и година не са валидна дата</p>
             <?php endif; ?>      
    <?php else:?>
        <p>Изберете дата, месец и година</p>
    <?php endif;?>
<?php include '../includes/site-footer-inc.php'; 