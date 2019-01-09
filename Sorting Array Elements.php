<?php
	class x {
		function z(){
			$arr = array("Bangladesh"=>"Dhaka","India"=>"Delhi","Pakistan"=>"Islamabad","Afganistan"=>"Khabul","Nepal"=>"Katmundo",);
			ksort($arr);
			print_r ($arr);
			}
	
		}
		$y = new x();
		$y->z();
?>