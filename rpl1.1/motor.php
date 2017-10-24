<?php


class motor{
	public $merek;
	public $harga;
	 
	 public function __construct($merek, $harga){
	 
		$this->merek = $merek;
		 $this->harga = $harga;
	 }
	    public function get_merek()
   {
   	return $this->merek;
   }
		public function get_hrg()
   {
   	return $this->harga;
   }
}