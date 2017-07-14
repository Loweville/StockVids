<html>
    <head>
		<link rel="stylesheet" type="text/css" href="view/css/style.css">
    </head>
    <body>
        <?php            
            include_once("controller/controller.php");

            $controller = new Controller();
            $controller->invoke();
        ?>
    </body>
</html>