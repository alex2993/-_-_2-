<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GORILLAPC</title>
    <link rel="stylesheet" href="korzina.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/PC_icon.png">
</head>
<body>
<header>
        <a href="glav.php" id="name1">GORILLA<span>PC</span></a>
        <a href="PC.php">ПК</a>
        <a href="#">Моноблоки</a>
        <a href="#">Ноутбуки</a>
        <a href="#" id="last">Мониторы</a>
        <a href="korzina.php"><img src="imgs/korzina.svg"></a>
        <a href="index.php">Профиль</a>
    </header>
    <section class="block">
        <main id="main"></main>
        <section class="buy">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Номер телефона">
            <button type="submit" id="btn">Оформить заказ</button>
        </section>
        <section class="topnav">
        <article id="myModal" class="modal">
                <article class="modal_content">
                    <span class="close">&#10006</span>
                    <p>Ваш заказ оформлен!</p>                   
                        <article class="input_2">
                         <button><a href="glav.php" id="cl">На главную</a></button>
                        </article>
                </article>
            </article>
            </section>
    </section>
    <style>
     .modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding: 200px 530px;
}
.modal_content {
    width: 600px;
    height: 300px;
    background-color: #000;
}
.close {
    font-size: 30px;
    float: right;
    color: #fff;
    margin-right: 5px;
    transition: .2s;
}
.close:hover {
    color: #B72424;
    text-decoration: none;
    cursor: pointer;
    
}

.modal_content>p {
    font-size: 24px;
    font-weight: 500;
    font-family: 'Jura';
    color: #fff;
    margin: 13px 0px 0px 170px;
    padding-top: 50px;
    padding-bottom: 30px;
    white-space: nowrap;
}
button>a {
    color: #ffff;
    padding: 0px;
    font-size: 24px;
    font-family: 'jura';  
    text-decoration: none;
    transition: .2s;
}

button>a:hover {
    color: #B72424;
}

button {
    width: 212px;
    height: 40px;
    border-radius: 6px;
    background-color: #0F0F0F;
    color: #ffff;
    border: 1px solid #ffff;
    padding: 6px 10px;
    margin-top: 13px;
    margin-left: 190px; 
}
    </style>
    <script> 
    let modal = document.getElementById('myModal');
    let btn = document.getElementById("btn");
    let span = document.getElementsByClassName("close")[0];
    let cl = document.getElementById("cl");

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

cl.onclick = function() {
    localStorage.clear();
}
    </script>
    <footer>
        <section class="nav">
            <a href="glav.php" id="name">GORILLA<span>PC</span></a>
            <a href="#"><img src="imgs/vk_icon_135042 1.svg"></a>
            <a href="#"><img src="imgs/3721672-instagram_108066 1.svg"></a>
            <a href="#"><img src="imgs/facebook_icon_130940 1.svg"></a>
        </section>
        <section class="main">
            <p class="zagolovok">Наша техника</p>
            <a href="PC.php">ПК</a>
            <a href="">Моноблоки</a>
            <a href="">Ноутбуки</a>
            <a href="">Мониторы</a>
        </section>
        <section class="users">
            <p class="zagolovok">Пользователю</p>
            <article class="footer_txt">
                <a href="#">Конфиденциальность</a>
                <a href="#">FAQ</a>
            </article>
        </section>
        <section class="contacts">
            <p class="zagolovok">Контакты</p>
            <p class="numbers">+7 (953) 908-35-77<br>
                Ежедневно с 10:00 до 21:00<br>
                Москва, ул. Складочная 1с10</p>
        </section>
    </footer>
    <script src="korzina.js"></script>
</body>
</html>