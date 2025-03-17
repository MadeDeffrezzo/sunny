<?php 

session_start();
$conn = new mysqli("localhost", "root", "", "sunny");


if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>


<footer>
    <div class="topftr">
        <div class="boxtopftr">
            <div class="left-ftr">
                <div class="contacts">
                      <p class="ots">+7 951 400 22 11 </p>
                       <p>index@inbox.com</p>
                </div>
                 <div class="inform">
                        <ul>
                            <li>Акции</li>
                            <li>Преимущества</li>
                            <li>Кто нам доверяет</li>
                            <li>Реквизиты</li>
                     </ul>
                 </div>  
            </div>
           <div class="left-ftr">
             <div class="polit">
                 <p class="ots">Политика обработки персональных данных</p>
                 <p class="ots">Пользовательское соглашение</p>
                 <p>Соглашение для юр.лиц</p>
             </div>
             <div class="obrsv">
                 <button class="ots">Свяжитесь с нами</button>
                 <div class="icon-cont">
                     <img src="img/vk.png" alt="#" >
                     <img src="img/Rectangle15.png" alt="#">
                     <img src="img/Rectangle16.png" alt="#">
                     <img src="img/Rectangle17.png" alt="#">
                 </div>
             </div>
           </div>
        </div>
    </div>

<div class="botftr">
    <div class="middle-ftr">
        <img src="img/rgp1.png" alt="">
<div class="txt-middle">
            <p>2024 © ИП «Пискарёв А.С»</p>
            <p>О защите персональных данных</p>
</div>
    </div>
</div>

</footer>
</body>
</html>