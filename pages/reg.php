<?php 

include ("../components/footer.php");


if($_POST){
    $users = $conn->query("SELECT * FROM `users` WHERE `email` = '{$_POST['email']}'");

    if ($users->num_rows == 0) {
        $conn->query("INSERT INTO `users` 
        (`fullname`, `email`, `login`, `password`)
        VALUES(
        '{$_POST['fullname']}',
        '{$_POST['email']}',
        '{$_POST['login']}',
        '{$_POST['password']}'
        )");
    } else {
        $error = "Такой email уже существует!";   
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

<form action="" method="post" class="log">
    <p>Регистрация</p>
    <input type="text" id="fullname" name="fullname" placeholder="fullname" required>
    
    <input type="email" id="email" name="email" placeholder="Email" required>
    
    <input type="text" id="login" name="login" placeholder="Логин" required>

    <input type="password" id="password" name="password" placeholder="Пароль" required>


    <button type="submit">Зарегистрироваться</button>

    <p>Уже зарегистрированы? <a href="/pages/login.php">Войти</a></p>

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