<?php

include ("../components/footer.php");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNNY | IT-помощь </title>
    <link rel="stylesheet" href="../style/style.css"> 
    <link rel="stylesheet" href="../style/log.css"> 
    <link rel="stylesheet" href="../style/prof.css"> 
</head>
<body>
    <header>
        <div class="header-left">
            <span class="company-name"><img src="../img/SUNNY.svg" alt=""></span>
        </div>
    </header>

    <section>

        <div class="boxmain">
            <div class="profile-container">
                <img src="../img/img-av.png" alt="">
                    <p class="pz">Пользователь</p>      
                    <p class="pz">login_name</p>
                    <p class="pz">email_name@gmail.com</p> 
                    <a href="/index.html"><p class="menu-item ">Главная</p>
                    <p class="menu-item vib">Мои заказы</p></a>
                    <a href="../pages/zakaz.html"><p class="menu-item ">Оформить заказ</p></a> 
                    <a href="../pages/settings.html"><p class="menu-item">Настройки</p></a> 
                    <a href="orders.php"><p class="menu-item">FAQ</p></a> 
                    <a href="logout.php"><p class="menu-item vx">Выйти</p></a>
                </div>
            <div class="spis">

                    <div class="itemzak">
                        <div class="info-zakaz">
                                <h3>Заказ № 115 от 2 янв 2025 г.</h3>
                            
                        </div>
                        <div class="txt-info-zakaz">
                            <p><span>Название: </span></p>
                            <p class="pz">чат-бот "рассылка"</p>
                        </div>

                        <div class="graf">
        <div class="timeline">
            <div class="line"></div>     
            <div class="shape-container">
                <div class="status-label">Заказ принят</div>
                <div class="vp square"></div>
            </div>
    
            <div class="shape-container">
                <div class="status-label">Оплачен</div>
                <div class="vp circle"></div>
            </div>
    
            <div class="shape-container">
                <div class="status-label">В разработке</div>
                <div class="vp circle"></div>
            </div>
    
            <div class="shape-container">
                <div class="status-label">Выполнение правок</div>
                <div class="nv circle"></div>
            </div>
    
            <div class="shape-container">
                <div class="status-label">Завершен</div>
                <div class="vp square"></div>
            </div>
        </div>
    </div>
    
            <div class="info-zakaz">
            <div class="txt-info-zakaz">
                    <p><span>Последнее изменение:</span></p>
                    <p>fadsf</p>
                    
                </div>
                <div class="txt-info-zakaz">
                    <p><span>Статус:</span></p>
                    <p>info-zakaz</p>
                </div>
            </div>
                <div class="btns-infoz">
                    <button><img src="../img/download.png" alt="">Скачать отчет</button>
                    <button><img src="../img/nitif.png" alt="">Чат с разработчиком</button>
                </div>
        </div>

        </div>
        </div>  
    
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