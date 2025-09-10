<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="WebsiteBackend/test_handle.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="checkbox" name="game1" value="No Man's Sky"> No Man's Sky
        <input type="checkbox" name="game2" value="Quasimorph"> Quasimorph
        <input type="checkbox" name="game3" value="Barotrauma"> Barotrauma
        <br>
        <input type="radio" name="review" value="1"> Положительно
        <input type="radio" name="review" value="0"> Отрицательно
        <br>
        <textarea name="desc"></textarea>
        <br>

        <button type="submit">Post</button>
    </form>
    <br>
    <form action="Webpages/test_handle.php" method="GET">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Get</button>
    </form>
    <a href="index.html">Go back to main</a>
</body>
</html>