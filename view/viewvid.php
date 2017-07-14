<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <article>
        <?php 
        
            echo "<video id='vid' controls autoplay>",
                    "<source src='model/videos/".$vid->link."/".$vid->link.".mp4' type='video/mp4'>",
                    "<source src='model/videos/".$vid->link."/".$vid->link.".ogg' type='video/ogg'>",
                    "Browser doesn't support Video element",
                 "</video><br/>";

            // decriptions
            echo "Name: " . $vid->name . "<br/>";
            echo "Description: " . $vid->desc . "<br/>";
            echo "Duration: " . $vid->dur . " Seconds<br/>";
            echo "Tags: " . $vid->tags . "<br/>";
        ?>
        </article>
    </body>
</html>