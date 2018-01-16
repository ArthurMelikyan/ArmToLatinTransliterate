<?php 
	if (isset($_POST['resval'])) {
	  $string = $_POST['resval'];
	}
		$str = mb_strtolower($string);
		$symbols = [
			'a'=>'ա',
			'b'=>'բ',
			'c'=>'ց',
			'd'=>'դ',
			'e'=>'ե,է',
			'f'=>'ֆ',
			'g'=>'գ',
			'h'=>'հ',
			'i'=>'ի',
			'j'=>'ջ,ճ',
			'k'=>'կ',
			'l'=>'լ',
			'm'=>'մ',
			'n'=>'ն',
			'o'=>'օ',
			'p'=>'պ,փ',
			'q'=>'ք',
			'r'=>'ռ,ր',
			's'=>'ս',
			't'=>'տ,թ',
			'u'=>'ու',
			'v'=>'վ',
			// 'w'=>'ո',
			'vo'=>'ո',
			'x'=>'ղ,խ',
			'y'=>'յ',
			'@'=>'ը',
			'z'=>'զ',
			'sh'=>'շ',
			'ts'=>'ծ',
			'dz'=>'ձ',
			'ch'=>'չ',
			'ev'=>'և,Եւ',
			'&'=>'և'
		];
		foreach ($symbols as $lat => $arm) {
			$arm = explode(',' , $arm);
			$str = str_replace($arm, $lat , $str);
		}

if (isset($str)) {
	$return = json_encode(["data" => $str]);
	echo $return;
}

?>