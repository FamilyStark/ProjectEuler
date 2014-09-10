<?php 
	
	class Eulerclass
	{
		public function checkThis($num)
		{
			if ($num % 3 == 0 || $num % 5 == 0) {
				return $num;
			}
		}
	}

	$count = 0;
	$obj = new Eulerclass();
	for ($i=0; $i < 1000; $i++) { 
		echo $obj->checkThis($i).'<br>';
		$count = $count + $obj->checkThis($i);
	}
	echo "<h1>".$count."</h1>";
?>