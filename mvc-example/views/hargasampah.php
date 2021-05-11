<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/mvc-example/assets/css/style.css">
    <link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.min.css">
    <script src="/mvc-example/assets/js/bootstrap.min.js"></script>
</head>

<style>
</style>

<body>
<p></p>
<div>
    <img src="/mvc-example/image/sobat.png">
    <title>Selamat Datang Di S.O.B.A.T</title>
    <h1>S.O.B.A.T ONLINE SERVICE</h1>
    <h4>Sistem Administrasi Online Data S.O.B.A.T</h4>
    <p></p>
    <p>Harga Sampah Saat Ini:<br>Botol Plastik : Rp 2.000,-/Kg</p>
		<p><br>Harga Konversi Sampah <?php echo($_SESSION["username"]); ?> </p>
					<?php
							foreach ($rs as $sampah => $list)
							{
                                // echo '<h4>'.$list['jumlsampahgram'].' gram</h4><br>';
								echo '<h4>'.$list['total_price'].' Rp</h4><br>';
                                // echo '<h4>'.$list['jumlsampahgram'].' gr<br>'.$list['jumlsampahgram'].' Rp</h4>';
							}
					?>
					
    <a id="exitmenu" href="/mvc-example/index.php" class="button button1">Kembali</a>
