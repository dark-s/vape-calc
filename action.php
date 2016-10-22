<?php
	if ($_POST){
		$base_nic = htmlspecialchars(trim(intval($_POST['base_nic'])));
		$output_nic = htmlspecialchars(trim(intval($_POST['output_nic'])));
		$pg = htmlspecialchars(trim(intval($_POST['pg'])));
		$vg = htmlspecialchars(trim(intval($_POST['vg'])));
		$dist = htmlspecialchars(trim(intval($_POST['dist'])));
		$aroma = htmlspecialchars(trim(intval($_POST['aroma'])));
		$liq_bulk = htmlspecialchars(trim(intval($_POST['liq_bulk'])));
		$drops = htmlspecialchars(trim(intval($_POST['drops'])));

		$json = array();

		if(!$base_nic && !$output_nic && !$pg && !$vg && !$dist && !$aroma && !$liq_bulk && !$drops){
			$json['error'] = 'Вы зaпoлнили нe всe пoля!'; // пишeм oшибку в мaссив
			echo json_encode($json); // вывoдим мaссив oтвeтa 
			die(); // умирaeм
		}

		if(($pg + $vg + $dist + $aroma) != 100){
			$json['error'] = 'Неверный процент PG, VG, воды и ароматизатора!'; // пишeм oшибку в мaссив
			echo json_encode($json); // вывoдим мaссив oтвeтa 
			die(); // умирaeм
		}

		if($base_nic > 0 && $output_nic > 0){
			$json['base'] = ($liq_bulk / ($base_nic / $output_nic));
		} else {
			$json['base'] = 0;
		}

		$json['n_base'] = ($drops * $json['base']);

		$base2 = $json['base'] * 1;

		$json['aroma_out'] = ($liq_bulk * ($aroma / 100));

		$aroma_out2 = $json['aroma_out'] * 1;

		$json['n_aroma_out'] = ($drops * $json['aroma_out']);

		$json['dist_out'] = (($liq_bulk - $base2 - $aroma_out2) * ($dist / 100));

		$json['n_dist_out'] = ($drops * $json['dist_out']);

		$json['pg_out'] = (($liq_bulk - $base2 - $aroma_out2) * ($pg / 100));

		$json['n_pg_out'] = ($drops * $json['pg_out']);

		$json['vg_out'] = (($liq_bulk - $base2 - $aroma_out2) * ($vg / 100));

		$json['n_vg_out'] = ($drops * $json['vg_out']);

		echo json_encode($json);
	}
?>