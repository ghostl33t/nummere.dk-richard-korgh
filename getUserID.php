<?php 
$idUsera = $_POST['USID'];
$url = file_get_contents('results.json');
$data = json_decode($url);
$kuronja = $data->NUMBERID;
$fp = fopen('JSON_FILES/results_final.json','w');
$nizZapisa = array('USERID'=>$idUsera,'NUMBERID'=>$kuronja);
fwrite($fp,json_encode($nizZapisa));
fclose($fp);
?>
