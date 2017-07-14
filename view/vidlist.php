<!DOCTYPE html>
<html>
    <head></head>

    <body>

        <article id="list">
            <?php

                foreach ($vids as $name => $vid)
                {  
                    echo "<a href='index.php?video=".$vid->name."'><div>".$vid->name."<p id='description'>".$vid->desc."</p><p id='duration'>Duration: ".$vid->dur."</div></a>";
                }  
            ?>
        </article>
    </body>
</html>