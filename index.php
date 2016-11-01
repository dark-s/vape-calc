<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Test form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="form_wrap">
				<form action="/index.php" id="calc_form" method="post">
					<div class="row input_row"><span class="col-md-6">Крепость в базовой жидкости: </span><input title="Крепость в базовой жидкости" class="col-md-6" name="base_nic" type="text"></div>
					<div class="row input_row"><span class="col-md-6">Желаемая крепость на выходе: </span><input title="Желаемая крепость на выходе" class="col-md-6" name="output_nic" type="text"></div>
					<div class="row input_row"><span class="col-md-6">Процент пропиленгликоля (PG): </span><input title="Процент пропиленгликоля (PG)" class="col-md-6" name="pg" type="text"></div>
					<div class="row input_row"><span class="col-md-6">Процент пищевого глицерина (VG): </span><input title="Процент пищевого глицерина (VG)" class="col-md-6" name="vg" type="text"></div>
					<div class="row input_row"><span class="col-md-6">Процент дистиллированной воды: </span><input title="Процент дистиллированной воды" class="col-md-6" name="dist" type="text"></div>
					<div class="row input_row"><span class="col-md-6">Процент ароматизатора: </span><input title="Процент ароматизатора" class="col-md-6" name="aroma" type="text"></div>
					<div class="row input_row"><span class="col-md-6">Требуемый объём жидкости на выходе: </span><input title="Требуемый объём жидкости на выходе" class="col-md-6" name="liq_bulk" type="text"></div>
					<div class="row input_row"><span class="col-md-6">Количество капель в ml: </span><input title="Количество капель в ml" class="col-md-6" placeholder="33" name="drops" type="text"></div>
					<div>
						<table id="res" class="disabled result" style="width: 600px;" border="0" cellpadding="5" cellspacing="5" align="center">
							<tbody>
								<tr>
									<td style="border: 0; background-color: #3e577e; text-align: center;" class="article" colspan="3"><strong><span style="color: #ffffff;">Результат</span></strong></td>
								</tr>
								<tr> 
									<td style="text-align: center;"><strong>компонент</strong></td>
									<td style="text-align: center;"><strong>кол-во капель</strong></td>
									<td style="text-align: center;"><strong>миллилитры</strong></td>
								</tr>
								<tr>
									<td style="width: 250px;">Базовой жидкости</td>
									<td style="width: 50px;"><input type="text" readonly="readonly" id="n_base" style="text-align: center;"></td>
									<td><input readonly="readonly" id="base" type="text" style="text-align: center;"></td>
								</tr>
								<tr>
									<td style="width: 250px;">Пропиленгликоля</td>
									<td style="width: 50px;"><input type="text" readonly="readonly" id="n_pg2" style="text-align: center;"></td>
									<td><input readonly="readonly" id="pg2" type="text" style="text-align: center;"></td>
								</tr>
								<tr>
									<td style="width: 250px;">Пищевого глицерина</td>
									<td style="width: 50px;"><input type="text" readonly="readonly" id="n_vg2" style="text-align: center;"></td>
									<td><input readonly="readonly" id="vg2" type="text" style="text-align: center;"></td>
								</tr>
								<tr>
									<td style="width: 250px;">Дистиллированной воды</td>
									<td style="width: 50px;"><input type="text" readonly="readonly" id="n_ad2" style="text-align: center;"></td>
									<td><input readonly="readonly" id="ad" type="text" style="text-align: center;"></td>
								</tr>
								<tr>
									<td style="width: 250px;">Ароматизатора</td>
									<td style="width: 50px;"><input type="text" readonly="readonly" id="n_ap2" style="text-align: center;"></td>
									<td><input readonly="readonly" id="ap2" type="text" style="text-align: center;"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="error"><p class="errors"></p></div>
					<div class="row submit_button"><button type="submit" name="calc" class="btn btn-primary btn-lg">Просчитать</button></div>
				</form>
			</div>
		</div>
		<!-- Ajax -->
		<script src="ajax.js" type="text/javascript"></script>
	</body>
</html>