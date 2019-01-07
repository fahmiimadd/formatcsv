<?php

$file = fopen($_FILES["fileToUpload"]["tmp_name"],"r");
$csv = array();
$kolom0 = array();
$kolom1 = array();
$kolom2 = array();
$kolom3 = array();
$kolom4 = array();
$kolom5 = array();


while(! feof($file))
  {
    array_push($csv,fgetcsv($file)); 
  }
fclose($file);

foreach ($csv as $baris){
    if ( isset($baris[0])) {
        array_push($kolom0,$baris[0]);  
    } else {
        array_push($kolom0,"empty");  
    }
}

foreach ($csv as $baris){
    if ( isset($baris[1])) {
        array_push($kolom1,$baris[1]);  
    } else {
        array_push($kolom1,"empty");  
    }
}

foreach ($csv as $baris){
    if ( isset($baris[2])) {
        array_push($kolom2,$baris[2]);  
    } else {
        array_push($kolom2,"empty");  
    }
}

foreach ($csv as $baris){
    if ( isset($baris[3])) {
        array_push($kolom3,$baris[3]);  
    } else {
        array_push($kolom3,"empty");  
    }
}

foreach ($csv as $baris){
    if ( isset($baris[4])) {
        array_push($kolom4,$baris[4]);  
    } else {
        array_push($kolom4,"empty");  
    }
}

foreach ($csv as $baris){
    if ( isset($baris[5])) {
        array_push($kolom5,$baris[5]);  
    } else {
        array_push($kolom5,"empty");  
    }
}

?>

<html>
<body>
   <form action="download.php" method="post">
   <input type="hidden"  id=""  name="kolom0"  value="<?php print base64_encode(serialize($kolom0)) ?>">
   <input type="hidden"  id=""  name="kolom1"  value="<?php print base64_encode(serialize($kolom1)) ?>">
   <input type="hidden"  id=""  name="kolom2"  value="<?php print base64_encode(serialize($kolom2)) ?>">
   <input type="hidden"  id=""  name="kolom3"  value="<?php print base64_encode(serialize($kolom3)) ?>">
   <input type="hidden"  id=""  name="kolom4"  value="<?php print base64_encode(serialize($kolom4)) ?>">
   <input type="hidden"  id=""  name="kolom5"  value="<?php print base64_encode(serialize($kolom5)) ?>">
   <input type="submit" value="download new format" name="submit">
   </form>
</body>
</html>

