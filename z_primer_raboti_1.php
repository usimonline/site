<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 1;
?>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php
	$name_rab = $count_text % 11;
	switch($name_rab){

		case 0:
			$name_rab_text = "дипломной работы";
			break;
		case 1:
			$name_rab_text = "магистерской диссертации";
			break;
		case 2:
			$name_rab_text = "курсовой работы";
			break;
		case 3:
			$name_rab_text = "курсовой";
			break;
		case 4:
			$name_rab_text = "дипломной";
			break;
		case 5:
			$name_rab_text = "магистерской";
			break;
		case 6:
			$name_rab_text = "эссе";
			break;
		case 7:
			$name_rab_text = "реферата";
			break;
		case 8:
			$name_rab_text = "контрольной";
			break;
		case 9:
			$name_rab_text = "статьи";
			break;
		case 10:
			$name_rab_text = "выпускной работы";
			break;


	}
	?>

	<title>Пример отрывка готовой дипломной работы по бухгалтерскому учету от рефератной компании "<?php echo $site_name;?>"</title>

	<meta name="description" content="Мы предлагаем вам помотреть пример готовой дипломной работы от нашей компании <?php echo $site_name;?>.
	Типичный пример по бухгалтерскому учету позволит вам оценить квалификацию наших мастеров пера, заказывайте работы у нас!">
	<meta name="keywords" content="Пример готовой дипломной работы по бухгалтерскому учету">

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
			<h1>Пример готовой дипломной работы по бухгалтерскому учету от рефератной компании "<?php echo $site_name;?></h1>
			<?php
				$f = fopen("texts/new_" . $count_text, "r");
				$col_simv = 0;
				while (!feof($f)) {
					$fgets = fgets($f);
					$col = iconv_strlen($fgets);
					$col_simv = $col_simv + $col;
					if ($col > 2) {
						echo $fgets . "<br /><br />";

					}

				}
				fclose($f);
			$count_text = $count_text + 1;
			?>
			<br><a href="z_primer_raboti_<?php echo $count_text; ?>.php">Смотреть пример работы <?php echo $count_text; ?> далее</a>
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