@extends('layouts.app')

    <title>Курсы</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <link href="http://fonts.cdnfonts.com/css/svn-gilroy" rel="stylesheet">
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

@section('content')
    <div class="wrap">
        <!-- <img style="top: 0; right:0" class="ellipse" src="images/Ellipse 1.png" width="700"> -->
        <div class="header">
            <div class="menu">
                <a href="/">Главная</a>
                <a href="service.html">Услуги</a>
                <a style="border-bottom: 1px solid black" href="cource.html">Курсы</a>
                <a href="contact.html">Контакты</a>
            </div>
        </div>
        <div class="about revealator-fade revealator-once revealator-duration15">
        @foreach($course as $item)
            <img src="{{$item->image}}">
           
            <div class="about-text ">
                <h2>{{$item->title}}</h2>
                <p>{{$item->descr}}
                </p>
                <p>Стоимость пакета</p>
                <p style="margin-bottom: 50px;" class="price">{{item->price}}</p>
                <a href="" class="custom-button form-open">Выбрать</a>
            </div>
            @endforeach
       
        <div class="social">
            <a><img src="images/Group тг.png"></a>
            <a><img src="images/Group почта.png"></a>
            <a><img src="images/Group ю туб.png"></a>
        </div>
    </div>
        <div class="form">
    </div>
    <div class="modal">
        <p>Заявка</p>
        <form class="modal-form">
            <p>Ваше имя
                <input type="text" placeholder="Введите имя">
            </p>

            <p>Email
                <input type="text" placeholder="Введите email">
            </p>

            <p>Номер телефона
                <input type="text" placeholder="+7 (123) 456-78-91">
            </p>

            <button class="custom-button" type="submit">Перейти к оплате</button>
        </form>
    </div>
    @endsection
    <script>
        $(document).ready(function () {
            $('body .form-open').on('click', function (event) {
                event.preventDefault();
                $('.form').fadeIn(200);
                $('.modal').fadeIn(200);
                $('.modal').css({
                    'display':'flex'
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
    </script>



