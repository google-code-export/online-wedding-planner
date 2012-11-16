<?php

class Plan {
	public $Plan_ID;
	public $Nama;
	public $Telp;
	public $Email;
	public $Tgl_Pernikahan;
	public $Tgl_Temu_WP;
	public $Tempat_Temu;
	
	public function __construct($Plan_ID, $Nama, $Telp, $Email, $Tgl_Pernikahan, $Tgl_Temu_WP, $Tempat_Temu)  
    {  
        $this->Plan_ID = $Plan_ID;
	    $this->Nama = $Nama;
	    $this->Telp = $Telp;
		$this->Email = $Email;
		$this->Tgl_Pernikahan = $Tgl_Pernikahan;
		$this->Tgl_Temu_WP = $Tgl_Temu_WP;
		$this->Tempat_Temu = $Tempat_Temu;
    } 
}
?>