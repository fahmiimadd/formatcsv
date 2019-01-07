<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

$startline = 4;
$eliminatefromend = 5;
$bank = "BCA";


$str_kolom0 = $_POST["kolom0"];
$kolom0 = unserialize(base64_decode($str_kolom0));

$str_kolom1 = $_POST["kolom1"];
$kolom1 = unserialize(base64_decode($str_kolom1));

$str_kolom2 = $_POST["kolom1"];
$kolom2 = unserialize(base64_decode($str_kolom2));

$str_kolom3 = $_POST["kolom2"];
$kolom3 = unserialize(base64_decode($str_kolom3));

$str_kolom4 = $_POST["kolom3"];
$kolom4 = unserialize(base64_decode($str_kolom4));

$str_kolom5 = $_POST["kolom4"];
$kolom5 = unserialize(base64_decode($str_kolom5));


$output = fopen('php://output', 'w');
$fixfileline = array();
for ($i=5; $i < count($kolom1) - $eliminatefromend ; $i++) { 
   array_push($fixfileline,array($bank,$kolom0[$i],$kolom1[$i],$kolom4[$i]));
}

foreach ($fixfileline as $line)
  {
    fputcsv($output, $line);
  }

  ?>