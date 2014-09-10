<?php 
	class Euler
	{
		public $final;
		public function give($num, $lastnum)
		{
			$sum = $num + $lastnum;
			return $sum;
		}
		public function isEven($num)
		{
			if ($num % 2 == 0) {
				return $num;
			}
			else
			{
				return 0;
			}
		}
	}

	$obj = new Euler();
	$total = 0;
	$sum = 1;
	for ($i=1; $i <= 4000000; $i = $i + $sum) { 
		$sum = $obj->give($i, $sum);
		$total = $total + $obj->isEven($i);
		$total = $total + $obj->isEven($sum);

	}
	echo $total."<br>";
?>