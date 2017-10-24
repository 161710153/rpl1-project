<?php 

require_once 'guru.php';

$a = new guru('wiwit.w','bandung','menikah');
echo "nama : ".$a->get_nama()."<br>";
echo "tempat lahir : ".$a->get_tl()."<br>";
echo "status : ".$a->get_status()."<br>";
?>