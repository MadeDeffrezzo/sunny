<?php 

include ("../components/footer.php");

session_start(); // Начинаем сессию

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Выполняем запрос к базе данных
    $users = $conn->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    if ($users->num_rows > 0) {
        $user = $users->fetch_assoc(); // Получаем данные пользователя
        $_SESSION['user_id'] = $user['id']; // Сохраняем ID пользователя в сессии
        $_SESSION['email'] = $user['email']; // Сохраняем логин пользователя в сессии
        header('Location: profile.php');
        exit();
    } else {
        $error = "Неверный логин или пароль.";  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNNY | IT-помощь </title>
    <link rel="stylesheet" href="../style/style.css"> 
    <link rel="stylesheet" href="../style/log.css"> 
</head>
<body>
    <header>
        <div class="header-left">
            <span class="company-name"><img src="../img/SUNNY.svg" alt=""></span>
        </div>
        <nav class="header-middle">
            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Цены</a></li>
            </ul>
        </nav>
    </header>

<section id="login">

<form method="post" class="log">
    <p>Вход</p>
    <input type="text" placeholder="Email" id="email" name="email" required>
    <input type="text" placeholder="Пароль" id="password" name="password" required>
    <p>У вас нет аккаунта? <a href="../pages/reg.php">Зарегистрироваться</a></p>
    <button type="submit">Войти</button>
</form>

<img src="../img/robert.png" alt="" class="robert">
</section>

    <footer>
        <div class="box-half">
            <div class="txt-ftr">
                    <h1>Контакты</h1>
                    <p>Телефон: +7 (965) 985-38-63</p>
                    <p>Адрес: </p>
                    <p>E-mail:</p>
            </div>
                <div class="half">
                            <h3>Условия</h3>
                    <p>Политика конфиденциальности</p>
                    <p>Пользовательское соглашение</p>   
                </div>
        
        </div>
                <div class="box-ftr">
                <img src="../img/logo1.png" alt="">
                    <div class="logo-ftr">
                            <img src="../img/Telegram.png" alt="" class="img-logo-ftr">
                            <img src="../img/WhatsApp.png" alt="" class="img-logo-ftr">
                            <img src="../img/VK Circled.png" alt="" class="img-logo-ftr">
                    </div>
                </div>
        </footer>
</body>
</html>