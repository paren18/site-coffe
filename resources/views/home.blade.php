@extends('head')
@section('title')
    Главная страница
@endsection
@section('main')


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        body{
            padding: 0px;
            margin: 0px;


        }


        .first_frame_main{
            background-image:url(images/fon1.jpg);
            background-color: rgba(0,0,0,.5);
            background-blend-mode: multiply;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height:70vh;
            width: 100%;
            height: 90%;

        }

        .first_frame_main > img{

            padding-left: 60%;
            padding-top: 2%;
            width: 28%;


        }
        .first_frame_main > h1{
            text-align: right;
            color: lightgray;
            margin-bottom: 0%;
            padding-right: 16%;
            font-size: 2.5vw;

            font-family: 'Pacifico', cursive;



        }


        .second{
            background-color: lightgray;
            padding-bottom: 3vw;
            color: #282526;
        }
        .frame_main > table{
            width: 100%;
            padding-top: 4vh;
            font-size: 30px;


            font-family: 'Pacifico', cursive;
            width: 100%;
            table-layout: fixed;

        }
        .Name  {
            font-size: 40px;

            font-family: 'Pacifico', cursive;

        }
        #nsecond{
            padding-left: 2vw;
            padding-bottom: 4vh;
        }

        .third{
            background-color:#282526;
            color: lightgray;
        }


        #nthird{
            padding-bottom: 4vh;

        }
        #welcome{
            padding-bottom: 6vh;
        }
        .fourth{
            background-color: lightgray;
            padding-bottom: 3vw;
            color: #282526;

        }
        #inter{
            padding-top: 4vh;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fifth{
            background-color:#282526;
            color: lightgray;
        }
        .product{
            background-color:#282526;

        }
        .product > img {
            margin-top: 1vh;
            width: 70%;
            max-width: 100%;
            height: auto;
            max-height: 32vh;

        }


    </style>


    <script>
        function showImage(imageUrl) {
            var overlay = document.createElement("div");
            overlay.className = "overlay";

            var image = document.createElement("img");
            image.src = imageUrl;


            overlay.appendChild(image);

            document.body.appendChild(overlay);

            overlay.onclick = function () {
                document.body.removeChild(overlay);
            };
        }
    </script>



    <div class="first_frame_main">
        <img src="images/иконки/Иконка_кофе.png">
        <h1>Ароматная Оазис</h1>
    </div>
    <div class="second frame_main">

        <table>
            <tr><th colspan="3"  class="Name" id="nsecond">Наши примущества</th></tr>
            <tr>
                <th>Аромат</th>
                <th>Качество</th>
                <th>Вкус</th>

            </tr>
            <tr>
                <th>В "Ароматной Оазис" мы придаем особое значение аромату кофе. Наша кофейня наполняется невероятными ароматами свежесваренного кофе, создавая уникальную атмосферу, которая погружает вас в мир незабвенных вкусов.</th>
                <th>Мы гордимся тем, что предлагаем только продукты высшего качества. Наши бариста заботливо выбирают лучшие сорта кофейных зерен, обжариваемые с мастерством, чтобы каждая чашка кофе была настоящим шедевром вкуса.</th>
                <th>Вкус - это то, ради чего мы создаем каждый напиток. Наши мастера-бариста не просто готовят кофе, они создают настоящее произведение искусства. Сбалансированные вкусы, богатство оттенков и уникальные сочетания делают наш кофе непревзойденным наслаждением для вашего вкуса.</th>

            </tr>
        </table>
    </div>
    <div class="third frame_main" >
        <table>
            <tr><th class="Name" id="nthird">О Кофейне</th></tr>
            <tr>
                <th id="welcome">Добро пожаловать в кофейню "Ароматная Оазис" – идеальное место для всех ценителей настоящего кофе и уютной атмосферы. Наша кофейня представляет собой истинный рай для кофеиновых гурманов, где каждый визит превращается в незабываемый опыт.</th>
            </tr>
        </table>
    </div>
    <div class="fourth frame_main">
        <table>
            <tr><th class="Name" id="nfourth" colspan="3">Интерьер</th></tr>
            <tr>
                <th colspan="3">Интерьер кофейни сочетает в себе современные тренды и уютную классику. Теплые оттенки дерева, мягкие диваны и комфортные кресла создают атмосферу домашнего уюта. Оформление выполнено с использованием растений и природных элементов, добавляющих нотку природной свежести.</th>
            </tr>
            <tr>
                <th><img src="images/inter1.jpg" alt="" width="80%" id="inter" onclick="showImage('images/inter1.jpg')"></th>
                <th><img src="images/inter2.jpg" alt="" width="80%" id="inter"  onclick="showImage('images/inter2.jpg')"></th>
                <th><img src="images/inter3.jpg" alt="" width="80%" id="inter"  onclick="showImage('images/inter3.jpg')"></th>

            </tr>
        </table>
    </div>
    <div class="fifth frame_main">
        <table>
            <tr><th class="Name" id="nfifth" colspan="3">Примеры товаров</th></tr>
            <tr>
                <th><div class="product">
                        <img src="images/Кофе/американо.jpg" alt=""  onclick="showImage('images/Кофе/американо.jpg')">
                        <div class="product-list">
                            <h3>Американо</h3>

                        </div>
                    </div></th>
                <th><div class="product">
                        <img src="images/Кофе/капучино.jpg"  alt=""  onclick="showImage('images/Кофе/капучино.jpg')">
                        <div class="product-list">
                            <h3>Капучино</h3>

                        </div>
                    </div></th>
                <th><div class="product">
                        <img src="images/Кофе/экспрессо.jpg" alt="" onclick="showImage('images/Кофе/экспрессо.jpg')">
                        <div class="product-list">
                            <h3>Экспрессо</h3>

                        </div>
                    </div></th>
            </tr>

        </table>
    </div>

@endsection
