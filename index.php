<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <?php
        $page = $_GET["page"];
        if (!isset($page)) {
            require("templates/headerBanner.php");
        }
        else {
            require("templates/header.php");
        }
        ?>
        <div class="wrapper">
            <?php
            $page = $_GET["page"];
            if (!isset($page)) {
                require("templates/main.php");
            }
            else if ($page == "catalog") {
                require("templates/catalog.php");
            }
            else if ($page == "contacts") {
                require("templates/contacts.php");
            }
            else if ($page == "product") {

            }
            ?>
        </div>
        <footer>
            <hr>
            <div class="wrapper">
                <p>&copy; &quot;Все права защищены&quot;</p>
            </div>
        </footer>
    </body>
</html>