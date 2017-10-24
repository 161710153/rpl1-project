<?php 

require_once 'motor.php';

$a = new motor('satriaFU','200.000.000');
echo "merek : ".$a->get_merek()."<br>";
echo "harga : ".$a->get_hrg()."<br>";
?>