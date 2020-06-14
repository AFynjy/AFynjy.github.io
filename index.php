<!DOCTYPE html>
<html lang="ru">
    <head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Adidas</title>
	</head>
	<body>
	
	
		<header class="header">
			<div class="container">	
				<div class="header__inner">
					<div class="header__logo">
						<img src="img/logo.png" alt="">
					</div>
					<nav class="nav">
						<a class="nav__link" href="/products/man.php">Мужчины</a>
						<a class="nav__link" href="/products/woman.php">Женщины</a>
						<a class="nav__link" href="#">Дети</a>
						<a class="nav__link" href="/basket.php">Корзина</a>
						<?php
							if($_COOKIE['user'] == ''):
						?>
						<a class="nav__link" href="/register.php">Войти</a>
						<?php else :?>
						<a class="nav__link" href="/exit.php">Выйти</a>
						<?php endif;?>

					</nav>
				</div>
			</div>
		</header>
		
		
	<!-- Intro -->	
	
		<div class="intro">	
			<div class="container">
				<div class="intro__inner">
					<h1 class="intro__title">EQT BASK ADV УЖЕ ЗДЕСЬ</h1>
					<a class="btn btn--red" href="#">Купить  → </a>
				</div>
			</div>
		</div>	
		
		
		<div class="container">
			<h2 class="hit">Хиты продаж</h2>
		</div>
		
		
		
	<!-- Features -->
		<div class="container">
			<div class="features">
				<a class="features__item" href="#">
					<div class="features__item1">
						<img class="features__icon"  src="img/pic1.png" alt="">
						<h2 class="features__title"></h2>
						<div class="features__text">Originals</br></br>БРЮКИ 3-STRIPES</br> 4 999 р.</br></br></br></div>
					</div>
				</a>
				
				<a class="features__item" href="#">
					<div class="features__item2">
						<img class="features__icon" src="img/pic2.png" alt="">
						<h2 class="features__title"></h2>
						<div class="features__text">Originals</br></br>ТОЛСТОВКА 3-STRIPES</br> 5 999 р.</br></br></br></div>
					</div></br></br></br>
				</a>
				
				<a class="features__item" href="#">
					<div class="features__item3">
						<img class="features__icon" src="img/pic3.png" alt="">
						<h2 class="features__title"></h2>
						<div class="features__text">Originals</br></br>КРОССОВКИ OZWEEGO</br> 9 999 р.</br></br></br></div>
					</div>
				</a>
				
				<a class="features__item" href="#">
					<div class="features__item4">
						<img class="features__icon" src="img/pic4.png" alt="">
						<h2 class="features__title"></h2>
						<div class="features__text">Originals</br></br>ХУДИ ESSENTIALS</br> 8 999 р.</br></br></br></div>
					</div>
				</a>
			</div><!-- /.Features -->
		</div><!-- /.container-->
		
		
		
		<!-- Works -->
		<div class="works">
			<div class="works__item">
				<h4>ADIDAS — ИСТОРИИ, СТИЛИ, СПОРТИВНАЯ ОДЕЖДА И ОБУВЬ С 1949 ГОДА</h4></br>
				Спорт держит нас в форме. Учит дисциплине. Объединяет нас. Через спорт мы можем менять жизни. 
				В том числе с помощью воодушевляющих историй спортсменов. Чтобы помочь тебе подняться и двигаться вперед. 
				В спортивных товарах используются новейшие технологии, которые помогут тебе достичь лучших результатов. 
				adidas становится домом для бегуна, баскетболиста, юного футболиста и поклонника фитнеса. Того, кто любит покорять горные тропы или 
				начинать свой день с медитации. Музыканты тоже носят три полоски. На сцене, на фестивалях и просто на улицах. Наша спортивная одежда 
				помогает сосредоточиться, когда звучит стартовый свисток. Во время гонки. На финишной черте. Мы здесь, чтобы поддерживать всех, кому 
				важен спорт. Улучшать их игру. Их жизни. И менять мир к лучшему.
			</div>
			<div class="works__item">
				<h4>ТВОЙ СПОРТИВНЫЙ МАГАЗИН. ДЛЯ ЛЮБОГО ВИДА СПОРТА</h4></br>
				adidas создает экипировку для атлетов всех направлений. С теми, кто любит менять ход игры.
				Бросать вызов условностям. Нарушать правила и устанавливать новые. Затем нарушать их снова. 
				Спортсмены надевают нашу спортивную одежду перед матчем. Чтобы сосредоточиться. И во время соревнований. Чтобы победить. 
				Мы — магазин спорттоваров для женщин, где бра и леггинсы имеют свое предназначение. От низкого до высокого уровня компрессии и поддержки. 
				Мы создаем, обновляем и повторяем. Тестируем новые технологии в действии. На поле, на дорожке, корте и в бассейне.
				Мы вдохновляемся спортивными силуэтами прошлого, создавая новые модели для городских улиц. Как NMD или спортивные костюмы Firebird. 
				Классические спортивные силуэты возвращаются. Как Stan Smith. И Superstar. Сегодня их можно увидеть на улицах и в медиа.
			</div>
		</div><!-- /.Works -->
		
		
		
		<!--cloth-->
		<div class="container">
			<div class="cloth">
				<div class="cloth__item">
					<h2>Категории</h2></br> 
					<a class="cloth__item1" href="#"> Обувь </a></br> 
					<a class="cloth__item1" href="#"> Одежда </a></br>
				</div>
				<div class="cloth__item">
					<h2>Виды спорта</h2></br> 
					<a class="cloth__item1" href="#"> Футбол </a></br> 
					<a class="cloth__item1" href="#"> Тренинг </a></br>
				</div>
				<div class="cloth__item">
					<h2>О компании</h2></br> 
					<a class="cloth__item1" href="#"> О нас </a></br> 
					<a class="cloth__item1" href="#"> Вакансии </a></br>
				</div>
				<div class="cloth__item">
					<h2>Помощь</h2></br> 
					<a class="cloth__item1" href="#"> Доставка </a></br> 
					<a class="cloth__item1" href="#"> Возварт </a></br>
				</div>
				
			</div>
		</div><!-- /.Cloth -->
		
		
		<footer>	
		<!--underground-->
			<div class="underground">
				<a class="underground__item" href="#">
					<img src="img/vks.png" height="36" alt="" >
				</a>
				<a class="underground__item" href="#">
					<img src="img/inst.png" height="36" alt="">
				</a>
				<a class="underground__item" href="#">
					<img src="img/youtub.png" height="36" alt="">
				</a>
			</div>
		</footer>
	</body>
</html>