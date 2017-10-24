<?php 

require_once 'identitas.php';

$a = new orang('lulu','bandung','XI','pelajar');
echo "nama : ".$a->get_nama()."<br>";
echo "tempat lahir : ".$a->get_tl()."<br>";
echo "kelas : ".$a->get_kls()."<br>";
echo "status : ".$a->get_status()."<br>";
?>