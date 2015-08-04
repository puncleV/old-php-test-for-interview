<?php
		$file = file_get_contents("2.php");
		$i = 0; $depth = 0;
		while( $file[$i] ){
			if( $file[$i] == '{' ){
				$depth ++;
			}elseif( $file[$i] == '}' ){
				if( $depth ){
					$depth --;
				}else{
					echo "incorrectly";
					break;
				}
			}
			$i++;
			echo $depth;
		}
		if( $depth ){
			echo "incorrectly";
		}else{
			echo "All rigth";
		}
		echo $file;
	?>
