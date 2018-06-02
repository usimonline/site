<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 1;
?>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php

	?>

	<title>Дипломная работа: пример и готовая работа от центра <?php echo $site_name;?></title>

	<meta name="description" content="Готовая дипломная работа от образовательного центра <?php echo $site_name;?> за 3000 рублей.
	Быстрее заказывайте у нас, просите пример любой диплмоной работы бесплатно, мы можем сделать быстро любой заказ.">
	<meta name="keywords" content="дипломная работа пример готовая работа">

	<?php
	require("head_1.php");
	?>
<body>
<?php
require("header.php");
?>
<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
	<section class="main">
		<?php
		require("calc2.php");
		?>
		<div>
<!-- section of script -->
			<h1>Пример дипломной или курсовой работы: готовая работа от центра <?php echo $site_name;?></h1>
			<div class="backgrounded"> <p>Для проверки качества и содержания дипломной работы в нашем учебном центре
					существует отдел контроля качества. Поэтому у нас очень качественные готовые работы, покажем примеры, спрашивайте!
					Сотрудники из данного отдела отслеживают все параметры работы,
					начиная с темы, заданию клиента. Все главы и разделы тщательно проверяются по установленным правилам на
					теме и названиям глав. Специалисты-архитекторы и программисты сверяют
					чертежи и программы по методическим указаниям клиента и всем госстандартам.</p></div>
			<p>
			<?php

			for($i = 0; $i < 15; $i++) {
				$count = $i;
				$name_rab = $count % 15;
				switch ($name_rab) {
					case 0:
						$name_rab_text = "Готовая работа по бухгалтерскому учету";//"дипломной работы";
						break;
					case 1:
						$name_rab_text = "Курсовая Реформирование управления";
						break;
					case 2:
						$name_rab_text = "Диплом по менеджменту";
						break;
					case 3:
						$name_rab_text = "Дипломная по педагогике";
						break;
					case 4:
						$name_rab_text = "Работа по налоговой сфере";
						break;
					case 5:
						$name_rab_text = "Физическая культура";
						break;
					case 6:
						$name_rab_text = "Выпускной текст по педагогике";
						break;
					case 7:
						$name_rab_text = "Обучение математике";
						break;
					case 8:
						$name_rab_text = "Уголовное право";
						break;
					case 9:
						$name_rab_text = "Психология";
						break;
					case 10:
						$name_rab_text = "Логопедия";
						break;
					case 11:
						$name_rab_text = "Право (черновик дипломной)";
						break;
					case 12:
						$name_rab_text = "Педагогика младшие школьники";
						break;
					case 13:
						$name_rab_text = "Юриспруденция";
						break;
					case 14:
						$name_rab_text = "Государственное управление";
						break;

				}
				?>
				</p><p>
				<?php
				$f = fopen("texts/new_" . ($count+1), "r");
				$col_simv = 0;
				while (!feof($f)) {
					$fgets = fgets($f);
					$col = iconv_strlen($fgets);
					$col_simv = $col_simv + $col;
					if ($col > 2) {
						echo $fgets;

					}
					if ($col_simv > 100) break;
				}
				fclose($f);


				?>
				<br><a href="z_primer_raboti_<?php echo ($count+1); ?>.php"><?php echo $name_rab_text; ?></a><br /><br />
				<?php
			}
			?>
			<h2>Наши гарантии для клиентов</h2>
			<figure> <img src="<?php echo $img_path_primeri_rabot; ?>" width="750" height="450"
						  alt="Дипломные работы и их примеры, для готовых работ стандартные гарантии качества" /> <figcaption>
					Дипломные работы и их примеры, для готовых работ стандартные гарантии качества.</figcaption> </figure>

			<p>В нашей компании "<?php echo $site_name;?>" авторы специализируются на комплексных и
				сложных для написания дипломах для университетов и колледжей,
				а также на диссертациях. Каждый Новый Клиент может заказать работу без внесения аванса.</p>
			<div class="marked"><p>Ваш заказ выполнит доцент или кандидат МГУ, МГИМО, СПбГУ и других лучших университетов России.
				Нашим надежным авторам можно доверить написание выпускных работ по гуманитарным дисциплинам и естественным
				наукам, по математике, архитектуре, в арсенале есть любые программы и фреймворки, Компас, C++;
				выпускные работы для будущих педагогов, экономистов, лингвистов, юристов и всех остальных студентов.</p></div>
			<p>Наш центр специализируется на комплексной и всесторонней разработке дипломных проектов, в том числе на срочных заказах.
				Наша компания не завышает стоимость за быстрое исполнение работ. Менеджеры нашего центра отслеживают готовность
				работ на всех этапах выполнения заказов. Мы сообщаем клиентов о завершении каждой из частей заказанной работы.
				Наш центр может обеспечить
				соблюдение срока завершения заказа выпускной работы даже за 6-7 дней.</p>

			<p><a href="order.php" target="_blank" rel="nofollow">Жми сюда, не стесняйся, и всё уточни!</a></p>

		</div>


</section>
</div>

<!-- end of script -->

<section class="offers"><div><a href="aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
<?php
require("responses.php");
require("payment.php");
require("footer.php");
?>
</body>
</html>