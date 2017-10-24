<?php

	class gajah{
	
	public $hidung;
	public $mata;
	public $berat;
	 
	 public function __construct($hidung,$mata,$berat){
	 
		$this->hidung = $hidung;
		 $this->mata = $mata;
		 $this->berat = $berat;
	 }
	    public function get_hidung()
   {
   	return $this->hidung;
   }
		public function get_mata()
   {
   	return $this->mata;
   }
		public function get_berat()
   {
   	return $this->berat;
   }
	
	}