<html>
    <?php $class = mysql_connect('mysql', 'tugboat', 'tugboat') ? 'ok' : 'error'; ?>
    <head>
        <title>Tugboat Test Page</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="<?php echo $class ?>">
        <img src="logo.svg" alt="Tugboat Logo">
    </body>
</html>
