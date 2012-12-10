<?php

class Testi {
	
	public $testi_id;
		public $nama;
		public $email;
		public $isi_testi;
		
		public function __construct($testi_id, $nama, $email, $isi_testi)  
		{  
        $this->testi_id = $testi_id;
	    $this->nama = $nama;
		$this->email = $email;
		$this->isi_testi = $isi_testi;
		} 
}
?>