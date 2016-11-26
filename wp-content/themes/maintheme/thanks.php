<!DOCTYPE html>
<html>
<head>
    <title>Спасибо - Горящие туры Луцка</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="fancybox/jquery.fancybox.css"  />
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 10]>
    <script src="js/html5shiv.js"></script>
    <p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите свой браузер,</a> чтобы улучшить отображение сайта.</p>
    <![endif]-->

    <script type="text/javascript" src="js/lib/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40557418-4', 'auto');
  ga('send', 'pageview');

</script>
<header>
    <div class="header-top grid">
        <div class="logo-block box"><a class="logo" href="thanks.html"><img src="img/logo.png" alt="logo"/></a></div>
        <div class="address box">
            <p><span>Приходите в гости:</span>
                г. Луцк, ул. Кривой Вал, 34, <br/>оф. 201 <br/>
                </p>
        </div>
        <div class="telephone box">
            <p class="tel-text">Звоните нам сейчас:</p>

            <p class="tel-number">+38(068) 528 2227</p>

            <p><a class="modal-link product-link" href="#feedback"
                  data-order="Обратный звонок">или закажите обратный звонок</a></p>
        </div>
    </div>
    <div class="titles grid">
        <h1>
            Спасибо за заявку! <br/>
            Наш менеджер скоро свяжется с Вами
        </h1>

    </div>
    <div class="form-container grid">
    </div>

    <a class="fixed-button modal-link product-link" href="#tour" data-order="Подбор тура за 10 минут"></a>
</header>
<div class="main">

</div>
<footer>
    <div class="grid">
        <p class="f-text1 box">ООО «МАКИНТУР»<br/>
            ЕГРПОУ: 36480659 <br/>
            р/счет: 26003053130696<br/>
            моб. +38(068) 528 2227,
            гор. +38(0332) 2828 22             
            </p>

        <p class="f-text2 box">г. Луцк, <br/>
            ул. Кривой Вал, 34, <br/>оф. 201</p>

        <p class="f-text3 box">
            <a class="modal-link" href="#confidenc">Соглашение об обработке персональных данных</a>
            <a class="modal-link" href="#confidenc2">Банковская гарантия</a>       
            <a class="modal-link" href="#confidenc3">Лицензия</a>
        </p>
    </div>
</footer>



<div class="modal-boxes">
    <div id="feedback" class="modal">
        <div class="form-block">
            <h3>Обратный звонок</h3>

            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁё\s]{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +38 033 228 2822">

                <textarea class="text-field" name="comment" placeholder="Ваш вопрос и желаемое время звонка*"></textarea>


                <input type="submit" class="send btn1" value="Перезвоните мне">
            </form>
        </div>
    </div>

    <div id="tour" class="modal">

        <h4>Оставьте заявку на подбор тура
            и мы перезвоним вам в течении 10 минут</h4>

        <div class="modal-img">
            <img src="img/victor.jpg" alt=""/>
        </div>
        <div class="form-block">
            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁё\s]{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +7 499 200 300 40">

                <input type="submit" class="send btn1" value="Жду звонка">
            </form>
        </div>
    </div>

    <div id="hotel" class="modal">
        <h4>С удовольствием Расскажу вам больше
            об этом отеле и отдыхе в нем</h4>

        <div class="modal-img">
            <img src="img/victor.jpg" id="modal-pic" alt=""/>
        </div>
        <div class="form-block">
            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁё\s]{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +7 499 200 300 40">

                <input type="submit" class="send btn1" value="Жду звонка">
            </form>
        </div>
    </div>

    <div id="confidenc" class="modal">
        <div class="form-block">
            <h3>Соглашение об обработке
                персональных данных</h3>

            <p>Лица, предоставившие на данном сайте сведения, которые подпадают под определение «персональные данные»  согласно действующему законодательству Украины,  а  также разместившие иную информацию, тем самым подтверждают свое согласие на обработку такой информации,  в том числе персональных данных, и их передачу ООО «МАКИНТУР» для дальнейшей обработки в целях обратной связи и с другими целями в пределах осуществления своей хозяйственной деятельности, в том числе накопление и хранение такой информации.</p>

            <p>ООО «МАКИНТУР» гарантирует полную конфиденциальность при обработке данных, указанных посетителями на сайте компании.</p>

            <p>Лицо, указывающее какие либо данные на этом сайте, гарантирует, что предоставляемая информация является точной и достоверной, и не нарушает действующее законодательство Украины, законные права и интересы третьих лиц, а вся информация предоставлена в отношении себя лично.</p>
        </div>
    </div>
    
    <div id="confidenc2" class="modal">
        <div class="form-block">
        	<img src="img/bankovskaya-garantiya.jpg" alt="Банковская гарантия">        
        </div>
    </div>
    <div id="confidenc3" class="modal">
        <div class="form-block">
        	<img src="img/license.jpg" alt="Лицензия">        
        </div>
    </div>                

    <div id="works" class="modal">
        <div class="form-block">
            <h3>Как это работает?</h3>

            <p>Для Вас в нашей компании трудятся только профессиональные эксперты туризма, которые подберут наилучшие предложения по турам в любую точку мира, учтя все Ваши пожелания.</p>

            <p>Всё что Вам необходимо сделать, это за 10 секунд оформить простую форму, указав свои контакты для обратной связи - а дальше эксперт Вашего отдыха свяжется с Вами и сделает все, что бы Ваша поездка была комфортной и незабываемой. Укажите свои пожелания к туру, и наши эксперты подберут для Вас наиболее точные и выгодные предложения. </p>
            
            <p>Свяжитесь с нами напрямую и получите моментальную консультацию по Вашему туру с гарантией наилучшей цены!</br>Звоните по номеру +38(068) 528 2227 </p>
            <!-- <p>Звоните по номеру +38(068) 528 2227 </p> -->

            <p></p>
        </div>
    </div>

</div>

<script>
    function backToIndex(){
        //document.location.href = '/'
        history.back();
    }
    setTimeout(backToIndex, 7000);

</script>
</body>
</html>