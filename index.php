<style>
        table {
            border: 1px solid black;
            margin: 50px auto;
        }

        img {
            width: 300px;
            height: 250px;
        }
</style>
<table>
        <tr>
            <?php
                $getImages = scandir("images");
                unset($getImages[0], $getImages[1]);
                foreach ($getImages as $img) {?>
                    <td>
                        <img src=<?="images/".$img?> alt="photo">
                    </td>
            <?php }?>
        </tr>
</table>


    
