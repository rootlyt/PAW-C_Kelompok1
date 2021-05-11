<html>
<script src="confirm.js"type="text/javascript"></script>
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
		<p><br>Tarik Saldo <?php echo($_SESSION["username"]); ?> </p>

        <p>Transfer Sukses dan Saldo Berkurang, Silahkan Kembali</p>
    <a id="exitmenu" href="/mvc-example/index.php" class="button button1">Kembali</a>
