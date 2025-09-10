<?php

$post = $_POST;
$get = $_GET;

if ($_POST) {
    var_dump($post);
    echo ('<br>' . "POST REQUEST");
    echo ('<br>');
    print("Username: " . $_POST['username'] . " Password: " . $_POST['password']);
    echo ('<br>');
    if ($_POST['review'] === "1"){
        print ("Положительный отзыв " . $_POST['game1'] . " " . $_POST['game2'] . " " . $_POST['game3']);
    }elseif ($_POST['review'] === "0"){
        print ("Отрицательный отзыв " . $_POST['game1'] . " " . $_POST['game2'] . " " . $_POST['game3']);
    }
    echo ("<br>");
    print($_POST["desc"]);
} elseif ($_GET) {
    var_dump($get);
    echo ('<br>' . "GET REQUEST");
};