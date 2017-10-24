<?php 

require_once 'baju.php';

$a = new baju('garsel','XL','250.000');
echo "merek : ".$a->get_merek()."<br>";
echo "ukuran : ".$a->get_ukuran()."<br>";
echo "harga : ".$a->get_harga()."<br>";
?>