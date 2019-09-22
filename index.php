<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
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
                    $format = substr($img, -3);
                    $i = ($i+1)%5;
                    if ($i == 0 & ($format == 'jpg' || $format == 'png' || $format == 'bmp')) { ?>
                        <td>
                            <img src=<?php echo"images/".$img?> alt="photo">
                        </td>
                       
                       <?php newString();                       
                    } else if ($format == 'jpg' || $format == 'Jpg' || $format == 'jPg' || $format == 'jpG' || $format == 'JPG' || $format == 'JPg' || $format == 'JpG' || $format == 'jPG' ||
                               $format == 'png' || $format == 'Png' || $format == 'pNg' || $format == 'pnG' || $format == 'PNG' || $format == 'PNg' || $format == 'PnG' || $format == 'pNG' ||
                               $format == 'bmp' || $format == 'Bmp' || $format == 'bMp' || $format == 'bmP' || $format == 'BMP' || $format == 'BMp' || $format == 'BmP' || $format == 'bMP') 
                               {?>
                        <td>
                            <img src=<?php echo"images/".$img?> alt="photo">
                        </td>
                    <?php  }}?>
    </table> 
</body>
</html>