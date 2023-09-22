@extends('head')
@section('main')

<style>
    body{
        padding: 0px;
        margin: 0px;


    }
.frame_onas > table{
    padding-bottom: 4vh;
    font-size: 30px;
    font-family: 'Pacifico', cursive;
    table-layout: fixed;
    text-align: center;

}
    .first_onas {
        background-image:url(images/Бариста.png);
        background-color: rgba(0,0,0,.5);
        display: block;
        background-blend-mode: multiply;
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        height: 45%;




    }
    .first_onas>table{
        color: lightgray;
    }


   .second_onas{
       background-color: lightgray;
       color: #282526;
       height: 30%;
   }

   .third_onas{
       padding-top: 2vh;
       background-color: #282526;
   }
    .third_onas td {
        width: 50%;
    }

    .third_onas img {
        width: 90%;
        margin: 0 auto; /* Центрируем изображения внутри ячеек */
    }

    .fourt_onas{
        background-color: lightgray;


    }
    .fourt_onas > table {
        margin: auto;
    }
    .fourt_onas  img {
        width: 50%;
    }
    .fifth_onas{
        background-color: #282526;
      color: lightgray;    }
    .fifth_onas > table {
        margin: auto;
    }
</style>




<div class="first_onas frame_onas">
    <table>
        <tr><td><h3>С чего всё начиналось.</h3></td></tr>
        <tr><td>Наша история началась с маленькой искры страсти к кофе. Скромное заведение, стремление к совершенству, эксперименты с вкусами. Первые посетители стали нашей наградой. С годами "Ароматная Оазис" превратилась в уютное пространство, где кофе и атмосфера дружелюбия создают незабываемый опыт. Каждая чашка кофе, улыбка посетителей - наша движущая сила. История началась с искры страсти и теперь мы вместе создаем волшебные моменты.</td></tr>
    </table>
</div>
<div class="second_onas frame_onas">
    <table>
        <tr><td><h3>Кто мы </h3></td></tr>
        <tr><td>Мы — команда энтузиастов, вдохновленных кофе. Наша история началась с маленькой кофейни, и с тех пор мы стремимся создавать уникальный опыт для наших гостей. Наша страсть к кофе и стремление к совершенству объединяют нас, делая "Ароматную Оазис" местом, где каждая чашка кофе становится частью незабываемой истории.</td></tr>
    </table>
</div>

<div class="third_onas frame_onas ">
    <table>
        <tr>
            <td><img src="images/Сотрудники/Сотрудники1.jpg"></td>
            <td><img src="images/Сотрудники/Сотрудники2.jpg"></td>
        </tr>
    </table>
</div>

<div class="fourt_onas frame_onas">
    <table>
        <tr>
            <td><h3>Наши цели</h3></td>
        <tr>
            <td>Качество: Предоставление высочайшего качества кофе и обслуживания каждому гостю</td>
        </tr>
        <tr>
            <td>Атмосфера: Создание уютной обстановки, где каждый чувствует тепло и дружелюбие</td>
        </tr>
        <tr>
            <td>Инновации: Внедрение новых идей и подходов, чтобы удивлять и вдохновлять наших посетителей</td>
        </tr>
        <tr>
            <td>Сообщество: Строить сильное сообщество ценителей кофе, где можно обмениваться опытом и страстью</td>
        </tr>
        <tr>
            <td>Развитие: Постоянное развитие и рост, чтобы быть лучше для наших клиентов и нас самих</td>
        </tr>
        </tr>

        <tr><td><img src="images/Сотрудники/Сотрудники3.jpeg"></td></tr>
    </table>
</div>

<div class="fifth_onas frame_onas ">
    <table>
        <tr>
            <td><h3>Наш адрес</h3></td>
        </tr>
        <tr>
            <td>Санкт-Петербург, улица Блохина, 23</td>
        </tr>
        <tr>
            <td><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3ec6fed518cb9b2dcc8f803ca310b5f2ed415661557a277fb736fe1f39ab6e15&amp;width=690&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script></td>
        </tr>

    </table>
</div>
@endsection



