<html>

<head>
    <title>Курсы</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.cdnfonts.com/css/svn-gilroy" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="shortcut icon" href="images/фавикон 20.png" type="image/png">

    <!-- Анимации -->

    <link rel="stylesheet" href="css/fm.revealator.jquery.css">
    <script src="js/fm.revealator.jquery.js"></script>

    <script type="text/javascript">
        Revealator.scroll_padding = '100';
    </script>
    <script type="text/javascript">
        Revealator.effects_padding = '-400';
    </script>
</head>

<body>
    <div class="wrap">
        <!-- <img style="top: 0; right:0" class="ellipse" src="images/Ellipse 1.png" width="700"> -->
        <div class="header">
            <div class="menu">
                <a href="/">Главная</a>
                <a href="/service">Услуги</a>
                <a style="border-bottom: 1px solid black" href="cource.html">Курсы</a>
                <a href="#contact">Контакты</a>
            </div>
        </div>
        <img style="top: 0; right:0" class="ellipse" src="images/Ellipse 1.png" width="700">
        @foreach ($courses as $course)
            <div class="about revealator-fade revealator-once revealator-duration15">

                <img src="{{ $course->image }}">

                <div class="about-text ">
                    <h2>{{ $course->title }}</h2>
                    <p>{!! $course->descr !!}
                    </p>
                    <p>Стоимость пакета:</p>
                    <p style="margin-bottom: 50px;" class="price">{{ $course->price }} ₽/ МЕС</p>
                    @if (Auth::user())
                    <a href="" class="custom-button form-open course-button"
                        data-id="{{ $course->id }}">Выбрать</a>
                    @else
                    <a href="/login" class="custom-button">Выбрать</a> 
                    @endif
                </div>
            </div>
        @endforeach
        {{-- <div style="margin-top: 100px;" class="consult revealator-fade">
            <div class="consult-text" style="width:100%">
                <div class="consult-text-item">
                    <div class="number-wrap">
                        <span class="number">1</span>
                        <div>
                            <p>Курс «Мои возможности» </p>
                            <p class="price">2000 ₽</p>
                        </div>
                    </div>
                    <a class="custom-button form-open course-button">Выбрать</a>
                </div>
                <div class="consult-text-item">
                    <div class="number-wrap">
                        <span class="number">2</span>
                        <div>
                            <p>Курс «Целостность. Мои сильные и слабые стороны» </p>
                            <p class="price">2000 ₽</p>
                        </div>
                    </div>
                    <a class="custom-button form-open course-button"">Выбрать</a>
                </div>
                <div class="consult-text-item">
                    <div class="number-wrap">
                        <span class="number">3</span>
                        <div>
                            <p>Курс «Ценность. Моё призвание, карьера и дело жизни» </p>
                            <p class="price">2000 ₽</p>
                        </div>
                    </div>
                    <a class="custom-button form-open course-button"">Выбрать</a>
                </div>
                <div class="consult-text-item">
                    <div class="number-wrap">
                        <span class="number">4</span>
                        <div>
                            <p>Обратная связь</p>
                            <p class="price">+2000 ₽ к курсу</p>
                        </div>
                    </div>
                    <a class="custom-button form-open course-button"">Выбрать</a>
                </div>
                <div class="consult-text-item">
                    <div class="number-wrap">
                        <span class="number">5</span>
                        <div>
                            <p>Сопровождение</p>
                            <p class="price">5 мест для прохождения курса в сопровождении</p>
                        </div>
                    </div>
                    <a class="custom-button form-open course-button"">Выбрать</a>
                </div>
            </div>
        </div> --}}
        <div class="social" id="contact">
            <a href="https://t.me/milasoullove"><img src="images/Group тг.png"></a>
            <a href="mailto:Milarmony@gmail.com"><img src="images/Group почта.png"></a>
            <a><img src="images/Group ю туб.png"></a>
        </div>
        <div class="footer" id="contact">
            <div>
                <a href="/">Главная</a>
                <a href="/service">Услуги</a>
            </div>

            <div>
                <a href="/courses">Курсы</a>
                <a href="#contact">Контакты</a>
            </div>
            <div>
                <a target="_blank" href="/Оферта ПРО МИР.pdf">Оферта</a>
                <a target="_blank" href="/Реквизиты.pdf">Реквизиты</a>
            </div>
            <div>
                <a target="_blank" href="/_Политика_обработки_перс_данных_конфиденциальности_ПРО_МИР.pdf">Политика <br>конфиденциальности</a>

    
            </div>
        </div>
    </div>
    <div class="form">
    </div>
    <div class="modal">
        <p>Заявка</p>
        <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
        <form class="modal-form" name="TinkoffPayForm" onsubmit="pay(this); return false;">
            <input class="tinkoffPayRow" type="hidden" name="terminalkey" value="1668606448036DEMO">
            <input class="tinkoffPayRow" type="hidden" name="frame" value="true">
            <input class="tinkoffPayRow" type="hidden" name="language" value="ru">
            <input class="tinkoffPayRow priceOrder" type="hidden" placeholder="Сумма заказа" name="amount" required>
            <input class="tinkoffPayRow orderId" type="hidden" placeholder="Номер заказа" name="order">
            <p>Ваше имя
            <input class="tinkoffPayRow" type="text" placeholder="Введите имя" name="name">
            </p>
            <p>Email
            <input class="tinkoffPayRow" type="text" placeholder="Введите email" name="email">
            </p>
            <p>Номер телефона
            <input class="tinkoffPayRow" type="text" placeholder="+7 (123) 456-78-91" name="phone">
            </p>
            <input style="border: none" class="tinkoffPayRow custom-button"  type="submit" value="Оплатить">
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('.course-button').on('click', function() {
                var course_id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: '/initpay',
                    data: {
                        course_id: course_id,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(resp) {
                        $('body .orderId').val(resp.order_id);
                        $('body .priceOrder').val(resp.price);
                    },
                    error: function() {
                        alert('На сайте произошла ошибка');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('body .form-open').on('click', function(event) {
                event.preventDefault();
                $('.form').fadeIn(200);
                $('.modal').fadeIn(200);
                $('.modal').css({
                    'display': 'flex'
                });
            });
            $('.form').on('click', function() {
                $('.form').fadeOut(200);
                $('.modal').fadeOut(200);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.review-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: true
                // centerMode: true,
            });
        });
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: true
                // centerMode: true,
            });
        });
        $(document).ready(function() {
            $('a[href^="#"]').click(function() {
                var el = $(this).attr('href');
                $('body').animate({
                    scrollTop: $(el).offset().top
                }, 2000);
                return false;
            });
        });
    </script>
    <style>
        .tinkoffPayRow {
            display: block;
            margin: 1%;
            width: 160px;
        }
    </style>
</body>

</html>
