<?php
	
	$deg = 7;
	$style = 'tmin';		# (blank)|min|tmin
	$prefix = 'LongRepetitiveString';
	$count = pow(4,$deg);

	###
	
	$alpha = 'abcdefghijklmnopqrstuvwxyz';
	$chars = strlen($alpha);

	for ($c = $count; $c--;) {

		$upcount = $count-$c-1;

		if ($style === '') {

			echo "'LongRepetitiveString$upcount';\n";

		} else if ($style === 'min') {

			if ($c === $count - 1) {
				echo "'LongRepetitiveString$upcount',";
			} else if ($c === 0) {
				echo "'LongRepetitiveString$upcount';";
			} else {
				echo "'LongRepetitiveString$upcount',";
			}

		} else {

			if ($c === $count - 1) {
				echo "var _ = 'LongRepetitiveString',",
				"_+'$upcount',";
			} else if ($c === 0) {
				echo "_+'$upcount';";
			} else {
				echo "_+'$upcount',";
			}

		}

	}

?>