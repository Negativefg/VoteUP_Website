<?php
    include "header.php";
    require("WebsiteBackend/database.php");

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    }

?>
<!DOCTYPE html>
<html lang="ru">
<body>
    <div id="content_container">
        <?php
            $stmt = $pdo->prepare('SELECT content_id FROM content');
            $stmt->execute();
            $content = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            for ($i=0; $i < 10; $i++) { 
                ?> <div class='content'>
                    <img class='content_image' src='Images/logo_square.svg'>
                </div> <?php    
            }
        ?>
    </div>
    <div class="footer_container">
        <?php include "footer.php";?>
    </div>
</body>
</html>