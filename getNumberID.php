<?php 
$numid = $_POST['ID'];

$fp = fopen('JSON_FILES/results.json','w');
$nizZapisa = array('NUMBERID'=>$numid);
fwrite($fp,json_encode($nizZapisa));
fclose($fp);
?>