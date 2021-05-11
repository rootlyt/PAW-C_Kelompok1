<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Sampah</h3>
					<table class="table table-responsive">
						<tr><td>ID</td><td>Username</td><td>keranjang</td><td>hargakonvsampah</td><td>tabungansaldo</td><td>jumlahsampahgram</td></tr>
						<?php 

							foreach ($rs as $mahasiswa => $list)
							{
								echo '<tr><td><a href="?act=tampil-data&i='.$list['id'].'">'.$list['id'].'</a></td><td>'.$list['username'].'</td><td>'.$list['keranjang'].'</td><td>'.$list['hargakonvsampah'].'</td><td>'.$list['tabungansaldo'].'</td><td>'.$list['jumlsampahgram'].'</td></tr>';
							}

						?>
					</table>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
