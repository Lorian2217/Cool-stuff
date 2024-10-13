<?php
// Будем менять эту переменную
// {{banner}}

// Наши баннеры (кол-во)
// count($randBan);

// Наши переменные (кол-во)
// substr_count($data, '{{banner}}');
include('banners.php');

$data = trim($_POST['text']);

$randBan = [];
$cntVar = substr_count($data, '{{banner}}');
// $counter = 0;

shuffle($banMass);
foreach($banMass as $k => $val){
    $randBan[$k] = $val->ban;
    // if($counter >= 4) break;
    // $counter++;
}

for($i = 0; $i < $cntVar; $i++){
    $data = preg_replace('/{{banner}}/', $randBan[$i], $data, 1);
}
print_r($data);
?>