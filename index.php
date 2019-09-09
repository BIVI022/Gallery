<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            border: 1px solid black;
        }
        
       img {
            width: 300px;
            height: 250px;
        }
</style>
</head>
<body> 
    <?php
        $getImages = scandir("images");
        unset($getImages[0], $getImages[1]);
        $i = 0;
        function newString() { ?>
            <tr></tr>
            <?php };
    ?>
    <table>
        
            <?php      
                foreach ($getImages as $img) {
                    $i = ($i+1)%5;
                    if ($i == 0) { ?>
                        <td>
                            <img src=<?php echo"images/".$img?> alt="photo">
                        </td>
                       
                       <?php newString();
                        
                        
                    } else {?>
                        <td>
                            <img src=<?php echo"images/".$img?> alt="photo">
                        </td>
                    <?php  }}?>
    </table> 
</body>
</html>