<!--- thank`s for "WebForMySelf" https://www.youtube.com/watch?v=Ly9kBgpGirA&t=330s --->

<?php
function get_pass() {
	$str = "qazwsxedcrfvtgbyhnujmikolp1234567890QAZWSXEDCRFVTGBYHNUJMIKOLP";

	$str_lenght = strlen($str) - 1;

	$str_gen = '';

	for($i = 0; $i < LENGHT; $i++) {

		$x = mt_rand(0, $str_lenght);

		if($i != 0) {
			if($str_gen[strlen($str_gen) - 1] == $str[$x]) {
				$i--;
				continue;
			}
		}

		$str_gen .= $str[$x];

	}

	return $str_gen;
}
?>