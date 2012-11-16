<?php
include_once ("./model/model.php");

class Control {
	public $model;
	public function __construct()
	{  
        $this->model = new model();
    } 
	
	public function invoke()
	{
		if (isset($_GET['hapus']))
		{
			
			$plan = $this->model->deletePlan($_GET['hapus']);
			
			include './view/hero2.php';
		}
		elseif (isset($_GET['edit']))
		{
			$plan = $this->model->editOne($_GET['edit']);
			include "./view/editform.php";
		}
		elseif (isset($_GET['no']))
		{
				$plan = $this->model->editPlan($_GET['no'],$_POST['Nama'],$_POST['Email'],$_POST['Telp'],$_POST['Tgl_Pernikahan'],$_POST['Tgl_Temu_WP'],$_POST['Tempat_Temu']);
				
				include './view/hero2.php';
		}
		elseif (isset($_POST['Nama']))
		{
			if ($_POST['Nama']!==""&&$_POST['Telp']!==""&&$_POST['Email']!==""&&$_POST['Tgl_Pernikahan']!==""&&$_POST['Tgl_Temu_WP']!==""&&$_POST['Tempat_Temu']!==""){
				$plan = $this->model->addPlan($_POST['Nama'],$_POST['Email'],$_POST['Telp'],$_POST['Tgl_Pernikahan'],$_POST['Tgl_Temu_WP'],$_POST['Tempat_Temu']);
				
				include './view/hero2.php';
			}
			else 
			{
				$kosong="data tidak boleh kosong ya :)";
				}
				$plan = $this->model->viewPlan();
				include './view/hero2.php';
		}
		else
		{
			$plan = $this->model->viewPlan();
			include './view/hero2.php';
			//echo "coba";
		}
}
}
