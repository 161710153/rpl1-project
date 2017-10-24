<?php

	class baju{
	
	public $merek;
	public $ukuran;
	public $harga;
	 
	 public function __construct($merek,$ukuran,$harga){
	 
		$this->merek = $merek;
		 $this->ukuran = $ukuran;
		 $this->harga = $harga;
	 }
	    public function get_merek()
   {
   	return $this->merek;
   }
		public function get_ukuran()
   {
   	return $this->ukuran;
   }
		public function get_harga()
   {
   	return $this->harga;
   }
	
	}