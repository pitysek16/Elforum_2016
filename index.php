<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);

$country = geoip_country_code_by_name($_SERVER['REMOTE_ADDR']);
if($country == 'RU'){
    $currency = 'руб.';
    $price = 7200;
    $new_price = 3700;
    $online_price = 2800;
    $form_condition = 'style="display:none;"';
} else {
    $currency = 'грн.';
    $price = 2300;
    $new_price = 1250;
    $online_price = 990;
    $form_condition = '';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Дистанционное обучение - Конференция ELForum 2016 Киев</title>
    <meta charset="utf-8">
    <meta name="robots" content="nofollow,noindex" />
	<link href="css/style.css" rel="stylesheet" type="text/css"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" content="ELFORUM 2016" />
    <meta name="og:description" content="I Всеукраинская конференция профессионалов дистанционного обучения. 15 декабря 2016 / КИЕВ / Premier Hotel Rus" />
    <meta name="description" content="Всеукраинская конференция профессионалов дистанционного обучения" />
    <meta name="keywords" content="дистанционное, онлайн, обучение, конференция, образование, 2016" />
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript"> function displ(ddd) { if (document.getElementById(ddd).style.display == 'none') {document.getElementById(ddd).style.display = 'block'} else {document.getElementById(ddd).style.display = 'none'} } </script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a.ancLinks").click(function () { 
          var elementClick = $(this).attr("href");
          var destination = $(elementClick).offset().top;
          $('html,body').animate( { scrollTop: destination }, 1100 );
          return false;
        });
      });
    </script>
<script type="text/javascript">
jQuery(function (f) {
    var el = f("#hid"), display;   
    f(window).scroll(function () {
        display = f(this).scrollTop() >= 54;
        if(display != el.css('opacity'))
            el.stop().animate({'opacity': display}, 100);     
    });
});
</script>
</head>

<body>
	<header>	
		<div class="wrapper-1200">
		<img src="images/header-abstr.png" alt="">
			<nav id="rr">
				<a href="#program" class="ancLinks">Программа</a>
				<a href="#spiker" class="ancLinks">Спикеры</a>
				<a href="#price" class="ancLinks">Билеты</a>
				<a href="#partners" class="ancLinks">Партнеры</a>
				<a href="#elfs" class="ancLinks">Контакты</a>
				<a href="#contacts" class="ancLinks">Место</a>		
			</nav>
		</div>
	</header>

	<div id="hid">
		<div class="wrapper-1200">
			<a class="btn" href="#call-back">Заказать звонок</a>
			<nav>
					<a href="#program" class="ancLinks">Программа</a>
					<a href="#spiker" class="ancLinks">Спикеры</a>
					<a href="#price" class="ancLinks">Билеты</a>
					<a href="#partners" class="ancLinks">Партнеры</a>
					<a href="#elfs" class="ancLinks">Контакты</a>
					<a href="#contacts" class="ancLinks">Место</a>		
			</nav>	
			
		</div>
	</div>

	<div class="lightbox" id="call-back">
		<div class="box content-modal content-soc">
			<a class="button cancel" href="#hid">X</a>
			<p>Заказать обратный звонок</p>
			<form action="#thanks-elforum" id="callForm1">
				<p>Введите имя</p>
				<input name="lastname" type="text" required>
				<input name="email" type="hidden" required value="callback">
				<input type="hidden" value="http://elf.etutorium.com#callback">
				<p>Введите телефон</p>
			    <input name="phone" type="text" required minlength="10">
			    <button class="btn">Заказать звонок</button>
			    <div class="clearfix"></div>
			    <p>Форма отключена</p>
			</form>
		</div>
		<div class="overlay"></div>
	</div>


	<div class="head">
		<div class="wrapper">
			<img src="images/logo.svg" alt="ELFORUM 2016">
			<div class="soc">
				<a href="https://www.facebook.com/events/1677481659208667/"><img src="images/soc-fb.png" alt=""></a>
				<a href="https://vk.com/event132059651"><img src="images/soc-vk.png" alt=""></a>
				<a href="https://twitter.com/eTutorium"><img src="images/soc-twitter.png" alt=""></a>
				<p>+38 (067) 611-10-95</p>
			</div>
			<br/>
			<h1>Конференция по дистанционному образованию в Киеве</h1>
			<p class="h1"> <span>Elf</span>orum '16 </p>
			<p>I Всеукраинская конференция<br/>
			  <span  class='call-out'>
			    <span  class='call-out__title'></span >
			  </span >

			    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
				<script src="js/index-type.js"></script>
			<br/> <b>дистанционного обучения</b></p>
			<p>15 декабря / КИЕВ / Premier Hotel Rus</p>
			<a href="#price" class="btn ancLinks btn-jump">Хочу участвовать</a>
		</div>
	</div>

	<div class="fishki">
		<div class="wrapper">
			<div>
				<p><span>2 </span><br/>потока</p>
			</div>
			<div>
				<p><span>20</span><br/> спикеров</p>
			</div>
			<div>
				<p><span>900</span> мин<br/> практики</p>
			</div>
			<div>
				<p><span>200+</span><br/> участников и <br/>новых знакомств</p>
			</div>
			<div>
				<p><span>активный нетворкинг</span><br/> и немного волшебства!</p>
			</div>	
		</div>
		<div class="clearfix"></div>
		<div class="bg-black"></div>
	</div>

	<div class="komy">
		<div class="wrapper">
			<div class="block-left">
				<img src="images/ca.png" alt="Целевая аудитория">
				<p>Кому важно быть на elforum?</p>
				<hr>
			</div>
			<div class="block-right">
				<div>
					<img src="images/Shape-1.png" alt="Учебным центрам">
					<p><span>Учебным центрам</span>, которые хотят запустить онлайн курсы;</p>
				</div>
				<div>
					<img src="images/Shape-2.png" alt="Разработчикам">
					<p><br/><span>Разработчикам</span> онлайн-курсов;</p>
				</div>
				<div>
					<img src="images/Shape-3.png" alt="Тренерам">
					<p>Независимым <span>тренерам, коучам, консультантам</span>;</p>
				</div>
				<div>
					<img src="images/Shape-4.png" alt="HR">
					<p><br/><span>HR-директорам</span></p>
				</div>
				<div>
					<img src="images/Shape-5.png" alt="Руководителям">
					<p><br/><span>Руководителям</span> корпоративных университетов и департаментов обучения</p>
				</div>
			</div>
		</div>
	</div>

	<div class="expect">
		<div class="wrapper">
			<img src="images/diamant.png" alt="Вас ждет">
			<p class="h2">В ЭТОТ ДЕНЬ ВАС ЖДЕТ</p>
			<div class="tabs">
   				<div class="tab">
			       <input type="radio" id="tab-1" name="tab-group-1" checked>
			       <label for="tab-1"><span>1 ПОТОК </span><br/><h2>Дистанционное обучение как бизнес</h2></label>
			       
			       <div class="content">
			          <ul>
					    <li>Инсайты, стратегии и кейсы по запуску и масштабированию бизнеса в сфере онлайн-обучения. </li>
					    <li>Руководства к действию: как упаковать учебный продукт в формат online, как выстроить прибыльную модель в e-learning бизнесе, как продвигать образовательный проект с ограниченным бюджетом.</li>
					    <li>Передовые технологии и работающие инструменты в сфере дистанционного обучения, внедрение которых гарантированно даст толчок вашему бизнесу.</li>
					</ul>
      			</div> 
   			</div>
    
   			<div class="tab">
		       <input type="radio" id="tab-2" name="tab-group-1">
		       <label for="tab-2"><span>2 ПОТОК </span><br/><h2>Корпоративное обучение онлайн</h2></label>
		       <div class="content">
           			<ul>
					   	<li>Глобальные тренды, новые возможности и перспективы в дистанционном обучении персонала на 2017 год.</li>
					    <li>Эффективные инструменты и готовые решения для мотивации и вовлечения сотрудников в онлайн-обучение.</li>
					    <li>Вся правда о технической стороне организации онлайн-обучения в компании: как внедрить простую и прозрачную систему корпоративного университета, как оценивать работу разработчиков программ обучения, как обеспечить контроль за качеством усвоения материала. </li>
					</ul>
       			</div> 
   			</div>
    	</div>
		</div>
	</div>

	<div class="expect expect-small">
		<div class="wrapper">
			<img src="images/diamant.png" alt="Вас ждет">
			<h2>В ЭТОТ ДЕНЬ ВАС ЖДЕТ</h2>
			<p class="zagol"><span>1 ПОТОК </span><br/>Дистанционное обучение как бизнес</p>
			<ul>
				<li>Инсайты, стратегии и кейсы по запуску и масштабированию бизнеса в сфере онлайн-обучения. </li>
				<li>Руководства к действию: как упаковать учебный продукт в формат online, как выстроить прибыльную модель в e-learning бизнесе, как продвигать образовательный проект с ограниченным бюджетом.</li>
				<li>Передовые технологии и работающие инструменты в сфере дистанционного обучения, внедрение которых гарантированно даст толчок вашему бизнесу.</li>
			</ul>

			<p class="zagol"><span>2 ПОТОК </span><br/>Корпоративное обучение онлайн</p>
			<ul>
				<li>Глобальные тренды, новые возможности и перспективы в дистанционном обучении персонала на 2017 год.</li>
				<li>Эффективные инструменты и готовые решения для мотивации и вовлечения сотрудников в онлайн-обучение.</li>
				<li>Вся правда о технической стороне организации онлайн-обучения в компании: как внедрить простую и прозрачную систему корпоративного университета, как оценивать работу разработчиков программ обучения, как обеспечить контроль за качеством усвоения материала. </li>
			</ul>

		</div>
	</div>




<p id="program"></p>
	<div class="program">
		<div class="wrapper-1200">
			<h2>Программа конференции</h2>
			<a href="/programa-ELForum-2016.pdf" target="_blank" class="btn">СКАЧАТЬ <span>PDF-программу</span></a>
			<div class="block-program">
				<div class="wrapper">
					<div class="info">
						<p>8:15 - 9:15 </p>
						<img src="images/info-1.png" alt="">
						<p>Регистрация</p>
					</div>
					<div class="block-left potok-1">
						<p>Поток 1</p>
						<div class="clearfix"></div>
						<p>Дистанционное обучение как бизнес</p>
					</div>
					<div class="block-right potok-2">
						<p>Поток 2</p>
						<p>Корпоративное обучение онлайн</p>
					</div>
					<div class="clearfix"></div>

					<div class="block-left">
						<div class="prog">
							<p>9:30</p>
							<p>Константин Бугайчук, Научно-исследовательская лаборатория ХНУВД</p>
							<p>Онлайн-курс: с чего начать и как не ошибиться</p>
							<a href="javascript: displ('var-5')">Подробная программа</a>
								<div id="var-5" style="display: none;">
									<ol>
										<li>Зачем организации переводить обучение в онлайн?</li>
										<li>Форматы внедрения онлайн обучения </li>
										<li>Основные инструменты разработки онлайн курсов. </li>
										<li>Типичные организацонные и методические ошибки. </li>
										<li>Механизмы минимизации ошибок внедрения онлайн обучения.   </li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>10:15</p>
							<p>Владимир Кухаренко, НТУ «ХПИ»</p>
							<p>Азы проектирования дистанционного курса </p>
							<a href="javascript: displ('var-7')">Подробная программа</a>
								<div id="var-7" style="display: none;">
									<ol>
										<li>Где мы находимся? Тенденции развития корпоративного e-learning, системы для реализации онлайн курса</li>
										<li>Куда идти? Выбор цели обучения, методы проектирования, классификация подцелей, типы курса в зависимости от мотивации слушателей</li>
										<li>Как мы туда попадем? Методы достижение целей, контент онлайн курса, адаптивные курсы</li>
										<li>Туда ли мы попали? Оценка результативности обучения.</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>11:00</p>
							<p>Павел Вдович, ЕБРР</p>
							<p>ЕБРР: поддержка малых и средних предприятий при реализации ИТ-проектов</p>
								<!--<a href="javascript: displ('var-19')">Подробная программа</a>
								<div id="var-11" style="display: none;">
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
										<li>Aliquam tincidunt mauris eu risus.</li>
										<li>Vestibulum auctor dapibus neque.</li>
										<li>Nunc dignissim risus id metus.</li>
										<li>Cras ornare tristique elit.</li>
										<li>Vivamus vestibulum nulla nec ante.</li>
										<li>Praesent placerat risus quis eros.</li>
									</ul>
								</div>-->
						</div>
		
					</div>
					<div class="block-right">
						
						<div class="prog">
							<p>9:30</p>
							<p>Юлия Королева, Платформа eTutorium</p>
							<p>Вебинары в обучении сотрудников: инструкция к применению</p>
								<!--<a href="javascript: displ('var-11')">Подробная программа</a>
								<div id="var-11" style="display: none;">
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
										<li>Aliquam tincidunt mauris eu risus.</li>
										<li>Vestibulum auctor dapibus neque.</li>
										<li>Nunc dignissim risus id metus.</li>
										<li>Cras ornare tristique elit.</li>
										<li>Vivamus vestibulum nulla nec ante.</li>
										<li>Praesent placerat risus quis eros.</li>
									</ul>
								</div>-->
						</div>
						<div class="prog">
							<p>10:00</p>
							<p>Алексей Кривопишин, Техноматика </p>
							<p>Интерактивный курс своими руками. Как использовать готовые шаблоны в разработке</p>
							<a href="javascript: displ('var-9')">Подробная программа</a>
								<div id="var-9" style="display: none;">
									<ol>
										<li>Проблемы самостоятельной разработки курсов</li>
										<li>Как меняются инструменты разработки? Меняются ли подходы и методики?</li>
										<li>Чем могут помочь шаблоны? Когда стоит их применять?</li>
										<li>Примеры и практика использования (краткий мастер-класс)</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>10:45</p>
							<p>СЕКРЕТНЫЙ СПИКЕР </p>
							<!--<p>Интерактивный курс своими руками. Как использовать готовые шаблоны в разработке</p>
							<a href="javascript: displ('var-21')">Подробная программа</a>
								<div id="var-21" style="display: none;">
									<ol>
										<li>Проблемы самостоятельной разработки курсов</li>
										<li>Как меняются инструменты разработки? Меняются ли подходы и методики?</li>
										<li>Чем могут помочь шаблоны? Когда стоит их применять?</li>
										<li>Примеры и практика использования (краткий мастер-класс)</li>
									</ol>
								</div>-->
						</div>
							
					</div>
					<div class="clearfix"></div>


					<div class="info">
						<p>11:30 - 12:00</p>
						<img src="images/info-2.png" alt="">
						<p>Кофе-брейк</p>
					</div>

					<div class="block-left">
						<div class="prog">
							<p>12:00</p>
							<p>Татьяна Ефименко, EDUGET</p>
							<p>Как не нужно делать онлайн-курсы: 10 примеров из практики EDUGET»</p>
							<a href="javascript: displ('var-21')">Подробная программа</a>
								<div id="var-21" style="display: none;">
									<ol>
										<li>Где грань между много и недостаточно в размере курса</li>
										<li>Как не ошибиться с целевой аудиторией</li>
										<li>Продаем дорого или много</li>
										<li>Как бороться с устареванием практического материала</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>12:45</p>
							<p>Анна Верба, CEO &amp; Founder Группы компаний «Актив»</p>
							<p>Как АКТИВизировать свой образовательный бизнес с помощью онлайн-технологий. На примере кейса от Финансовой Академии АКТИВ </p>
							<a href="javascript: displ('var-4')">Подробная программа</a>
								<div id="var-4" style="display: none;">
									<ol>
										<li>Какие возможности дают e-learning технологии для масштабирования бизнеса и увеличения прибыльности</li>
										<li>Как правильно монетизировать онлайн-образовательный бизнес.</li>
										<li>Финансовая Академия АКТИВ — онлайн-обучение, основанное на компетенциях.</li>
										<li>Как грамотно организовать продажи на В2С и В2В рынках.</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>13:30</p>
							<p>Максим Шкилев, бизнес-тренер</p>
							<p>Как спроектировать воронку онлайн продаж для своего учебного продукта  </p>
							<a href="javascript: displ('var-1')">Подробная программа</a>
								<div id="var-1" style="display: none;">
									<ol>
										<li>Платный и бесплатный контент - как спроектировать в единой связке?</li>
										<li>Онлайн встречи, видеоуроки, инструкции и другие материалы - как делать быстро и дешево;</li>
										<li>Привлечение целевой аудитории: социальные сети, e-mail рассылки, партнерские проекты;</li>
										<li>Конверсия в регистрации и продажи - практические инструменты.</li>
									</ol>
									<p><b>Бонус:</b> Кейсы по созданию продающего контента. </p>
								</div>
						</div>
					</div>
					<div class="block-right">
					<div class="prog">
							<p>12:00</p>
							<p>Екатерина Быкова, Линия магазинов EVA </p>
							<p>Методики и практики. Успехи и «набитые шишки» в работе с системой дистанционного обучения</p>
							<a href="javascript: displ('var-10')">Подробная программа</a>
								<div id="var-10" style="display: none;">
									<ol>
										<li>Как повысить эффективность СДО, вовлечь персонал и удерживать интерес к обучению;</li>
										<li>Каких достижений можно добиться с помощью СДО в развитии и оценке персонала? </li>
										<li>С какими трудностями мы столкнулись, какие ошибки допустили;</li>
										<li>Наш свежий опыт. Переход из оффлайн-обучения в онлайн: причины, преимущества и недостатки.Кратко и о главном! </li>
										<li>Практический опыт 5-летней работы с СДО от компании EVA!</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>12:45</p>
							<p>Станислав Загурский, Колорис</p>
							<p>Игровой симулятор - инструмент оперативного обучения</p>
							<!--<a href="javascript: displ('var-8')">Подробная программа</a>
								<div id="var-8" style="display: none;">
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
										<li>Aliquam tincidunt mauris eu risus.</li>
										<li>Vestibulum auctor dapibus neque.</li>
										<li>Nunc dignissim risus id metus.</li>
										<li>Cras ornare tristique elit.</li>
										<li>Vivamus vestibulum nulla nec ante.</li>
										<li>Praesent placerat risus quis eros.</li>
									</ul>
								</div>-->
						</div>
						<div class="prog">
							<p>13:30</p>
							<p>Андрей Кубай, Sweetrush Inc. (США) </p>
							<p>Вся правда о мобильном обучении </p>
								<a href="javascript: displ('var-2')">Подробная программа</a>
								<div id="var-2" style="display: none;">
									<ol>
										<li>Что представляет собой мобильное обучение?</li>
										<li>Сильные и слабые стороны этого формата дистанционного обучения.</li>
										<li>Риски и потенциальные проблемы при внедрении мобильного обучения. Способы их уменьшения.</li>                         
										<li>Самые популярные инструменты разработки учебного контента для мобильных устройств: проводим сравнение.</li>
									</ol>
								</div>
						</div>	
		
					</div>
					<div class="clearfix"></div>

				<div class="info">
						<p>14:15 - 15:15</p>
						<img src="images/info-3.png" alt="">
						<p>Вкусный обед</p>
					</div>

					<div class="block-left">
					
						<div class="prog">
							<p>15:15</p>
							<p>Константин Коптелов, PromoIntegrator</p>
							<p>Кейс Promointegrator: переход из оффлайн-мероприятий в онлайн. Пошаговый алгоритм организации онлайн-мероприятия</p>
							<a href="javascript: displ('var-6')">Подробная программа</a>
								<div id="var-6" style="display: none;">
									<ol>
										<li>Кто мы и чем занимаемся? Почему наш опыт может быть интересен?</li>
										<li>Учимся определять/тестировать тему мероприятия</li>
										<li>Проектирование онлайн-мероприятия: на что обратить особое внимание?</li>
										<li>Наш опыт работы с платформами </li>
										<li>Как мы продвигаем мероприятия</li>
										<li>Важные активности после завершения мероприятия.</li>
										<li>Что в сухом остатке?</li>
									</ol>
								</div>
						</div>

						<div class="prog">
							<p>16:00</p>
							<p>Виктор Осадчий, EnglishDom</p>
							<p>Английский язык - онлайн: новый стиль жизни и бизнеса</p>
							<a href="javascript: displ('var-22')">Подробная программа</a>
								<div id="var-22" style="display: none;">
									<ol>
										<li>Новый формат - новые ценности. Свобода, непрерывность, мобильность</li>
										<li>Персонализированная онлайн платформа - учебник будущего</li>
										<li>Как из учителя сделать вдохновителя, а изучение английского - хобби</li>
										<li>Онлайн образование - это метрики, big data, инновации</li>
										<li>Дистанционное образование, как новый эмоциональный опыт</li>
									</ol>
								</div>
						</div>

						<div class="prog">
							<p>16:30</p>
							<p>Дяченко Олеся, Raccoon Gang</p>
							<p>Blended Learning на платформе Open edX: Переход от традиционных курсов в онлайн  </p>
							<a href="javascript: displ('var-20')">Подробная программа</a>
								<div id="var-20" style="display: none;">
									<span>Наши успехи в проведении Blended Learning курсов "Веб-разработка на Python"</span>
									<ol>
										<li>Зачем мы это сделали?
											<ul>
												<li> Что такое Blended Learning</li>
												<li>Преимущества подхода Blended Learning</li>
											</ul>
										</li>
										<li>Как мы это организовали?
											<ul>
												<li>Методика создания курсов </li>
												<li>Инструментарий Blended Learning</li>
											</ul>
										</li>
										<li>Что мы сделали, чтобы заработало?
   											<ul>
												<li>Особенности в сопровождении курсов</li>
											</ul>
										</li>
										<li>Трудозатраты:
   											<ul>
												<li>Сколько нужно потратить времени, чтобы сделать онлайн курсы.</li>
												<li>Почему это того стоит?</li>
											</ul>
										</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>17:15</p>
							<p>Александр Милютин, Академия IMT</p>
							<p>Интернет-маркетинг образовательных услуг: инструменты и чек-листы для привлечения и удержания клиентов</p>
							<a href="javascript: displ('var-3')">Подробная программа</a>
								<div id="var-3" style="display: none;">
									<ol>
										<li> Особенности построения маркетинга для учебных заведений.</li>
										<li>От банального распределения бюджета к использованию метрик эффективности.</li>
										<li>Рабочие инструменты интернет-маркетинга образовательных услуг</li>
										<li>Активность конкурентов - как проверить. Сервисы, каналы и запросы.</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>18:00</p>
							<p>Дмитрий Кудренко, esputnik.com</p>
							<p>Email маркетинг в учебном центре</p>
							<a href="javascript: displ('var-18')">Подробная программа</a>
								<div id="var-18" style="display: none;">
									<ul>
										<li>роль email в обучении</li>
										<li>когда email не работает</li>
										<li>самые важные письма или с чего начать</li>
										<li>особенности сопровождения обучения</li>
										<li>что делать если студент уже все выучил</li>
									</ul>
								</div>
						</div>
						
					</div>
					
					
					<div class="block-right">
						<div class="prog">
							<p>15:15</p>
							<p>Максим Шкилев, бизнес-тренер </p>
							<p>Как своими силами построить управляемую систему обучения смешанного формата от 200 до 1000+ слушателей</p>
							<a href="javascript: displ('var-12')">Подробная программа</a>
								<div id="var-12" style="display: none;">
									<ol>
										<li> Зачем использовать онлайн, а когда необходимо оффлайн-обучение?</li>
										<li>Как перевести готовые курсы обучения в дистанционный формат?</li>
										<li>Контент [не равно] обучение.</li>
										<li>Обучение [равно] создание корпоративной базы знаний.</li>
									</ol>
									<p><b>Бонус:</b> расчет стоимости одного из вариантов такой системы </p>
								</div>
						</div>
						<div class="prog">
							<p>16:30</p>
							<p>Валерий Задавысвичка,  Corporate E-Learning Club  </p>
							<p>Как не свести с ума сотрудника в период его электронной стажировки  </p>
							<a href="javascript: displ('var-13')">Подробная программа</a>
								<div id="var-13" style="display: none;">
									<ol>
										<li>Определение и цели электронной стажировки</li>
										<li>Организация процесса от А до Я</li>
										<li>Ошибки, которые важно предусмотреть</li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>17:15</p>
							<p>Евгений Штеменко, Comfy</p>
							<p>КЕЙС: "Вы уверены, что используете свою систему дистанционного обучения на максимум?»   </p>      
								<a href="javascript: displ('var-17')">Подробная программа</a>
								<div id="var-17" style="display: none;">
									<ol>
										<li>СДО – это только обучение? </li>
										<li>СДО и новые сотрудники</li>
										<li>СДО и кадровый резерв</li>
										<li>СДО – это возможность не только научиться но и быстро найти</li>
										<li>СДО и контроль эффективности сотрудников</li>
										<li>СДО и смартфон J </li>
									</ol>
								</div>
						</div>
						<div class="prog">
							<p>18:00</p>
							<p>Мирослав Боцула, Collaborator</p>
							<p>Корпоративный eLearning по технике пустого инбокса </p>      
							<a href="javascript: displ('var-14')">Подробная программа</a>
								<div id="var-14" style="display: none;">
									<ol>
										<li>Что важно для взрослых в elearning </li>
										<li>Календарь, расписание и стек заданий</li>
										<li>Гибкий elearning с курсами и без</li>
										<li>Эффективные отчеты  </li>
									</ol>
								</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<a href="#price" class="btn-program ancLinks btn-jump">Забронировать место</a>
				</div>
			</div>
		</div>
	</div>

<p id="spiker"></p>
	<div class="lector">
		<div class="wrapper">
			<div>
				<img src="images/lector.png" alt="Спикеры">
				<h3>СПИКЕРЫ ELFORUM 2016</h3>
				<hr><br/>
				<p>Специально для вас мы собрали практиков и ТОПов рынка дистанционного обучения в Украине</p>
			</div>

			<div>
				<figure>
					<img src="images/k-bygaichyk.png" alt="Константин Бугайчук">
					 <figcaption>	       
			            <p>Сертифицированный тьютор, онлайн-тренер и разработчик электронных курсов. Победитель премии e-LearningPRO в номинации «Лучший e-Learning специалист в ВУЗе» 2014. Мастер Международной школы e-learning.by. Автор и ведущий блога «Дистанционное обучение (МВД и не только)».</p>
			        </figcaption>
		    	</figure>
		    		<p>Константин Бугайчук </p>
					<p>Заведующий научно-исследовательской лабораторией ХНУВД</p>
			</div>
			<div>
				<figure>
					<img src="images/y-koroleva.png" alt="Юлия Королева">
					<figcaption>	       
				            <p>Эксперт по внедрению технологий и систем онлайн-обучения в e-learning проекты.</p>
				        </figcaption>
			    	</figure>
				<p>Юлия Королева</p>
				<p>Руководитель отдела продаж в eTutorium</p>
			</div>

			<br/>
			<div>
				<figure>
					<img src="images/m-shkilev.png" alt="Максим Шкилев">
					<figcaption>	       
					    <p>Основатель проекта "ТурМенеджер". 12 лет успешной практики в разработке, проведении тренингов и организации систем дистанционного обучения (до 800 участников). Проекты: корпоративные системы обучения для "Nemiroff", "Сеть Агентств Горящих Путевок" и Coral Travel. </p>
				    </figcaption>
			    </figure>
				<p>Максим Шкилев</p>
				<p>Независимый бизнес-тренер и автор дистанционных курсов</p>
			</div>
			<div>
				<figure>
					<img src="images/m-bocyla.png" alt="Мирослав Боцула">
					<figcaption>	       
					    <p>Сооснователь и координатор разработки украинской платформы дистанционного обучения Collaborator. Доцент, кандидат технических наук, директор Центра дистанционного обучения ВНТУ. </p>
				    </figcaption>
			    </figure>		
				<p>Мирослав Боцула</p>
				<p>Сооснователь Collaborator</p>
			</div>
			<div>
			<figure>
					<img src="images/e-bukova.png" alt="Екатерина Быкова">
					<figcaption>	
						<p>Ведущий менеджер компании ООО "РУШ" по дистанционному обучению и оценке персонала, автор статей в журнале Управление персоналом, со-разработчик проекта по геймификации, который занял 2е место в премии HR бренд. </p>
				    </figcaption>
			    </figure>		
				<p>Екатерина Быкова </p>
				<p>Ведущий специалист по оценке персонала Линии магазинов EVA</p>
			</div>
			<div>
			<figure>
				<img src="images/v-zaduvusvichka.png" alt="Валерий Задавысвичка">
					<figcaption>	       
					    <p>Менеджер по корпоративному обучению в АО "Пиреус банк МКБ". Опыт работы в сфере корпоративного обучения с 2006 года.</p>
				    </figcaption>
			    </figure>	
				<p>Валерий Задавысвичка</p>
				<p>Сооснователь Corporate E-Learning Club</p>
			</div>

			<br/>
			<div>
				<figure>
				<img src="images/k-koptelov.png" alt="Константин Коптелов">
					<figcaption>	       
					    <p>Со-владелец компании PromoIntegrator - арт-завод контента. MBA. Владелец Sverh, эксперт по систематизации, автоматизации, выстраиванию эффективных процессов и управлению проектами. Консультант по внедрению CRM | PM систем в малом бизнесе.</p>
				    </figcaption>
			    </figure>	
				<p>Константин Коптелов</p>
				<p>Со-владелец PromoIntegrator</p>
			</div>
			<div>
			<figure>
				<img src="images/a-verba.png" alt="Анна Верба">
					<figcaption>	       
					    <p>Основатель проектов «Финансовая академия «Актив» и «Платформа вебинаров eTutorium». Предпринимательский стаж в IT-бизнесе более 10 лет. Эксперт-практик в области e-learning. С 2008 года — сертифицированный бизнес-тренер.</p>
				    </figcaption>
			    </figure>	
				<p>Анна Верба</p>
				<p>CEO &amp; Founder Группы компаний «Актив»</p>
			</div>
			<div>
			<figure>
				<img src="images/a-milutin.png" alt="Александр Милютин">
					<figcaption>	       
					    <p>Автор и тренер курса “SEO-специалист: от новичка до профи”. Автор первого курса интернет маркетинга в Днепропетровске. Специализируется на интернет-маркетинге, аналитике, AdWords.</p>
				    </figcaption>
			    </figure>	
				<p>Александр Милютин</p>
				<p>Директор Академии IMT</p>
			</div>
			<div>
				<figure>
				<img src="images/a-kybai.png" alt="Андрей Кубай">
					<figcaption>	       
					    <p>Тренер и ведущий инженер компании Sweetrush Inc (США). Спикер и евангелист компании Adobe по продукции E-learning направления. Elearning эксперт с многолетним опытом работы.</p>
				    </figcaption>
			    </figure>	
				<p>Андрей Кубай</p>
				<p>Ведущий инженер компании Sweetrush Inc (США)</p>
			</div>

			<br/>
			<div>
				<figure>
					<img src="images/v-kyharenko.jpg" alt="Владимир Кухаренко">
					<figcaption>	       
					    <p>К.т.н., руководитель Проблемной лаборатории дистанционного обучения НТУ “ХПИ”. Профессор кафедры педагогика и психология профессиональной подготовки. Руководитель лаборатории инновационных технологий в образовании ХНАДУ. Автор более 15 пособий по дистанционному обучению.</p>
				    </figcaption>
			    </figure>
				<p>Владимир Кухаренко</p>
				<p style="width:100%">Руководитель проблемной лаборатории дистанционного обучения НТУ «ХПИ»</p>
			</div>
			<div>
				<figure>
					<img src="images/s-zagyrskiy.png" alt="Станислав Загурский">
					<figcaption>	       
					    <p>Разработчик идеологии программных продуктов для HR. В сфере управления человеческими ресурсами с 2003 года.</p>
				    </figcaption>
			    </figure>	
				<p>Станислав Загурский</p>
				<p>Учредитель компании Colorisoft</p>
			</div>
			<div>
			<figure>
					<img src="images/a_kryvopishyn.png" alt="Алексей Кривопишин">
					<figcaption>	       
					    <p>Специалист в области разработки электронных курсов и систем дистанционного обучения. В сфере eLearning с 2000 г.</p>
				    </figcaption>
			    </figure>	
				<p>Алексей Кривопишин </p>
				<p>Коммерческий директор ООО “Техноматика”</p>
			</div>
			<div>
			<figure>
					<img src="images/e-shtemenko.jpg" alt="Евгений Штеменко">
					<figcaption>	
				 		<p>С 2005 года работает в сфере обучения персонала, дистанционным обучением активно занимается с 2010 года.</p>
				    </figcaption>
			    </figure>	
				<p>Евгений Штеменко</p>
				<p>Руководитель корпоративного университета Comfy</p>
			</div>
			<div>
				<figure>	
					<img src="images/p-vdovich.jpg" alt="Евгений Штеменко">
					<figcaption>	
				 		<p>Консультант в сфере управления, менеджер проектов стратегического развития. Получил степень магистра делового администрирования WUT Business School (Варшава, Польша). Координатор консалтинговых проектов в Европейском Банке Реконструкции и Развития (ЕБРР).</p>
				    </figcaption>
			    </figure>	
				<p>Павел Вдович</p>
				<p>Аналитик Группы финансирования и развития малого и среднего бизнеса ЕБРР</p>
			</div>
			<div>
				<figure>	
					<img src="images/t-efimenko.jpg" alt="Татьяна Ефименко">
					<figcaption>	
				 		<p>С 2003 по 2014 г. возглавляла крупнейший издательский дом Украины - УМХ, в котором было около 60 онлайн и офлайн брендов, таких как Теленеделя, VOUGE, FORBES, Футбол и другие.</p>
				    </figcaption>
			    </figure>	
				<p>Татьяна Ефименко</p>
				<p>СЕО EDUGET. ТОП-менеджер с 20-ти летним стажем</p>
			</div>
			<div>
				<figure>	
					<img src="images/o-dyachenko.jpg" alt="Дяченко Олеся">
					<figcaption>	
				 		<p>2+ года в онлайн-образовании (как проектный менеджер технических решений, так и менеджер по разработке онлайн-курсов (instructional course design). За это время: разработано и запущено 3 онлайн-курса и более 8 мини-курсов, реализовано более 15 проектов по установке и кастомизации платформы Open edX для корпоративных клиентов.</p>
				    </figcaption>
			    </figure>	
				<p>Дяченко Олеся</p>
				<p>Проектный менеджер в компании Raccoon Gang</p>
			</div>
			<div>
				<figure>	
					<img src="images/d-kydrenko.jpg" alt="Дмитрий Кудренко">
					<figcaption>	
				 		<p>Эксперт в области email-маркетинга, автор профессионального тематического блога (более 200 статей) и специализированных семинаров. Сертифицирован по направлениям Lead Management и Email Messaging от крупнейшего мирового института маркетинговых исследований MECLABS.</p>
				    </figcaption>
			    </figure>	
				<p>Дмитрий Кудренко </p>
				<p>СЕО, идеолог и руководитель сервиса электронного маркетинга eSputnik</p>
			</div>
			<div>
				<figure>	
					<img src="images/v-osadchii.jpg" alt="Виктор Осадчий">
					<!--<figcaption>	
				 		<p>Эксперт в области email-маркетинга, автор профессионального тематического блога (более 200 статей) и специализированных семинаров. Сертифицирован по направлениям Lead Management и Email Messaging от крупнейшего мирового института маркетинговых исследований MECLABS.</p>
				    </figcaption>-->
			    </figure>	
				<p>Виктор Осадчий  </p>
				<p>Специалист по разработке программ обучения EnglishDom</p>
			</div>
		</div>
	</div>

	

<p id="price"></p>
	<div class="price">
		<div class="wrapper">
			<h2>Цена вопроса</h2>
			<div>
				<div class="block-left">
				<div class="edge top"></div>
			    <div class="edge left"></div>
			    <div class="edge bottom"></div>
			    <div class="edge right"></div>
			    <div class="corner top left"></div>
			    <div class="corner top right"></div>
			    <div class="corner bottom left"></div>
			    <div class="corner bottom right"></div>
					<div class="block-left">
						<p>При оплате до 28 ноября: </p>
						<p><?php echo $price . ' ' . $currency; ?></p>
						<p><?php echo $new_price . ' ' . $currency; ?></p>
					</div>
					<div class="block-right">
						<a href="#reg" class="btn btn-jump">Забронировать место</a>
						<p>+ получите подарок!</p>
								
					</div>
				</div>
				<div class="block-right">
					<img src="images/gift.png" alt="бонус для участников">
					<p>Специальный бонус для участников </p>
					<hr/>
					<p>Cразу после оплаты билета вы получите запись онлайн-конференции на тему «Геймификация и интерактив в дистанционном образовании» </p>	
				</div>
			</div>
			<p>Не можете приехать? <a href="#reg">Закажите online-трансляцию заранее</a></p>
			<p>Стоимость: <span><?php echo $online_price . ' ' . $currency; ?></span></p>
				
		
		</div>
	</div>

	<div class="lightbox" id="pay-after">
		<div class="box content-modal content-soc">
			<a class="button cancel" href="#price">X</a>
			<p>Благодарим за интерес к ELForum 2016!<br/><span style="font-size:18px">Заполните, пожалуйста, форму. Мы зарезервируем для вас место участника и будем оповещать об изменениях цены.</span></p>
			<form action="/#thanks-elforum" id="subscribeForm">
				<p>Введите имя</p>
				<input name="lastname" type="text" required>
				<p>Введите E-mail</p>
			    <input name="email" type="text" required pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{1,20}$">
			    <input type="hidden" value="http://elf.etutorium.com#subscribe">
			    <button class="btn">Зарегистрироваться</button>
			    <div class="clearfix"></div>
			    <p>Формы отключены</p>
			</form>
		</div>
		<div class="overlay"></div>
	</div>

	<div class="lightbox" id="reg">
		<div class="box content-modal">
			<a class="button cancel" href="#price">X</a>
			<div class="block-left">	
				<form action="/#thanks-elforum" id="regForm">
					<p>Количество участников</p>
					<div>
						<img src="images/2-ych.png" alt=""> <p>&nbsp;&nbsp;- скидка 10%</p>
						<br/>
						<img src="images/3-ych.png" alt=""><p> &nbsp;&nbsp;- скидка 15%</p>
					</div>
					<input name="ych" type="number" min="1" max="100" required class="ych" onchange="updateAmount(this.value,<?php echo $new_price; ?>,1)" value="1">
					<div class="clearfix"></div>
					<p>Имя </p>
					<input name="name" type="text" id="name_so" required>
					<p>Фамилия </p>
					<input name="lastname" type="text" id="lastname_so" required>
					<p>E-mail </p>
					<input name="email" id="email_so" type="email" pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{1,20}$" required>
					<p>Телефон</p>
					<input name="phone" id="phone_so" type="text" required minlength="10">
					<input id="bill_live_places" type="hidden" data-vtigerfield='bill_live_place' value="1">
					<input id="bill_live_amount" type="hidden" data-vtigerfield='bill_live_amount' value="<?php echo $new_price; ?>">
					<p><a href="javascript: displ('var-15')">У вас есть промокод?</a></p>
						<div id="var-15" style="display: none;width:100%">
							<input name="promo" type="text">
						</div>
					<button id="regFormSubmitBtn" style="display:none"></button>
					<p>Формы отключены</p>
				</form>

			</div>
			<div class="block-right">
				<p>Сумма к оплате:</p>
				<p id="amount" class="zag-green"><?php echo $new_price . ' ' . $currency; ?></p>

				<p>Запросить счет и документы</p>
				<form action="/#thanks-elforum">
					<button type="submit" name="btn-submit" id="btn-submit">Забронировать</button>
				</form>
				<p>или</p>
				<form>
					<button type="submit" class="btn-pay" id="btn-submit">Оплатить онлайн</button>
					<img src="images/oplata.png" alt="Оплатить">
				</form>
			</div>
		</div>
		<div class="overlay"></div>
	</div>


	<div class="factor">
		<div class="wrapper">
			<img src="images/factor.png" alt="">
			<h3>И ЕЩЕ <b>3</b> ВАЖНЫХ ФАКТА ОБ ELFORUM 2016</h3>
			<hr>
			<div class="clearfix"></div>
		</div>
		<div class="slider-bg">

			<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
						<li>
							<p>ПРОДУКТИВНЫЙ НЕТВОРКИНГ</p>
							<p><em>Гораздо больше, чем вежливое “Добрый день, меня зовут Иван Иванович, вот моя визитка”.</em></p>
							<p>ELFORUM 2016 - это удачный микс важного, серьезного и интересного, полезный материал в увлекательной форме, ценные знакомства, деловые связи и живой обмен мнениями. Даже не надейтесь, что мы оставим вас скучать наедине с чашкой кофе в руках. Каждый участник сможет обсудить с любым спикером насущные вопросы и вместе достигнуть комфортного взаимодействия, как в рамках доклада, так и в личной неформальной беседе. </p>
						</li>
					</ul>
					<ul>
						<li>
							<p>ТОЧКА СБОРКИ И КОНЦЕНТРАЦИЯ ЭКСПЕРТИЗЫ</p>
							<p><em>Где еще в Украине могут собраться игроки рынка e-learning, чтобы окунуться в среду профессионалов своего дела и задать вектор развития на 2017 год? </em></p>
							<p>Мы решили создать такое место! В этот день прокачаться смогут как независимые тренера и учебные центры, так и руководители/сотрудники компаний, которые хотят больше узнать о разработке и внедрении системы корпоративного онлайн-обучения. </p>
						</li>
					</ul>
					<ul>
						<li>
							<p>100% ПРАКТИКА</p>
							<p><em>Прекрасная возможность обменяться опытом, почерпнуть новые идеи и просто вдохновиться. </em></p>
							<p> Вас ждет мощный поток инсайтов, демонстрация работающих тактик, освещение новых трендов, практические наработки и готовые руководства к действию. Мы покажем все, что происходит в отрасли дистанционного обучения, откроем новые грани и перспективы развития e-learning в Украине.</p>
						</li>
					</ul>
					
					<nav>
						<a href="#">Факт 1</a>
						<a href="#">Факт 2</a>
						<a href="#">Факт 3</a>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.catslider.js"></script>
		<script src="js/modernizr.custom.63321.js"></script>
		<script>
			$(function() {
				$( '#mi-slider' ).catslider();
			});
		</script>

 		</div>
		</div>
	</div>

<p id="partners"></p>
	<div class="partners">
		<div class="wrapper">
			<h2>ПАРТНЕРЫ И СПОНСОРЫ</h2>
			<hr/>
			<p class="part">Главный HR-партнер</p>
			<div>
				<a href="https://www.work.ua/" target="_blank"><img src="images/work_on_white.png" alt=""></a>		
			</div>

			<p class="part">Карьерный партнер</p>
			<div>
				<a href="https://hh.ua" target="_blank"><img src="images/HH-logo.gif" alt=""></a>
			</div>

			<p class="part">Информационные партнеры</p>
			<div>
				<a href="http://www.trn.ua/" target="_blank"><img src="images/TRN-logo.png" alt=""></a>
				<a href="http://finacademy.net/" target="_blank"><img src="images/logo-fa.png" alt=""></a>
				<a href="http://collaborator.com.ua/" target="_blank"><img src="images/partner-1.png" alt=""></a>
				<a href="http://elearncorpua.blogspot.com" target="_blank"><img src="images/CELC_logo.jpg" alt=""></a>
				<br/><br/><br/>
				<a href="http://tmx-learning.ru" target="_blank"><img src="images/tmx-logo.jpg" alt=""></a>
				<a href="http://seotech.com.ua" target="_blank"><img src="images/logo-imt-vector-rus.png" alt=""></a>
				<a href="http://itrends.digital/" target="_blank"><img src="images/LOGO_itrends_digital.png" alt=""></a>
				<a href="http://k-l.com.ua/" target="_blank"><img src="images/kadrovik-logo.jpg" alt=""></a>
				<br/><br/><br/>
				<a href="http://www.kadrovik01.com.ua" target="_blank"><img src="images/mcfr-logo.png" alt=""></a>
				<a href="http://www.novapersona.com" target="_blank"><img src="images/nova-persona-logo.png" alt=""></a>
				<a href="http://medical-bridge.com/" target="_blank"><img src="images/MedicalBridge.png" alt=""></a>
				<a href="http://hrliga.com/" target="_blank"><img src="images/HR_logo.jpg" alt=""></a>	
				<br/><br/><br/>
				<a href="http://kadrovyk.com.ua/" target="_blank"><img src="images/kadrovik-ua.png" alt=""></a>	
				<a href="http://www.zhyvoedelo.com/" target="_blank"><img src="images/zhivoe-vremya-logo.png" alt=""></a>
				<a href="https://www.eduget.com/" target="_blank"><img src="images/eduget-logo.png" alt=""></a>	
				<a href="http://www.startup.org.ua/" target="_blank"><img src="images/startup-news-logo.png" alt=""></a>
				<br/><br/><br/>
				<a href="http://www.ru.all.biz" target="_blank"><img src="images/Allbiz-logo.png" alt=""></a>
				<a href="http://hotwork.com.ua/" target="_blank"><img src="images/hotwork-logo.png" alt=""></a>
				<a href="https://raccoongang.com/" target="_blank"><img src="images/roccongang.png" alt=""></a>
				<a href="http://ain.ua/" target="_blank"><img src="images/Logo-ain.png" alt=""></a>
				<br/><br/><br/>
				<a href="http://brainbasket.org/" target="_blank"><img src="images/BBF-logo.png" alt=""></a>
				<a href="http://tallanto.com" target="_blank"><img src="images/Tallanto-logo.png" alt=""></a>
				<a href="https://www.epochta.com.ua/" target="_blank"><img src="images/epochta.png" alt=""></a>
				<a href="http://itea.ua/" target="_blank"><img src="images/ITEA_Logo.png" alt=""></a>	
				<br/><br/><br/>
				<a href="http://www.d-academy.com.ua/" target="_blank"><img src="images/DA-logo.png" alt=""></a>
				<a href="http://ituber.me" target="_blank"><img src="images/Logo-ituber.png" alt=""></a>	
			</div>

			<a href="#partner" class="btn">Узнать о возможностях партнерства</a>
		</div>
	</div>

		<div class="lightbox" id="partner">
		<div class="box content-modal content-partner">
			<a class="button cancel" href="#partners">X</a>
			<div class="block-left">
				<p>Заполните заявку и мы отправим Вам презентацию с детальной информацией о сотрудничестве с ELForum 2016</p>	
				<form action="/#thanks-elforum-partner" id="partnerForm">
					<p>Компания* </p>
					<input name="komp" type="text" required>
					<p>Контактное лицо*</p>
					<input name="lastname" type="text" required>
					<p>E-mail* </p>
					<input name="email" type="email" pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{1,20}$" required>
					<p>Телефон*</p>
					<input name="phone" type="text" minlength="10">
					<input type="hidden" value="http://elf.etutorium.com#partner">
					<p>* обязательное поле</p>
					<button type="submit" name="btn-submit" id="partnerFormSubmitBtn">Отправить заявку</button>
					<div class="clearfix"></div>
					<p>Формы отключены</p>
				</form>

			</div>
			<div class="block-right">
				<p class="zag">Стать партнером ELFORUM 2016</p>
				<p>Вы можете поддержать ELFORUM 2016 в качестве информационного партнера или спонсора. Это отличный способ представить вашу компанию, продукты или услуги наиболее релевантной целевой аудитории, привлечь новых клиентов и завести полезные деловые отношения. </p>

				<p>Мы будем рады обсудить все форматы и возможности партнерского и спонсорского сотрудничества.</p>
				<br/>
			</div>
		</div>
		<div class="overlay"></div>
	</div>


	<div class="timer-block">
		<div class="wrapper">
			<h2>ОСТАЛОСЬ МАЛО ВРЕМЕНИ</h2>
			<div class="block-left">
				  <div class="timer">
                    <span class="timer-span"></span>
                    <span class="timer-span"></span>
                    <span class="timer-span"></span>
                    <span class="timer-span"></span>
                </div>
                <script src="js/index-timer.js"></script>
			</div>
			<div class="block-right">
				<p>Все.. решено!</p>
				<a href="#price" class="btn ancLinks btn-jump">Я ЕДУ НА ELFORUM 2016</a>
			</div>
		</div>
	</div>


<p id="elfs"></p>
	<div class="team">
		<div class="wrapper">
			<img src="images/komanda.png" alt="команда ELFов">
			<h2>А вот и мы - команда ELF<span>ов</span></h2>
			<div>
				<div>
					<img src="images/a-karpova.png" alt="Анастасия Карпова">
					<div>
						<p>Анастасия Карпова</p>
						<p>Руководитель eTutorium / главный координатор конференции</p>
						<p>+38 (067) 618-12-11</p>
						<p><a href="mailto:akarpova@etutorium.com">akarpova@etutorium.com</a></p>
					</div>
				</div>
				<div>
					<img src="images/j-koroleva.png" alt="Юлия Королева">
					<div>
						<p>Юлия Королева</p>
						<p>по вопросам участия и оплате</p>
						<p>+38 (067) 611-10-95</p>
						<p><a href="mailto:koroleva@etutorium.com">koroleva@etutorium.com</a></p>
					</div>
				</div>
				<div>
					<img src="images/a-nekrasova.png" alt="Алена Некрасова">
					<div>
						<p>Алена Некрасова</p>
						<p>по вопросам партнерства и спонсорства</p>
						<p>+38 (067) 611-10-95</p>
						<p><a href="mailto:anekrasova@etutorium.com">anekrasova@etutorium.com</a></p>
					</div>
				</div>
			</div>
			<br/>
			<div>
				<div class="block-left">
					<img src="images/a-rudenko.png" alt="Алексей Руденко">
					<div>
						<p>Алексей Руденко</p>
						<p>по вопросам СМИ, SMM, инфопартнерство</p>
						<p>+38 (067) 611-10-95</p>
						<p><a href="mailto:arudenko@etutorium.com">arudenko@etutorium.com</a></p>
					</div>
				</div>
				<div class="block-right">
					<div>
						<div class="form">
							<p>есть вопросы? <br/>
							<span>Закажите обратный звонок</span></p>
							<form action="/#thanks-elforum">
								<p>Введите имя</p>
								<input name="name" type="text" required> 
								<input name="email" type="hidden" required value="callback">
								<p>Введите телефон</p>
			                    <input name="phone" type="text" required minlength="10">
			                    <input type="hidden" value="http://elf.etutorium.com#callback">
			                    <button type="submit" name="btn-submit" id="callForm2SubmitBtn" class="btn">Заказать звонок</button>
			                    <div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="organizator">
		<div class="wrapper">
			<div class="block-left">
				<img src="images/organizator.png" alt="">
				<h2>КТО ЗА ВСЕМ ЭТИМ СТОИТ?</h2>
				<hr/>
				<p><a href="http://etutorium.com.ua">Платформа вебинаров eTutorium</a> - флагман инноваций в сфере онлайн-обучения.</p>	
			</div>
			<div class="block-right">
				<p>В портфеле компании такие масштабные отраслевые мероприятия, как “Бизнес в дистанционном обучении: секреты прибыльности от практиков” (2000+ слушателей) и “Геймификация и интерактив в дистанционном обучении” (1600+ слушателей). </p>

				<p style="margin-top: 30px;">В 2016 году мы “загорелись” идеей поддержать интересные образовательные проекты, которые только начинают внедрять дистанционное обучение. Для этого организовали и провели международный конкурс на лучший старт-проект в e-learning, в котором участвовало 30 проектов из Украины, Казахстана и других стран СНГ.</p>

				<p>В свою очередь, эта конференция станет отправной точкой для взращивания и масштабирования потенциала онлайн-обучения в Украине!</p>
			</div>
			<div class="about">
				<img src="images/logo-etutorium.png" alt="eTutorium">
				<div>
					<p>120 +</p>
					<p><span>онлайн-мероприятий</span> в месяц</p>
				</div>
				<div>
					<p>3000 +</p>
					<p><span>выпускников</span> Академии тьюторов в год</p>
				</div>
				<div>
					<p>100 +</p>
					<p><span>мастер-классов</span> от ведущих спикеров СНГ за 2016 г.</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<p id="contacts"></p>
	<div class="contacts">
		<div class="block-cont">
			<h3>Место встречи</h3>
			<p>Гостиница Русь, 1 этаж</p>
			<p>ул. Госпитальная, 4</p>
			<p> Киев</p>
		</div>
		<div class="block-left">
			<img src="images/zal.png" alt="Premier Hotel Pus">
		</div>
		<div class="block-right">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=fW3FD0j07BrSg0C9HPyrk6sGogfLyNBJ&amp;width=100%&amp;height=375&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
		</div>
	</div>

	<div class="soc-block" id="soc">
		<div class="wrapper">
			<h2>Будьте в курсе!</h2>
			<hr/>
			<p>Следите за нашими новостями в соцсетях или подпишитесь на рассылку</p>
			<div class="block-left">
				<a href="https://www.facebook.com/events/1677481659208667/" target="_blank"><img src="images/soc-fb-footer.png" alt="Facebook"></a>
				<a href="https://vk.com/event132059651" target="_blank"><img src="images/soc-vk-footer.png" alt="Vkontakte"></a>
				<a href="https://twitter.com/eTutorium" target="_blank"><img src="images/soc-twitter-footer.png" alt="Twitter"></a>
			</div>
			<div class="block-right">
				<a href="#subscribe" class="btn btn-jump">Подписаться</a>
			</div>
			<div class="footer">
				<p><a href="http://etutorium.com.ua">eTutorium</a> - Все права защищены 2016</p>
			</div>
		</div>
	</div>

	<div class="lightbox" id="subscribe">
		<div class="box content-modal content-soc">
			<a class="button cancel" href="#soc">X</a>
			<p>Подпишитесь на обновления eTutorium</p>
			<form action="/#thanks-elforum" id="subscribeForm1">
				<p>Введите имя</p>
				<input name="lastname" type="text" required>
				<p>Введите E-mail</p>
			    <input name="email" type="text" required pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{1,20}$">
			    <input type="hidden" value="http://elf.etutorium.com#subscribe">
			    <input type="hidden" value="8228822">
			    <button type="submit" name="btn-submit" id="subscribeForm1SubmitBtn" class="btn" >Подписаться</button>
			    <div class="clearfix"></div>
			    <p>Формы отключены</p>
			</form>
		</div>
		<div class="overlay"></div>
	</div>


	<div class="lightbox" id="thanks-elforum">
		<div class="box content-modal content-thanks">
			<a class="button cancel" href="#price">X</a>
			<h2>Cпасибо за <br/>Вашу заявку!</h2>
			<img src="images/phonea.png" alt="Телефон">
			<p>Наш менеджер <b>Ольга Корбан</b> свяжется с Вами в ближайшее время!</p>
			<br/><br/><br/>
			<p>Мы в соцсетях: </p>
			<a href="https://www.facebook.com/events/1677481659208667/" target="_blank"><img src="images/soc-fb-grey.png" alt="Facebook"></a>
			<a href="https://vk.com/event132059651" target="_blank"><img src="images/soc-vk-grey.png" alt="Vkontakte"></a>
			<a href="https://twitter.com/eTutorium" target="_blank"><img src="images/soc-twitter-grey.png" alt="Twitter"></a>

		</div>
		<div class="overlay"></div>
	</div>

	<div class="lightbox" id="thanks-elforum-partner">
		<div class="box content-modal content-thanks">
			<a class="button cancel" href="#partners">X</a>
			<h2>Cпасибо за <br/>ваш интерес к мероприятию!</h2>
			<img src="images/phonea.png" alt="Телефон">
			<p>Наш менеджер <b>Алена Некрасова</b> свяжется с вами в ближайшее время!</p>
			<br/><br/><br/>
			<p>Мы в соцсетях: </p>
			<a href="https://www.facebook.com/events/1677481659208667/" target="_blank"><img src="images/soc-fb-grey.png" alt="Facebook"></a>
			<a href="https://vk.com/event132059651" target="_blank"><img src="images/soc-vk-grey.png" alt="Vkontakte"></a>
			<a href="https://twitter.com/eTutorium" target="_blank"><img src="images/soc-twitter-grey.png" alt="Twitter"></a>

		</div>
		<div class="overlay"></div>
	</div>
</body>
</html>