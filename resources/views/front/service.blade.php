<html>

<head>
    <title>Услуги</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <link href="https://fonts.cdnfonts.com/css/svn-gilroy" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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
                <a style="border-bottom: 1px solid black" href="/service">Услуги</a>
                <a href="/courses">Курсы</a>
                <a href="#contact">Контакты</a>
            </div>
        </div>


       

       

        @foreach ($courses as  $course)
        
        @if ($course['category'] != 'Курсы' && $course['category'] != 'Блоки')
        
        
        <div class="about revealator-fade revealator-once revealator-duration15">
            <img class="ellipse" src="images/Ellipse 2.png" style="left: 0; width: 200px;">

            <img src="{{ $course['image'] }}">

            <div class="about-text ">
                   <h2>{{ $course['title'] }}</h2>
                    <p>{!! $course['descr'] !!}</p>
                
                <p>Стоимость:</p>
                <p style="margin-bottom: 50px;" class="price">{{ $course['price'] }} ₽ / {{ $course['pricetext'] }}</p>
                <!-- <p style="margin-bottom: 50px;" class="price">5000 ₽/ 3 МЕС</p> -->
                @if (Auth::user())
                <a  style="padding: 20px 50px" class="custom-button form-open course-button"  data-id="{{ $course['id'] }}">Выбрать</a>
                @else
                <a  style="padding: 20px 50px" class="custom-button form-open" href="/login">Выбрать</a>
                @endif
            </div>
        </div>
            @endif
            

            
        
        @endforeach

        <div class="prices" style="position: relative;">
            <img src="images/Ellipse 5.png" style="z-index:-1;position:absolute; left:0; width: 150px; top: -300px">
            <img src="images/Ellipse 6.png" style="z-index:-1;position:absolute; left:0; width: 50px; top: -100px">
        @foreach ($courses as  $course)
        
        @if ($course['category'] == 'Блоки')
        
            <div class="prices-item">
                <span>{{ $course['title'] }}</span>
                <img src="images/Line 21.png">
                <span class="price">{{ $course['price'] }} ₽ / {{ $course['pricetext'] }}</span>
                <p>{!! $course['descr'] !!}
                    </p>
                    @if (Auth::user())
                <a  style="padding: 20px 50px" class="custom-button form-open course-button"  data-id="{{ $course['id'] }}">Выбрать</a>
                @else
                <a  style="padding: 20px 50px" class="custom-button form-open" href="/login">Выбрать</a>
                @endif

            </div>
        

        
        
        @endif
        
        @endforeach
        </div>

        <!-- <div class="about revealator-fade revealator-once revealator-duration15">
            <img class="ellipse" src="images/Ellipse 2.png" style="left: 0; width: 200px;">

            <img src="images/фото+контур (1).png">

            <div class="about-text ">
                <h2>Абонемент в женский клуб</h2>
                <p>Женский клуб – закрытое сообщество, которое активно и в то же время бережно развивает и раскрывает
                    лучшее в ВАС.
                </p>
                <p>Клуб для тех, кому важно развиваться и интересно узнавать главные правила жизни. </p>
                <p>
                <ul>
                    <li>Каждый месяц проработка важной и актуальной темы ( отношения, сексуальность, деньги, ресурс)
                    </li>
                    <li>Мак-карты, расклады каждый понедельник ю</li>
                    <li>Онлайн мастермайнды и эфиры на выходных</li>
                    <li>Постоянная поддержка теплого комьюнити осознанных девушек</li>
                    <li>Мотивация на улучшение всех сфер, влияющих на качество жизни</li>
                    <li>Проработка чувственности и раскрытие женственности</li>
                </ul>
                </p>
                <p>Стоимость:</p>
                <p style="margin-bottom: 50px;" class="price">2000 ₽/ МЕС</p>
                <p style="margin-bottom: 50px;" class="price">5000 ₽/ 3 МЕС</p>
                <a href="" style="padding: 20px 50px" class="custom-button form-open">Выбрать</a>
            </div>
        </div> -->
        <!-- <div class="about revealator-fade revealator-once revealator-duration15" style="z-index: 4;">
            <div class="about-text ">
                <h2>медитации</h2>
                <p style="margin-bottom: 50px;">
                    Медитация - это возможность погрузиться в пространство своего психологического комфорта и
                    эмоционального роста. Сонастройка и единение со своим духом и телом помогает очиститься от негатива,
                    избавиться от отягощающих мыслей и направит энергию в нужное русло.
                </p>
                <p>Медитирующий человек сохраняет способность ясно мыслить даже в самых критических ситуациях.
                    Внутренняя гармония дает устойчивую опору.
                </p>
                <p>
                <ul>
                    <li>Онлайн занятия раз в неделю</li>
                    <li>Удобно из любой точки мира</li>
                    <li>Можно работать в группе или слушать в записи</li>
                    <li>Для тех, кто готов проработать вопросы и расти</li>
                </ul>
                </p>
                <p style="margin-bottom: 50px;" class="price">{{ $course['price'] }} ₽ / 4 занятия</p>
                <p style="margin-bottom: 50px;" class="price">4200 ₽ / 8 занятий</p>
                <a href="" class="custom-button form-open">Выбрать</a>
            </div>
            <img src="images/фото+контур (4).png">
        </div> -->
       



        <!-- <div class="prices" style="position: relative;">
            <img src="images/Ellipse 5.png" style="z-index:-1;position:absolute; left:0; width: 150px; top: -300px">
            <img src="images/Ellipse 6.png" style="z-index:-1;position:absolute; left:0; width: 50px; top: -100px">
            <div class="prices-item">
                <span>Антистресс</span>
                <img src="images/Line 21.png">
                <span class="price">1000 ₽ / МЕС + методичка</span>
                <p>Позволит привести состояние к балансу и к гармонии утром для продуктивного дня, вечером для здорового сна.<br>
                    Входит 2 медитации «гармония и баланс» , «снятие тревоги»
                    </p>
                <a href="" class="custom-button form-open">Выбрать</a>

            </div>
            <div class="prices-item">
                <span>Любовь и отношения</span>
                <img src="images/Line 21.png">
                <span class="price">1.500 ₽ / МЕС + методичка</span>
                <p>Настраивает на отношения в любви, через работу с собой на психологическом, духовном и эмоциональных уровнях.<br>
                    Входит 3 медитации «Безусловная любовь», «Гармоничные отношения», «Снятие негатива». 
                    
                    </p>
                <a href="" class="custom-button form-open">Выбрать</a>

            </div>
            <div class="prices-item">
                <span>Благополучие и финансы</span>
                <img src="images/Line 21.png">
                <span class="price">2.000 ₽ / МЕС + методичка</span>
                <p>ЛВходит 4 медитации <br>
                    Раз за разом, прослушивая эти медитации, вырабатывается состояние, которое впустит в вашу жизнь изобилие и благополучие</p>
                <a href="" class="custom-button form-open">Выбрать</a>

            </div>
        </div> -->

        <!-- <div style="position: relative;width: 100%;">
            <img class="ellipse" src="images/Ellipse 4.png" style="right: 0; width: 400px;">
        </div>
        <div class="about revealator-fade revealator-once revealator-duration15" style="position: relative;">

            <img src="images/фото+контур (5).png">

            <div class="about-text ">
                <h2>Ретрит</h2>
                <p>
                    Ретрит (англ. retreat — «уединение», «удаление от общества») - это прекрасная возможность работы над
                    собой вне дома.
                    Это лучший способ уйти от суеты, перезагрузить сознание и поработать над своими установками.
                    Под руководством наставника проходит групповая терапия, которая необходима жителям мегаполиса для
                    восстановления сил и борьбы с выгоранием, информационным шумом.
                    Энергетические практики, работа с чакрами и МАК картами, ежедневная йога и медитация, дыхательные
                    техники и танцевально-двигательную терапия позволяют «перезагрузить» мозг, окунуться в самопознание
                    и отдохнуть от городской суеты.
                </p>
                <p>Стоимость:</p>
                <p style="margin-bottom: 50px;" class="price">от 30 000 ₽/ МЕС</p>
                <a href="https://t.me/milasoullove" class="custom-button">Узнать  подробности</a>
            </div>
        </div> -->



        <!-- <div class="about revealator-fade revealator-once revealator-duration15">
            <div class="about-text ">
                <h2>Милые завтраки</h2>
                <p style="margin-bottom: 50px;">
                    Милые завтраки – отличная возможность для трансформаций и комфортного общения.
                    В уютном кругу обсуждаются трудности и варианты их решения, делаются практики с МАК картами и
                    проходят трансформационные разговоры.
                    С каждой участницей индивидуально прорабатывается проблема, всем кругом оказывается поддержка.
                    После встреч Вы ощутите чувство легкости, покинете завтрак со свободным дыханием, ровной спиной и
                    гордо поднятой головой.

                </p>
                <a href="https://t.me/milasoullove" class="custom-button">Узнать  подробности</a>
            </div>
            <img src="images/фото с милых завтраков.png">
        </div> -->
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
            <input id="tinkoffpay-button" style="border: none" class="tinkoffPayRow custom-button"  type="submit" value="Оплатить" disabled>
        </form>
    </div>


    <script>
         $(document).ready(function() {

           
            
$('.course-button').on('click', function() {
   
   
    var course_id = $(this).attr("data-id");
    console.log(course_id)
    $.ajax({
        type: "POST",
        url: '/initpay',
        data: {                        
            'id': course_id,
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },
        success: function(resp) {

            $('body .orderId').val(resp.order_id);
            $('body .priceOrder').val(resp.price);

            $('#tinkoffpay-button').removeAttr('disabled');
        },
        error: function(err) {
            console.log(err)
            $('#tinkoffpay-button').attr('disabled', 'disabled');
            alert('На сайте произошла ошибка');
        }
    });
});
});

        $(document).ready(function () {
            $('body .form-open').on('click', function (event) {
                event.preventDefault();
                $('.form').fadeIn(200);
                $('.modal').fadeIn(200);
                $('.modal').css({
                    'display': 'flex'
                });
            });
            $('.form').on('click', function () {
                $('.form').fadeOut(200);
                $('.modal').fadeOut(200);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.review-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: true
                // centerMode: true,
            });
        });
        $(document).ready(function () {
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: true
                // centerMode: true,
            });
        });
        $(document).ready(function () {
            $('a[href^="#"]').click(function () {
                var el = $(this).attr('href');
                $('body').animate({
                    scrollTop: $(el).offset().top
                }, 2000);
                return false;
            });
        });
    </script>
</body>

</html>