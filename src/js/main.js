var button = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');
var submodal = document.querySelector('#submodal');
var closeThanks = document.querySelector('#close-thanks');
var closeModalTimeout = 60000;
var closeTimeoutId;
var $window = $(window);
var $elem = $(".step__image");

button.addEventListener('click', function() {
  modal.classList.add('modal_active');
  closeTimeoutId = window.setTimeout(function () {
    modal.classList.remove('modal_active');
  }, closeModalTimeout);
  window.addEventListener('input', function () {
    window.clearTimeout(closeTimeoutId);
  }, true);
});
close.addEventListener('click', function(){
  modal.classList.remove('modal_active');
});

closeThanks.addEventListener('click', function () {
  submodal.classList.remove('submodal_active');
});

new WOW().init();
$(document).ready(function () {
  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.arrows__left'),
    nextArrow: $('.arrows__right'),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});

$(document).ready(function () {
  /*Валидация модальной формы*/
  $('#modal-form').validate({
    rules: {
      modal_username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      modal_phone: "required"
    },
    errorElement: "em",
    errorClass: "invalid",
    messages: {
      modal_username: {
        required: "<b>Заполните поле</b>",
        minlength: jQuery.validator.format("Осталось ввести символов: {0}!"),
        maxlength: jQuery.validator.format("Слишком много символов! Должно быть меньше: {0}.")
      },
      modal_phone: "<b>Заполните поле</b>"
    },
    submitHandler: function (form) {
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $('#modal-form').serialize(),
        success: function (response) {
          $('#modal-form')[0].reset();
          modal.classList.remove('modal_active');
          submodal.classList.add('submodal_active');
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus);
        }
      });
    }
  });
  /* Валидация формы offer */
  $('#offer-form').validate({
    rules: {
      off_username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      off_phone: "required"
    },
    errorElement: "em",
    errorClass: "invalid",
    messages: {
      off_username: {
        required: "<b>Заполните поле</b>",
        minlength: jQuery.validator.format("Осталось ввести символов: {0}!"),
        maxlength: jQuery.validator.format("Слишком много символов! Должно быть меньше: {0}.")
      },
      off_phone: "<b>Заполните поле</b>"
    },
    submitHandler: function(form) {
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $('#offer-form').serialize(),
        success: function (response) {
          console.log('прибыли данные: ' + response);
          $('#offer-form')[0].reset();
          submodal.classList.add('submodal_active');
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus);
        }
      });
    }
  });
  /* Валидация формы brief */
  $('#brief-form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: "required",
      email: {
        required: true,
        email: true
      }
    },
    errorElement: "em",
    errorClass: "invalid",
    messages: {
      username: {
        required: "<b>Заполните поле</b>",
        minlength: jQuery.validator.format("Осталось ввести символов: {0}!"),
        maxlength: jQuery.validator.format("Слишком много символов! Должно быть меньше: {0}.")
      },
      phone: "<b>Заполните поле</b>",
      email: {
        required: "<b>Заполните поле</b>",
        email: "<i>Введите корректный email</i>"
      }
    },
    submitHandler: function (form) {
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $('#brief-form').serialize(),
        success: function (response) {
          $('#brief-form')[0].reset();
          submodal.classList.add('submodal_active');
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus);
        }
      });
    }
  });
  /* Маска для валидации*/
  $('.phone').mask('8 (999) 999-99-99');
});

/* Кнопка Вверх */

$(document).ready(function () {
  var button = $('#buttonup');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      button.fadeIn();
    } else {
      button.fadeOut();
    }
  });
  button.on('click', function () {
    $('body, html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});

/* Анимация секции steps */

function isScrolledIntoView($elem, $window) {
  var docViewTop = $window.scrollTop();
  var docViewBottom = docViewTop + $window.height();

  var elemTop = $elem.offset().top;
  var elemBottom = elemTop + $elem.height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
$(document).ready(function () {
  $(document).on("scroll", function () {
    if (isScrolledIntoView($elem, $window)) {
      $elem.addClass("step__image--animate");
    }
  });
});

/* Подключение Yandex карты */

setTimeout(function () {
  var elem = document.createElement('script');
  elem.type = 'text/javascript';
  elem.src =
    '//api-maps.yandex.ru/2.0/?apikey=b752e912-ec52-44b1-a92b-062e6dc1fd71&load=package.standard&lang=ru-RU&onload=getYaMap&scroll=false';
  document.getElementsByTagName('body')[0].appendChild(elem);
}, 2000);

function getYaMap() {
  var myMap = new ymaps.Map("map", {
    center: [55.61148, 37.1991033],
    zoom: 15
  });

  ymaps.geocode("Москва, ул. Ленина, 10").then(function (res) {
    var coord = res.geoObjects.get(0).geometry.getCoordinates();
    var myPlacemark = new ymaps.Placemark(coord, { preset: 'twirl#lightblueIcon' });
    myMap.controls.add('smallZoomControl', { 'top': 5, 'smooth': true });
    myMap.geoObjects.add(myPlacemark);
    myMap.setCenter(coord);
  });
}