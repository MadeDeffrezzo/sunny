<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNNY | IT-помощь </title>
    <link rel="stylesheet" href="../style/style.css"> 
    <link rel="stylesheet" href="../style/prof.css"> 
    <link rel="stylesheet" href="../style/zak.css"> 

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
                <p class="menu-item vib">Оформить заказ</p>
                <a href="../pages/settings.html"><p class="menu-item">Настройки</p></a> 
                <a href="orders.php"><p class="menu-item">FAQ</p></a> 
                <a href="logout.php"><p class="menu-item vx">Выйти</p></a>
            </div>
            <div class="spis">

                    <div class="itemzak">

                        <h1>Офоромить заказ</h1>
                        <form action="" method="post">
                            <div class="frm-oform">
                                <select name="" id="" required>
                                    <option selected disabled>Выберите вид работы</option>
                                    <option value="sydney">чат-бот</option>
                                    <option value="melbourne">CRM-система</option>
                                </select>
                            <input type="text" name="" id="" placeholder="Введите название проекта" required>
                            <label for="file">Загрузите ТЗ <img src="../img/download.png" alt=""></label>
                            <input type="file" id="file" name="file" accept=".doc,.docx,.txt" hidden required/>
                            <p><a href="https://docviewer.yandex.ru/view/1857448138/source?url=https%3A%2F%2Fwebcn.ru%2Fwp-content%2Fuploads%2F2018%2F02%2F%25D0%25A8%25D0%25B0%25D0%25B1%25D0%25BB%25D0%25BE%25D0%25BD-%25D0%25A2%25D0%25B5%25D1%2585%25D0%2597%25D0%25B0%25D0%25B4%25D0%25B0%25D0%25BD%25D0%25B8%25D1%258F-%25D0%25A2%25D0%2597.pdf&ts=1956b2e99e2&token=xsb1aFCXIIrUUKHjRL4FRQ%3D%3D&name=Шаблон-ТехЗадания-ТЗ.pdf&dsid=545cfb1b98207dda896fd9f89492264a" download><span style="cursor: pointer;">Шаблон ТЗ</span></a></p>
                           <div class="btns">
                            <button>Отправить заявку</button>

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