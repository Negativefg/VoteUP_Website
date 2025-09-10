<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="ru">
<body>
    <div class="background">
        <div class="post_container">
            <h1 class='auth_header'>Создать новый опрос</h1>
            <br>
            <form action="register.php" method="POST" class="auth_form">
                <h2 class="post_text">Название опроса</h2>
                <input class="auth_input" placeholder="Название опроса" type="username" name="username" required='true'>
                <h2 class="post_text">Описание</h2>
                <input class="auth_input" placeholder="Описание" type="password" name="password" required='true'>
                <h2 class="post_text">Изображение</h2>
                <input type="file" class="post_image_button">
                <br>
                <input class="post_input" placeholder="Вариант 1" type="text" name="variant1" required='true'>
                <input class="post_input" placeholder="Вариант 2" type="text" name="variant1" required='true'>
                <input class="post_input" placeholder="Вариант 3" type="text" name="variant1" required='true'>
                <input class="post_input" placeholder="Вариант 4" type="text" name="variant1" required='true'>

                <button class="register_button">Опубликовать</button>
            </form>
        </div>
    </div>
    <?php include "footer.php";?>
</body>
</html>