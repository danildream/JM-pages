<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Главная - Севастополь</title>

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="media.css" rel="stylesheet">


</head>

<body>
<header class="container">
    <nav class="navbar navbar-expand-md p-md-0 row">
        <a class="logo col-6 col-sm-4 col-md-2 pl-md-0" href="#"> <img src="img/logo.png" alt=""></a>
        <button class="navbar-toggler pr-3" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <img src="img/menu-button.png" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav col-sm col-md-10">
                <a class="nav-item nav-link col-sm" href="index.php">Главная</a>
                <a class="nav-item nav-link col-sm" href="about.php">О проекте</a>
                <a class="nav-item nav-link col-sm" href="last_materials.php">Материалы</a>
                <a class="nav-item nav-link col-sm" href="experts.php">Эксперты</a>
                <a class="nav-item nav-link col-sm" href="contacts.php">Контакты</a>
            </div>

            <div class="col-sm col-md-2 p-0 my-sm-1 text-center">
                <!-- // d-md-flex align-items-center p-0 row -->
                <div class="row">
                    <div class="col-md-8 col-sm-12 lang">
                        <button class="btn btn-secondary dropdown-toggle h5 float-md-right" type="button"
                                id="dropdownLangButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            RU
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownLangButton">
                            <div class="d-flex justify-content-center">
                                <div class="item-lang"><a class="dropdown-item" href="#">EN</a></div>
                                <div class="item-lang"><a class="dropdown-item" href="#">DE</a></div>
                                <div class="item-lang"><a class="dropdown-item" href="#">FR</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pr-0 px-0 search">
                        <button class="btn btn-secondary" type="button" data-toggle="collapse"
                                data-target="#collapseSearch" aria-expanded="false">
                            <img src="img/search.png" alt="">
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>

<div class="collapse search" id="collapseSearch">
    <div class="container">
        <input class="form-control" placeholder="Введите запрос и нажмите Enter" aria-label="Search"
           type="text">
        <button class="btn btn-secondary" type="button" data-toggle="collapse"
                data-target="#collapseSearch" aria-expanded="false">
            <img src="img/close.png" alt="">
        </button>
    </div>
</div>

<main role="main">
    <div class="contacts-page container p-md-0">
        <div class="row pt-5">
            <div class="left-column-title col-md-2 p-md-0 mr-5">
                <h1>Контакты</h1>
            </div>
            <div class="right-column-content col-md-9 p-md-0 ml-4">
                <span class="row">
                    <span class="contacts-title col-md-2">Адрес</span>
                    <span class="contacts-text col-md-10">299053, г. Севастополь, ул. Университетская, 33</span>
                </span>
                <span class="row">
                    <span class="contacts-title col-md-2">Почта</span>
                    <span class="contacts-text col-md-10">mail@domen.ru</span>
                </span>
                <span class="contacts-title p-md-0">Напишите нам</span>
                <form>
                    <div class="form-group col-md-5 p-md-0">
                        <input type="text" class="form-control mt-4" name="name" placeholder="Введите ваше имя">
                        <input type="email" class="form-control" placeholder="Введите ваш email">
                        <input type="text" class="form-control" placeholder="Введите тему письма">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите ваше сообщение"></textarea>
                        <button type="submit" class="btn btn-primary submit-button float-left">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="row footer-nav">
                <div class="footer-nav-left col-md col-lg-9 d-none d-md-block">
                        <a class="footer-nav--item footer-nav--link col-md" href="#">Главная</a>
                        <a class="footer-nav--item footer-nav--link col-md" href="#">О проекте</a>
                        <a class="footer-nav--item footer-nav--link col-md" href="#">Материалы</a>
                        <a class="footer-nav--item footer-nav--link col-md" href="#">Эксперты</a>
                        <a class="footer-nav--item footer-nav--link col-md" href="#">Контакты</a>
                </div>
                <div class="footer-nav-right col-md col-lg-3 d-none d-md-block">
                        <a class="footer-nav--item footer-nav--link col-md" href="#">СевГУ</a>
                        <a class="footer-nav--item footer-nav--link col-md" href="#">НОЦ МПИБС</a>
                </div>
            </div>

<!--            mobile footer menu-->

            <div class="row footer-nav d-md-none">
                    <a class="footer-nav--item footer-nav--link col-md" href="#">Главная</a>
                    <a class="footer-nav--item footer-nav--link col-md" href="#">О проекте</a>
                    <a class="footer-nav--item footer-nav--link col-md" href="#">Материалы</a>
                    <a class="footer-nav--item footer-nav--link col-md" href="#">Эксперты</a>
                    <a class="footer-nav--item footer-nav--link col-md" href="#">Контакты</a>
                    <a class="feedback col-md" href="#">Обратная связь</a>
                    <a class="footer-nav--item footer-nav--link col-md" href="#">СевГУ</a>
                    <a class="footer-nav--item footer-nav--link col-md" href="#">НОЦ МПИБС</a>
            </div>

            <hr>
            <div class="footer-info row">
                <p class="copyright col-lg-5 col-md">© Геостратегический атлас Большого Средиземноморья, 2018</p>
                <a class="feedback col-lg-2 col-md d-none d-md-block" href="#">Обратная связь</a>
                <a class="developedby col-lg-5 col-sm" href="#">
                    <img src="img/jm-logo.png" width="214" height="19" alt="">
                </a>
            </div>
        </div>
    </footer>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="plugins/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>

<!--    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.2/slick/slick.min.js"></script>-->
<script src="plugins/slick/slick.js"></script>
<script type="text/javascript">
    $('.slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        rows: 1,
        centerMode: true,

        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });

</script>

</body>
</html>
