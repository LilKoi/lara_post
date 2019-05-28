<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
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
    <main class="main container">
        <div class="wrapper-profile">
            <div class="info">
                <div class="info__image">
                    <img src="https://pp.userapi.com/c840321/v840321984/56a0e/yc5yBc3bmiM.jpg" alt="">
                </div>
                <div class="info__content">
                    <div class="name">
                        <h1>Ruslan Shevcov</h1> <small>rshblet</small>
                    </div>
                    <div class="year">
                        <span>16 лет,</span>
                        <span>Россия/Омск</span>
                    </div>
                    <div class="count-time">
                        <span>1 день в сервисе</span>
                    </div>
                    <div class="count-posts">
                            <span>152 поста</span>
                        </div>
                    <div class="online">
                        <span>Online</span>
                    </div>
                    <!-- <div class="offline">
                        <span>Offline</span>
                    </div> -->
                </div>
            </div>
            <div class="change">
                <form action="">
                    <button>Изменить информацию</button>
                </form>
            </div>
        </div>
        <div class="wrapper-posts">
            <h3>Посты:</h3>
            <div class="posts row">
                <div class="post col-lg-3 col-md-4 col-sm-6 col-12">
                    <img class="post__image" src="./img/image1.png" alt="">
                    <span class="post__category">LIFESTYLE</span>
                    <h4 class="post__title">More than just a music festival </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
                <div class="post col-lg-3 col-md-4 col-sm-6 col-12">
                    <img class="post__image" src="./img/image1.png" alt="">
                    <span class="post__category">LIFESTYLE</span>
                    <h4 class="post__title">More than just a music festival </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
                <div class="post col-lg-3 col-md-4 col-sm-6 col-12">
                    <img class="post__image" src="./img/image1.png" alt="">
                    <span class="post__category">LIFESTYLE</span>
                    <h4 class="post__title">More than just a music festival </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                </div>
                <div class="post col-lg-3 col-md-4 col-sm-6 col-12">
                    <img class="post__image" src="./img/image1.png" alt="">
                    <span class="post__category">LIFESTYLE</span>
                    <h4 class="post__title">More than just a music festival </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
               </div>    
            </div>
        </div>
        <div class="wrapper-form-create-post">
            <h3>Создать пост</h3>
            <form action="{{ action('PostController@post') }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="Имя поста">
                <textarea name="description" id="" cols="30" rows="10" placeholder="Текст"></textarea>
                <input type="submit" value="Создать пост">
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
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>