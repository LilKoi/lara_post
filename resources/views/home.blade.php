<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
    <div class="wrapper-auth">
        <button class="close-auth">
            <i class="fas fa-times"></i>
        </button>
        <form action="#" class="container">
            <input type="text" name="login" placeholder="Логин">
            <input type="text" name="password" placeholder="Пароль">
            <input type="submit" value="Авторизироваться">
        </form>
    </div>
    <div class="wrapper-reg">
            <button class="close-reg">
                <i class="fas fa-times"></i>
            </button>
            <form action="#" class="container">
                <input type="text" name="login" placeholder="Имя">
                <input type="text" name="surname" placeholder="Фамилия">
                <input type="text" name="email" placeholder="Почта">
                <input type="text" name="login" placeholder="Логин">
                <input type="text" name="password" placeholder="Пароль">
                <input type="submit" value="Зарегистрироваться">
            </form>
    </div>
    <header class="header container">
        <div class="logo">
            <a href="#" class="logo__text">MINIMO</a>
        </div>
        <div class="wrapper-menu">
            <ul class="menu">
                <li class="menu__menu-item"><a href="#">Главная</a></li>
                <li class="menu__menu-item"><a href="#">Категории</a></li>
                <li class="menu__menu-item auth"><a href="#">Авторизация</a></li>
                <li class="menu__menu-item reg"><a href="#">Регистрация</a></li>
            </ul>
        </div>
    </header>
    <main class="main">
        <div class="main-image container">
            <img class="main-image__image" src="./img/image.png" alt="">
        </div>
        <div class="news container">
            <div class="hot-news">
                <span class="hot-news__category">PHOTODIARY</span>
                <h1 class="hot-news__title">The perfect weekend getaway</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <button class="hot-news__comment">
                    LEAVE A COMMENT
                </button>
            </div>
            <div class="wrapper-news">

                <div class="news">
                    <img class="news__image" src="./img/image1.png" alt="">
                    <span class="news__category">LIFESTYLE</span>
                    <h1 class="news__title">More than just a music festival </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
                <div class="news">
                    <img class="news__image" src="./img/image1.png" alt="">
                    <span class="news__category">LIFESTYLE</span>
                    <h1 class="news__title">More than just a music festival </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
            </div>
        </div>
        <div class="wrapper-email-sends">
            <div class="container">
                <h1>Sign up for our newsletter!</h1>
                <form action="">
                    <input type="text" name="email" id="email" placeholder="Enter a valid email address">
                </form>
            </div>
        </div>
        <div class="news container">
            <div class="wrapper-news">
                <div class="news">
                    <img class="news__image" src="./img/image1.png" alt="">
                    <span class="news__category">LIFESTYLE</span>
                    <h1 class="news__title">More than just a music festival </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
                <div class="news">
                    <img class="news__image" src="./img/image1.png" alt="">
                    <span class="news__category">LIFESTYLE</span>
                    <h1 class="news__title">More than just a music festival </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
                <div class="news">
                    <img class="news__image" src="./img/image1.png" alt="">
                    <span class="news__category">LIFESTYLE</span>
                    <h1 class="news__title">More than just a music festival </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
                <div class="news">
                    <img class="news__image" src="./img/image1.png" alt="">
                    <span class="news__category">LIFESTYLE</span>
                    <h1 class="news__title">More than just a music festival </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
            </div>
        </div>
        <div class="wrapper-load-more container">
            <form action="">
                <input type="submit" value="Load more">
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="wrapper-footer-left-menu">
                <ul class="menu">
                    <li class="menu__menu-item">Terms and conditions</li>
                    <li class="menu__menu-item">Privacy</li>
                </ul>
            </div>
            <div class="wrapper-footer-right-menu">
                <ul class="menu">
                    <li class="menu__menu-item">Follow</li>
                    <li class="menu__menu-item"><i class="fab fa-facebook-f"></i></li>
                    <li class="menu__menu-item"><i class="fab fa-twitter"></i></li>
                    <li class="menu__menu-item"><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>