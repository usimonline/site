<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 35;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

	<title>Заказать дипломную работу в компании <?php echo $site_name;?> из СПБ</title>

	<meta name="description" content="Для вас в СПБ без предоплаты и наценок за срочное выполнение можно
	 заказать дипломную работу стоимостью 5000 рублей. Компания <?php echo $site_name;?> принимает по адресу  ">
	<meta name="keywords" content="Заказать дипломную работу СПБ">

	<?php
	require("head_1.php");
	?>
<body>
<?php
require("header.php");
?>

<!-- section of script -->


<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
	<section class="main">
		<?php
		require("calc2.php");
		?>
		<div>

<h1>Заказать дипломную работу в компании <?php echo $site_name;?> из СПБ</h1>
			<p>Наша компания <?php echo $site_name;?> специализируется на комплексном выполнении дипломных работ и магистерских
				диссертаций. Для новых заказчиков предоплата отменена!</p>
			<div class="marked"> <p>Над заказами будут работать доценты и кандидаты из СПбГУ, МГУ, МГИМО и из других ведущих вузов
				Российской Федерации. Опытные авторы в гуманитарных дисциплинах и естественных науках, математика,
				архитектура, любые програмы и языки, автокад, C#, дипломы по экономике, педагогике, лингвистике, праву
				или любой иной дисциплине.s</p></div>

<h3><span style="color: maroon;">Электрoнная почта для партнерoв <?php echo $site_name;?></span></h3><p></p><p><u><span style="color: blue;">
						<?php echo $email; ?></span></u><br><br><u><span style="color: blue;"><?php echo $email3; ?></span></u><br><br>
<h4><span style="color: maroon;">Электрoнная почта для заказчиков (присылайте тему, oбъем, предмeт рабoты)</span></h4><span style="color: blue;">
				<?php echo $email2; ?></span><br><br>

</p><h5><span style="color: maroon;">Часы работы</span></h5><p><?php echo $vremia_raboti; ?></p><br>

			<!-- </p><h3><span style="color: maroon;">Телефоны для партнеров</span></h3><p><?php //echo $site_phone; ?></p><br> -->

<h3><span style="color: maroon;">Расположение офиса <?php echo $site_name;?></span></h3>Адрес - <?php echo $adres; ?>
			<?php if ($town == 'piter') : ?>
			<br>Мы нахoдимся в самом центре горoда - недалекo от метрo.<div>При себе необходимо
				иметь дoкумент, в бизнес-цeнтрe действуeт прoпускной рeжим.<br>
				<?php endif ?>
<h2>Офис нашей компании на карте Яндекса для оплаты заказа в Санкт-Петербурге наличными</h2>
<?php echo $url_adres_yandex_frame; ?>
				<?php if ($town == 'piter') : ?>
<div class="marked">Фотографии бизнес-центра и офиса</div>

<a href="index_files/2.jpg" onclick="return showImage(&#39;./index_files/2.jpg&#39;);">
	<dfn title="index_files/2.jpg"></dfn><img src="./index_files/2.jpg" width="140" height="140" alt="">
</a>&nbsp;<a href="./index_files/3.jpg" onclick="return showImage(&#39;./index_files/3.jpg&#39;);">
					<dfn title="./index_files/3.jpg"></dfn><img src="./index_files/3.jpg" width="140" height="140" alt="">
				</a>&nbsp;
				<a href="./index_files/4.jpg" onclick="return showImage(&#39;./index_files/4.jpg&#39;);">
					<dfn title="./index_files/4.jpg"></dfn><img src="./index_files/4.jpg" width="140" height="140" alt=""></a>
			</div>
		<?php endif ?>
		</div>
		<p>Сроки:</p><ul><li> За 3-4 дня мы можем сделать курсовую.</li>
			<li> За 7-8 дней мы сделаем дипломный проект. </li>
			<li> За 12-13 дней наши авторы выполнят магистерскую.</li></ul>
		<div class="backgrounded">   <p>Мы специализируемся на качественном выполнении срочных заказов. При этом мы не задираем цены за такое срочное выполнение.
			Наши внутренние специалисты следят за своевременным выполнением работ сразу на трех этапах. Наши заказчики уведомляются о
			готовности каждой из частей работ. Поэтому мы всерьез можем гарантировать соблюдение сроков выполнения дипломных и магистерских
			работ даже в недельные сроки.
			Если автор не укладывается в сроки, мы возвращаем оплату, частично или в полном объёме. </p></div>
		<p>Авторы нашей образовательной компании одни из первых в рейтинге интернета по версии портала "Кнов База".
			В нашей компании цена работ ниже на 24%, чем в компании "Заочник.ру", а уникальность текстов выше на 15%, чем у компании "Автор24".
			<a href="http://knowbaza.ru/1001-vivastudent_ru.html" rel="nofollow">Ссылки на рейтинг "Кнов Базы".</p>
		<p><a href="<?php echo $url_town_piter;?>" rel="nofollow">Нажмите на ссылку, закажите</a> и успешно пройдите защиту!</p>

	</section>
</div>


<section class="offers"><div><a href="aktcii_i_skidki.php" rel="nofollow"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
<?php
require("responses.php");
require("payment.php");
require("footer.php");
?>
</body>
</html>