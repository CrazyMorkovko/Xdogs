@extends('layout')
@section('content')

<h1>Контакты</h1>
<form action="/index.php?page=contacts" method="post">
    <fieldset>
        <legend>Напишите нам</legend>
        <div class="field"><input name="name" type="text" placeholder="Имя"></div>
        <div class="field"><input name="email" type="email" placeholder="E-mail" class="email"></div>
        <div class="field"><input name="phone" type="tel" placeholder="Телефон"></div>
        <div class="field"><input name="subject" type="text" placeholder="Тема"></div>
        <div class="field">
            <label for="text">Суть вашего письма:</label>
            <br>
            <textarea name="text" id="text" rows="4"></textarea>
        </div>
        <div class="field"><button>Отправить</button></div>
    </fieldset>
</form>
<h2>Контактные данные:</h2>
<p><strong>Телефон:</strong> +7 (812) 612-00-64</p>
<p><strong>Адрес:</strong> 197372, г.Санкт-Петербург, пр.Авиаконструкторов, 1</p>
<p><strong>E-mail:</strong> <a href="mailto:help@xdogs.ru">help@xdogs.ru</a></p>
<p>Доставка по Санкт-Петербург осуществляется Почтой России. Средний срок доставки 1-3 дня.</p>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.3802716432974!2d30.24714231609981!3d60.008769681901725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469634318310d8e5%3A0x90694b98585aec31!2z0L_RgC4g0JDQstC40LDQutC-0L3RgdGC0YDRg9C60YLQvtGA0L7QsiwgMSwg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5NzM3Mg!5e0!3m2!1sru!2sru!4v1522793470923"
        class="contact-map"
        allowfullscreen>
</iframe>

@endsection