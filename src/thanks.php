<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ремонт квартир</title>
  <link rel="stylesheet" href="css/normalize.css">
  <!-- <link rel="stylesheet" href="css/slick.css"> -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <script src="https://api-maps.yandex.ru/2.1/?apikey=<aaf101a9-0636-461e-bde0-300056fac29b>&lang=ru_RU"
    type="text/javascript">
  </script> -->
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-block">
        <div class="navbar__logo">
          <img src="img/logo.png" alt="Логотип">
        </div>
        <div class="navbar__info">
          <div class="navbar__contacts">
            <span class="navbar__address">Калуга, Москва, МО</span>
            <a href="tel:+7(495)42-251-31" class="navbar__phone">+7 (495) 42-251-31</a>
          </div>
          <button class="button navbar__button" id="button">Перезвоните мне</button>
        </div>
      </div>
    </div>
  </nav>
  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">Спасибо за заявку!</h1>
            <span class="hero-text__subtitle">Мы перезвоним через 15 минут</span>
            <ul class="hero-list">
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/clock-circular.png" alt="Часы">
                </div>
                <span class="hero-list__text">Точно соблюдаем сроки</span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/calculator.png" alt="Калькулятор">
                </div>
                <span class="hero-list__text">Рассчитаем смету на работы и&nbsp;материалы в день обращения</span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/paint-board.png" alt="Краски">
                </div>
                <span class="hero-list__text">Предложим более 100 вариантов исполнения дизайна Вашего жилья</span>
              </li>
            </ul>
          </div>
          <!-- /.hero-text -->
          <div class="hero-image">
            <img class="hero-image__pic" src="img/hero/hero-image.png" alt="План квартиры">
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.hero-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->

  </main>
  <footer class="footer">
    <div class="map" id="map">
      <script type="text/javascript" charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A266554c6d9b6678d4dcddc1dd63b8cb7d9ed7b6f69516d457c830edb3c7af95e&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">Приезжайте к нам в гости! Проконсультируем Вас <br>по всем вопросам ремонта</h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/map-placeholder.png" alt="">
              </span> <!-- /.contacts-list__icon -->
              <span class="contacts-list__text">г. Москва<br><strong>ул. Ленина, д. 10, корпус 2, оф. 308</strong></span> <!-- /.contacts-list__text -->
            </li>
            <!-- /.contacts-list__item -->
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/clock-with-face.png" alt="">
              </span> <!-- /.contacts-list__icon -->
              <span class="contacts-list__text">Режим работы:<br><strong>с 9:00 до 18:00</strong></span> <!-- /.contacts-list__text -->
            </li>
            <!-- /.contacts-list__item -->
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/phone-button.png" alt="">
              </span> <!-- /.contacts-list__icon -->
              <span class="contacts-list__text">Телефон:<br><a href="tel:+7(495)42-251-31">+ 7 (495) 42-251-31</a></span> <!-- /.contacts-list__text -->
            </li>
            <!-- /.contacts-list__item -->
          </ul>
          <!-- /.contacts-list -->
        </div>
        <!-- /.contacts -->
      </div>
      <!-- /.contacts-block -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer section -->
  <div class="buttonup" id="buttonup"><img src="img/button-up.png" alt=""></div>

  <!-- <script src="js/main.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/modal.js"></script>
    <script src='js/button.js'></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/validate.js"></script>
    <!-- <script src="js/ya_map.js"></script> -->
    <script>
      // ymaps.ready(init);
      new WOW().init();
      $(document).ready(function(){
        /* Запуск слайдера карусель*/
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          navContainerClass: "portfolio__arrows",
          navClass: ["arrows__left", "arrows__right"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 3
            }
          }
        });
      });
    </script>
    <!-- <script src="js/slick.min.js"></script>
    // <script>
    // $(document).ready(function(){
    //   $('.slider').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     prevArrow: $('.arrows__left'),
    //     nextArrow: $('.arrows__right'),
    //     responsive: [
    //       {
    //         breakpoint: 1200,
    //         settings: {
    //           slidesToShow: 2,
    //           slidesToScroll: 1,
    //         }
    //       },
    //       {
    //         breakpoint: 768,
    //         settings: {
    //           slidesToShow: 1,
    //           slidesToScroll: 1
    //         }
    //       }
    //     ]
    //   });
    // });
    // </script> -->
</body>
</html>