<?php
// // Initialize the session
// session_start();
 
// // Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/mvc-example/assets/css/style.css">
    <link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <script src="/mvc-example/assets/js/bootstrap.min.js"></script>
</head>

<body>
<p></p>
<div>
    <img src="image/sobat.png">
    <title>Selamat Datang Di S.O.B.A.T</title>
    <h1>S.O.B.A.T ONLINE SERVICE</h1>
    <h4>Sistem Administrasi Online Data S.O.B.A.T</h4>
    <p></p>
    <p>Selamat Datang <?php echo($_SESSION["username"]); ?> !</p>

<p></p>

        <button onclick="document.getElementById('id01').style.display='block'" class="button button4" style="width:auto;">Harga Pasar Terkini</button>
            <div id="id01" class="modal">
                <form class="modal-content animate" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Kertas</b></label>
                            <p> Kertas HVS  : Rp 1.000,-/Kg </p>
                            <p> Koran Bekas : Rp 850,-/Kg </p>
                            <p> Karton Bekas: Rp 1.200,-/Kg </p>

                        <label for="uname"><b>Plastik</b></label>
                            <p> Botol Plastik        : Rp 2.000,-/Kg </p>
                            <p> Gelas Mineral Plastik: Rp 3.000,-/Kg </p>
                            <p> Karah Botol Plastik  : Rp 200,-/Kg </p>

                        <label for="uname"><b>Kaleng</b></label>
                            <p> Kaleng Minuman: Rp 8.000,-/Kg </p>
                            <p> Kaleng Keras  : Rp 1.000,-/Kg </p>
                    </div>
            </form>
        </div>
        <script>
        // Get the modal
        var modal = document.getElementById('id01');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) 
        {if (event.target == modal) {modal.style.display = "none";}}
        </script>


        <button onclick="document.getElementById('id02').style.display='block'" class="button button4" style="width:auto;">Status SOBAT</button>
            <div id="id02" class="modal">
                <form class="modal-content animate" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <button class="button button" type="button" disabled>SOBAT 1 AKTIF</button>
                        <p></p>

                        <button class="button button" type="button" disabled>SOBAT 2 AKTIF</button>
                        <p></p>

                        <button class="button button" type="button" disabled>SOBAT 3 AKTIF</button>
                        <p></p>

                        <button class="button button3" type="button" disabled>SOBAT 4 TIDAK AKTIF</button>
                        <p></p>

                        <button class="button button5" type="button" disabled>SOBAT 5 GANGGUAN TEKNIS</button>
                        <p></p>                          
                    </div>
            </form>
        </div>
        <script>
        // Get the modal
        var modal = document.getElementById('id02');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) 
        {if (event.target == modal) {modal.style.display = "none";}}
        </script>


        <button onclick="document.getElementById('id03').style.display='block'" class="button button4" style="width:auto;">Hasil Timbangan</button>
            <div id="id03" class="modal">
                <form class="modal-content animate" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                                        <div class=\"container\">
                                                <label for=\"uname\"><b>JUMLAH KESELURUHAN PENDAPATAN</b></label>
                                                    <p> "+String(KONVERSI*3)+" Rupiah </p>
                        
                                                <label for=\"uname\"><b>PENDAPATAN SOBAT 1</b></label>
                                                   <p> "+String(KONVERSI)+" Rupiah </p>
                        
                                                <label for=\"uname\"><b>PENDAPATAN SOBAT 2</b></label>
                                                    <p> "+String(KONVERSI)+" Rupiah </p>\n"
                        
                                                <label for=\"uname\"><b>PENDAPATAN SOBAT 3</b></label>
                                                    <p> "+String(KONVERSI)+" Rupiah </p>
                                                    <label for="uname"><b>PENDAPATAN SOBAT 4</b></label>
                                                    <p> *NULL* Rupiah </p>
                        
                                                <label for="uname"><b>PENDAPATAN SOBAT 5</b></label>
                                                    <p> 0 Rupiah </p>
                                            </div>
                                    </form>
                                </div>
                                <script>
                                // Get the modal
                                var modal = document.getElementById('id04');
                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) 
                                {if (event.target == modal) {modal.style.display = "none";}}
                                </script>
                        
                                
                                
                        <p></p>

                                <a id="keranjang" href="?act=manage-keranjang" class="button button2">Tambah/Hapus Keranjang</a>
                                <a id="statkeranjang" href="?act=tampil-statkeranj" class="button button2">Status Keranjang</a>
                                <a id="hargasampah" href="?act=tampil-hargasampah" class="button button2">Harga Sampah Anda</a>
                                <a id="cektab" href="?act=tampil-saldo" class="button button2">Cek Tabungan</a>
                                <a id="trfsal" href="?act=tampil-trfsal" class="button button2">Tarik Saldo</a>


                        <p></p>
                        
                                <button onclick="document.getElementById('id99').style.display='block'" class="button button5" style="width:auto;">Hubungi Kami</button>
                                    <div id="id99" class="modal">
                                        <form class="modal-content animate" method="post">
                                            <div class="imgcontainer">
                                                <span onclick="document.getElementById('id99').style.display='none'" class="close" title="Close Modal">&times;</span>
                                            </div>
                        
                                            <div class="container">
                                                <label for="uname"><b>Alamat Surat Elektronik</b></label>
                                                <input type="text" placeholder="Masukkan Surel Anda" name="uname" required>
                                    
                                                <label for="psw"><b>Perihal</b></label>
                                                <input type="password" placeholder="Perihal Topik yang Dibahas" name="psw" required>
                        
                                                <label for="uname"><b>Isi Pesan</b></label>
                                                <input type="text" placeholder="..." name="uname" required> 
                        
                                                <input id="akses" type="submit" value="Kirim" class="button">
                                            </div>
                                        </form>
                                    </div>
                                <script>
                                // Get the modal
                                var modal = document.getElementById('id99');
                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) 
                                {if (event.target == modal) {modal.style.display = "none";}}
                                // When Login is Pressed, Said the login was succesful
                                akses.onclick = function() 
                                {alert('PESAN TELAH TERIKIRIM');}
                                </script>
                        
                            <a id="pickup" href="https://wa.me/+6282232147466/?text=Saya ingin pickup sampah"class="button button1"> Layanan Pickup Sampah</a>
                            <a id="exit" href="logout.php" class="button button3">Keluar</a>
                        
                            <h6><span id="days"></span>, <span id="time"></span> <span id="tz_name"></span></h6>
                            <script> 
                            var tz_offset = -(new Date().getTimezoneOffset() / 60);
                            switch(tz_offset)
                            {
                            case 7:
                            case 8:
                            case 9:
                                tz_table = ['WIB', 'WITA', 'WIT'];
                                tz_name = tz_table[tz_offset - 7];
                            break;
                            default:
                                tz_name = 'UTC'+(tz_offset >= 0 ? "+" : "")+tz_offset;
                            }
                            document.getElementById('tz_name').innerHTML = tz_name;
                            var id = setInterval(function()
                            {days_table = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];var date = new Date();var hours = date.getHours();var minutes = ('0'+date.getMinutes()).slice(-2);var seconds = ('0'+date.getSeconds()).slice(-2);document.getElementById('days').innerHTML = days_table[date.getDay()];document.getElementById('time').innerHTML = hours+':'+minutes+':'+seconds;}, 1000);
                            </script>
                        </div>
                        </body>
                        </html>