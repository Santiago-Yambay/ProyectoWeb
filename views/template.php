<html>
<head>
    <meta charset="UTF-8">
    <title>Universidad</title>
    <link rel=StyleSheet href="css/template.css" typr="text/css">
</head>

    <body>

        <header>
        <h1>LOGOTIPO</h1>
        </header>
         
        <?php
            include "modules/navigation.php";
        ?>
        <section>
        <?php
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
        ?>
        </section>
    </body>
</html>
