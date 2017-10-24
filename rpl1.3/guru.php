<?php

	class guru{
	
	public $nama;
	public $tempat_lahir;
	public $status;
	 
	 public function __construct($nama,$tempat_lahir,$status){
	 
		$this->nama = $nama;
		 $this->tempat_lahir = $tempat_lahir;
		 $this->status = $status;
	 }
	    public function get_nama()
   {
   	return $this->nama;
   }
		public function get_tl()
   {
   	return $this->tempat_lahir;
   }
		public function get_status()
   {
   	return $this->status;
   }
	
	}