<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 02</title>
</head>
<body>
   <?php
        $userLang = 'en';
        $siteLangs = array('en','bg','de','fr');
        $key = array_search($userLang, $siteLangs);
        
        if( $key !== false)
        {    
            echo '<p>'.$userLang.' се подържа от сайта('.$key.')</p>';
        }
        else
        {    
            echo '<p>'.$userLang.' не се подържа от сайта</p>';
        }
    ?>
</body>
</html>
