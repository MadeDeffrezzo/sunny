<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNNY | IT-помощь </title>
    <link rel="stylesheet" href="../style/style.css"> 
    <link rel="stylesheet" href="../style/prof.css"> 
    <link rel="stylesheet" href="../style/zak.css"> 
    <link rel="stylesheet" href="../style/settings.css"> 

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
                    <a href="/index.html"><p class="menu-item">Главная</p> </a> 
                   <a href="../pages/profile.html"> <p class="menu-item">Мои заказы</p></a>
                    <a href="../pages/zakaz.html"><p class="menu-item ">Оформить заказ</p></a> 
                    <p class="menu-item vib">Настройки</p>
                    <a href="orders.php"><p class="menu-item">FAQ</p></a> 
                    <a href="logout.php"><p class="menu-item vx">Выйти</p></a>
                </div>
            <div class="spis">
                    <div class="itemzak">
                        <h1>Настройки</h1>
                        <form action="" method="post">
                            <p>Общие</p>
                            <div class="frm-oform">
                               <div class="combo">
                                    <p>Фотография:</p>
                                    <label for="file"><img src="../img/camera 1.png" alt=""></label>
                                    <input type="file" id="file" name="file" accept=".png,.docx,.txt" hidden required/>
                               </div>
                                    <div class="combo">
                                       <p>Логин:</p>
                                        <input type="text" name="" id="" required>
                                    </div>
                                    <div class="combo">
                                        <p>Почта:</p>
                                         <input type="text" name="" id="" required>
                                     </div>
                                    <div class="combo">
                                        <p>Пароль:</p>
                                         <input type="text" name="" id="" required>
                                     </div>

                           <div class="btns">
                            <button>Сохранить</button>
                           </div>
                            </div>
                        </form>
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