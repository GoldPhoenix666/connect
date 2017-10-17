<?php
include('C:\xampp\connection\connect.php');

$newquery = mysqli_query($conn, "SELECT * FROM `personactivities` LEFT JOIN `personname` ON `personactivities`.`personid` = `personname`.`personid` ORDER BY `activity` ASC ");

$qresult = array();



while ($row = mysqli_fetch_assoc($newquery)) {
    $array[] = $row;

$array[] = array('personname'=>$row['personname'], 'hours'=>$row['hours']);


$newactive  = array('eating' => array('people' => $array[0]['personname'], $array[1]['personname'],
									  'number' => 	$array[0]['hours'], $array[1]['hours']),


					'sleeping' => array('people' => $array[1]['personname'], $array[0]['personname'],
									  'number' => 	$array[13]['hours'], $array[2]['hours']),


					'walking' => array('people' => '', '',
									  'number' => 	5, 5),


					'sitting' => array('people' => '', '',
									  'number' => 	5, 5));

}






var_dump($newactive);
?>

