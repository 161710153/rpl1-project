<?php 

require_once 'gajah.php';

$a = new gajah('1','2','350');
echo "hidung : ".$a->get_hidung()."<br>";
echo "mata : ".$a->get_mata()."<br>";
echo "berat : ".$a->get_berat()."<br>";
?>