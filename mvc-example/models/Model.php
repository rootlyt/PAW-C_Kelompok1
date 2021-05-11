<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



//sebelum query, load dulu library database-nya
include_once("libraries/Database.php");

class Model {
	function __construct()
	{
		$this->dbh = Database::getInstance();
	}


	function simpanData($nim)
	{
		$usnumtemp = $_SESSION["id"];
		$rs = $this->dbh->query("INSERT INTO keranjang (userID,namakeranj) VALUES ('".$usnumtemp."','".$nim."')");
	}

	function lihatData()
	{

		$rs = $this->dbh->query("SELECT * FROM users");
		return $rs;
	}

	function lihatDataDetail($id)
	{

		$rs = $this->dbh->query("SELECT * FROM users WHERE id=".$id);
		return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
	}

	function lihatSaldo()
	{
		$ustemp = $_SESSION["username"];
		$rs = $this->dbh->query("SELECT tabungansaldo FROM users WHERE username = '$ustemp'");
		return $rs;
	}

	function lihatHargaSampah()
	{
		$ustemp = $_SESSION["username"];
		// $rs = $this->dbh->query("SELECT jumlsampahgram FROM users WHERE username = '$ustemp'");
		$rs =$this->dbh->query("SELECT jumlsampahgram*2 AS total_price FROM users WHERE username = '$ustemp'");
		return $rs;
	}

	function lihatStatKeranjang()
	{
		$ustemp = $_SESSION["username"];
		// $rs = $this->dbh->query("SELECT jumlsampahgram FROM users WHERE username = '$ustemp'");
		// $usnumtemp = $this->dbh->query("SELECT id FROM users WHERE username = '$ustemp'");
		// return $id;
		// echo $_SESSION["id"];
		$usnumtemp = $_SESSION["id"];
		$rs =$this->dbh->query("SELECT namakeranj, beratkeranjang FROM keranjang WHERE userID='$usnumtemp'");
		return $rs;
	}

	function lihattransfer()
	{
		$ustemp = $_SESSION["username"];
		$rs = $this->dbh->query("SELECT tabungansaldo FROM users WHERE username = '$ustemp'");
		return $rs;
	}

	function saldoOut()
	{
		// $ustemp = $_SESSION["username"];
		$usnumtemp = $_SESSION["id"];
		$rs = $this->dbh->query("UPDATE `users` SET tabungansaldo=0 WHERE id='$usnumtemp'");
		return $rs;
	}

	function manageker()
	{
		$ustemp = $_SESSION["username"];
		// $rs = $this->dbh->query("SELECT jumlsampahgram FROM users WHERE username = '$ustemp'");
		// $usnumtemp = $this->dbh->query("SELECT id FROM users WHERE username = '$ustemp'");
		// return $id;
		// echo $_SESSION["id"];
		$usnumtemp = $_SESSION["id"];
		$rs =$this->dbh->query("SELECT namakeranj, beratkeranjang FROM keranjang WHERE userID='$usnumtemp'");
		return $rs;
	}


	function delkera($del)
	{	
		// $rs = $this->dbh->query("INSERT INTO keranjang (userID,namakeranj) VALUES ('".$usnumtemp."','".$nim."')");
		$rs = $this->dbh->query("DELETE FROM keranjang WHERE namakeranj='$del';");
	}
	
	
	
}

?>