 
<?php
function clearData($data, $type='i'){
	if($type == 'i'){
		return (int) $data;
	}
	else {
		return trim (strip_tags($data));
	}
	
}
$output = "";

if (isset($_POST) && !empty($_POST)){

	$number1 = clearData($_POST['number1']);
	$number2 = clearData($_POST['number2']);
	$operator = clearData($_POST['operation'],'s');
	switch ($operator) {
		case '+': $output .= $number1 + $number2;break;
		case '-': $output .= $number1 - $number2;break; 
		case '*': $output .= $number1 * $number2;break; 
		case '/':
		if($number2 == 0)
		$output = "Division by 0 is forbidden!";
	else
		$output .= $number1 / $number2;break;
		
		default: $output = "Unknown operator '$operator'";
			break;
	}
	
	echo 'Result : ' . $number1 . ' ' . $operator . ' ' . $number2 . ' = ' . $output;

}

 