<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="ru">
<body>
    <div class="background">
        <div class="login_container">
            <h1 class="auth_header">Войти в учетную запись</h1>
            <p class="auth_desc">◉ Введите имя и пароль <br> учетной записи чтобы войти</p>
            <form action="WebsiteBackend/login_handle.php" method="POST" class="auth_form">
                <h2 class="auth_text">Имя пользователя</h2>
                <input class="auth_input" placeholder="Имя пользователя" type="username" name="username" required='true'>
                <h2 class="auth_text">Пароль</h2>
                <input class="auth_input" placeholder="Пароль" type="password" name="password" required='true'>
                <button class="login_button" type="submit">Войти</button>
                <a href="register.php"><p class="auth_redirect">Впервые здесь?</p></a>
            </form>
        </div>
    </div>

    <?php include "footer.php";?>
</body>
</html>