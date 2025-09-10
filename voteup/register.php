<?php
    include "header.php";
    require("WebsiteBackend/database.php");
    $username_regex = '^(?=[a-zA-Z0-9]{8,20}$)[a-zA-Z0-9]+$^';
    $password_regex = '^.{8,50}$^';
    $email_regex = '^[a-zA-Z0-9._%+-]+@(mail.ru|gmail.com)$^';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_encrypt = password_hash($password, PASSWORD_DEFAULT);
    $email = $_POST['email'];

    if (preg_match($username_regex, $username, $user_matches, PREG_OFFSET_CAPTURE)) {

        if (preg_match($password_regex, $password, $pass_matches, PREG_OFFSET_CAPTURE)) {

            if (preg_match($email_regex, $email, $email_matches, PREG_OFFSET_CAPTURE)){
                
            $stmt = $pdo->prepare("INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES (NULL, ?, ?, ?)");
            $stmt->execute([$username, $password_encrypt, $email]);

            header("location: ../index.php");
            } else {
                echo '<script language="javascript">';
                echo 'alert("Адрес электронной почты неверен")';
                echo '</script>';
            }
        }else {
            echo '<script language="javascript">';
            echo 'alert("Ваш пароль должен быть не менее 8 символов")';
            echo '</script>';
            }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Ваше имя пользователя должно быть не менее 8 символов и не превышать 20 символов")';
        echo '</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<body>
    <div class="background">
        <div class="register_container">
            <h1 class="auth_header">Регистрация</h1>
            <p class="auth_desc">◉ Впервые здесь? <br> Заполните поля чтобы зарегистрироваться</p>
            <form action="register.php" method="POST" class="auth_form">
                <h2 class="auth_text">Имя пользователя</h2>
                <input class="auth_input" placeholder="Имя пользователя" type="username" name="username" required='true'>
                <h2 class="auth_text">Пароль</h2>
                <input class="auth_input" placeholder="Пароль" type="password" name="password" required='true'>
                <h2 class="auth_text">Электронная почта</h2>
                <input class="auth_input" placeholder="Электронная почта" type="email" name="email" required='true'>
                <button class="register_button">Зарегистрироваться</button>
                <a href="login.php"><p class="auth_redirect">Уже есть учетная запись?</p></a>
            </form>
        </div>
    </div>

    <?php include "footer.php";?>   
</body>
</html>