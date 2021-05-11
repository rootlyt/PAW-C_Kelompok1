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

        input[type=text], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 50%;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        }

        div {
        border-radius: 5px;
        padding: 20px;
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
    <h4>Menu tambah/hapus keranjang</h4>
    <p><br>Keranjang <?php echo($_SESSION["username"]); ?> Saat Ini</p>
    <p></p>


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


                <div class="center"><h3>Isikan Nama Keranjang</h3>
					<form method="post" action="/mvc-example/?act=simpan">
					  <div class="form-group">
					    <!-- <label for="exampleInputNim">Nama Keranjang</label> -->
					    <input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="Contoh 'sobatkeren'">
					  </div>
					  <button type="submit" class="button button2">Submit</button>
                      <a id="exitmenu" href="?act=deleteker" class="button button3">Ke Menu Hapus Keranjang</a>
					</form>
                </div>
					
                    


    <a id="exitmenu" href="/mvc-example/index.php" class="button button1">Kembali</a>
