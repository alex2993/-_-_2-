<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GORILLAPC</title>
    <link rel="stylesheet" href="profil.css">
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
    <h2>Профиль</h2>
    <article class = "reg">
    <form id="formElem">
    <input type="text" placeholder="Ваше имя" name = "name">
    <input type="text" placeholder="Логин" name = "login">
    <input type="password" placeholder="Пароль" name = "password">
    <input type="text" placeholder="Номер телефона" name = "number">
    <article class="btn">
    <input type="submit"> 
    <style>
        .btn>input {
        background-color: #000;
    color: #fff;
    border-radius: 5px;
    height: 30px;
    color: #fff;
    font-family: "Jura";
    font-size: 20px;
    font-weight: 400;
    border: 2px solid #fff;
    width: 228px;
    margin-top: 20px;
    cursor: pointer;
    align-items: center;
    transition: .2s;
        }
        .btn>input:hover {
    color: #B72424;
}
    </style>
</article>
</form>
</article>
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
    <script src="profil.js"></script>
</body>
</html>