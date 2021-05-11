<?php 
	//bootstrap page
	//load class controller terlebih dahulu
	include_once("controllers/Controller.php");
	
	//buat objek dari class controller
	$controller = new Controller();

	//tentukan bagaimana halaman akan di-load
	if(!isset($_GET['act']))
	{
		//pemanggilan method yang akan di-run
		$controller->index();
	}
	else
	{
		switch($_GET['act'])
		{
			case 'home' : 
				$controller->index();
				break;
			
			case 'simpan' :
				$controller->save();
				break;

			case 'tampil-data' :
				$controller->show_data();
				break;

			case 'tampil-saldo' :
				$controller->show_saldo();
				break;
			
			case 'tampil-hargasampah' :
				$controller->show_hargasampah();
				break;

			case 'tampil-statkeranj' :
				$controller->show_statkeranj();
				break;
			
			case 'tampil-trfsal' :
				$controller->show_trfsal();
				break;

			case 'saldo-trf' :
				$controller->show_saldo_out();
				break;

			case 'manage-keranjang' :
				$controller->show_manage_keranjang();
				break;

			case 'deleteker' :
				$controller->lets_delete_bebi();
				break;
			
			case 'deletego' :
				$controller->lets_delete_bebigo();
				break;

			default : 
				$controller->index();
				break;
		}
	}

?>