@extends('head')
@section('title')
    Главная страница
@endsection
@section('main')

    <link rel="stylesheet" type="text/css" href="css/home.css">


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
