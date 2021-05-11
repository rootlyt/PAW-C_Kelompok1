<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/mvc-example/assets/css/style.css">
    <link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.min.css">
    <script src="/mvc-example/assets/js/bootstrap.min.js"></script>
</head>

<style>
        table{
            border: 3px solid #4CAF50; text-align: left;
        }

        th{
        padding: 8px;background-color: #4CAF50;color: white;
        }

        td{
        color: white;
        }

</style>

<body>
<p></p>
<div>
    <img src="/mvc-example/image/sobat.png">
    <title>Selamat Datang Di S.O.B.A.T</title>
    <h1>S.O.B.A.T ONLINE SERVICE</h1>
    <h4>Sistem Administrasi Online Data S.O.B.A.T</h4>
    <p></p>
		<p><br>Status Keranjang <?php echo($_SESSION["username"]); ?> </p>

                    <table class="center">
						<tr><th>Keranjang</th><th>Berat</th></tr>
						<?php 

							foreach ($rs as $sampah => $list)
							{
								// echo '<tr><td><a href="?act=tampil-data&i='.$list['namakeranj'].'">'.$list['namakeranj'].'<td>'.$list['beratkeranjang'].'</a></td></tr>';
						
                                echo '<tr><td>'.$list['namakeranj'].'<td>'.$list['beratkeranjang'].'</td></tr>';
							}

						?>
					</table><br>
					
    <a id="exitmenu" href="/mvc-example/index.php" class="button button1">Kembali</a>
