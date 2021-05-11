<?php
include_once("models/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function index()
	{
		require_once('views/index.php');
	}

	function save()
	{
		$nim =  $_POST['nim'];
		//penyimpanan data ke model
		$this->model->simpanData($nim);
		$this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
	}

	function show_data()
	{
		if(!isset($_GET['i']))
		{
			//jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
			$rs = $this->model->lihatData();
			require_once('views/mhsList.php');
		}
		else
		{
			//ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
			$rs = $this->model->lihatDataDetail($_GET['i']);
			require_once('views/mhsDetail.php');
		}
	}

	function show_saldo()
	{
		$rs = $this->model->lihatSaldo();
		require_once('views/saldoList.php');
	}

	function show_hargasampah()
	{
		$rs = $this->model->lihatHargaSampah();
		require_once('views/hargasampah.php');
	}

	function show_statkeranj()
	{
		$rs = $this->model->lihatStatKeranjang();
		require_once('views/statkeranjang.php');
	}

	function show_trfsal()
	{
		$rs = $this->model->lihattransfer();
		require_once('views/trfsal.php');
	}

	function show_saldo_out()
	{
		$rs = $this->model->saldoOut();
		require_once('views/trfsalresult.php');
	}

	function show_manage_keranjang()
	{
		$rs = $this->model->manageker();
		require_once('views/keranjang.php');
	}

	function lets_delete_bebi()
	{
		$rs = $this->model->manageker();
		require_once('views/delker.php');
	}

	// function lets_delete_bebi()
	// {
	// 	$nim =  $_POST['del'];
	// 	$rs = $this->model->delkera();
	// 	require_once('views/delker.php');
	// }

	function lets_delete_bebigo()
	{
		$del =  $_POST['del'];
		//penyimpanan data ke model
		$this->model->delKera($del);
		$this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
	}
	

}


?>