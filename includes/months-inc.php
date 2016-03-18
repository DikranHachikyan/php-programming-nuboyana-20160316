<select name="mnt">
    <option value="0">---Месец---</option>
    <?php
        $m = array(1=>'Jan','Feb','Mar','Apr','May','Jun',
                   'Jul','Aug','Sep','Oct','Nov','Dec');
        for($i=1; $i <= count($m);$i++):
    ?>
        <option value="<?php echo $i;?>"><?php echo $m[$i];?></option>
    <?php endfor;?>
</select>