<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 02</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
    <?php
        foreach( $_SERVER as $k=>$v )
        {
    ?>
        <tr>
            <td><?php echo $k;?></td>
            <td><?php echo $v;?></td>
        </tr>
    <?php           
        }
    ?>    
    </table>
</body>
</html>
