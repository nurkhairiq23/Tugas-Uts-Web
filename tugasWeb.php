<html>
<head>
	<title>UTS Web</title>
<style type="text/css">
	 body{
	 	background: url("cloud.jpg");
	 }
	 
	 /*untuk semua tulisan*/ 
	 #tes{
	 	font-family: sans-serif;
	 }

	 /*untuk header isi*/
	 #tes2{
	 	font-family: sans-serif;
	 	color: white;
	 	font-size: 24px;
	 }

	 /*untuk tabel*/
	 .wrap{
	 	width: 970px;
	 	margin: auto;
	 }
	 .wrap .boxLogo{
	 	background: grey;
	 	height: 150px;
	 	width: 300px;
	 	border-style: ridge;
	 	float: left;
	 }

	 /*untuk mengatur gambar*/
	 img{
	 	display: block;
	 	margin: auto;
	 }
	 .wrap .boxJudul{
	 	background: grey;
	 	height: 135px;
	 	width: 650px;
	 	border-style: ridge;
	 	float: left;
        padding-top: 15px;
	 }
	 .tanggal{
	 	font-size: 18px;
	 	font-family: sans-serif;
	 	font-style: italic;
	 	color: white;
	 	text-align: right;
	 	padding-top: 18px;
	 	padding-right: 15px;
	 }
	 .wrap .boxMenu{
	 	background: grey;
	 	height: 600px;
	 	width: 280px;
	 	border-style: ridge;
	 	padding-left: 20px;
	 	float: left;
	 }
	 .link, /*inisialisasi link*/
	 .link:link{
	 	font-family: sans-serif;
	 	color: white;
	 }
	 .link:active{
	 	font-family: sans-serif;
	 	color: white;
	 }
	 .link:visited{
	 	font-family: sans-serif;
	 	color: white;
	 }
	 .boxKonten{
	 	background: grey;
	 	height: 600px;
	 	width: 650px;
	 	border-style: ridge;
	 	float: left;
	 }
	 .tulisan{
	 	font-family: sans-serif;
	 	color: white;
	 }
</style>
</head>
<body>
	<div class="wrap">
		<div class="boxLogo">
			<p></p>
			<img src="PicsArt_04-06-03.30.24.jpg" width="120" height="120">
	</div>

	<div class="boxJudul">
        <br>
        <center><h2><em>Selamat Datang di Web Nurkhairi Amini</em></h2></center>
		<div class="tanggal">
			<?php
			$tgl=date('l, d-m-Y');
			echo $tgl;
			?>
		</div>
	</div>

    <div class="boxMenu">
    <ul><br>
        <li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=home">Home</a></li>
        <hr>
        <li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=pendaftaran">Pendaftaran</a></li>
        <hr>
        <li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=beratideal">Mengukur Berat Badan Ideal</a></li>
        <hr>
        <li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=cekusia">Kategori Usia Anda</a></li>
        <hr>
        <li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=persegipanjang">Menghitung Persegi Panjang</a></li>
        <hr>
        <li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=segitiga">Menghitung Segitiga</a></li>
        <hr>
        <li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=daftarmahasiswa">Daftar Mahasiswa</a></li>
        <hr>
    </ul>
    </div>
    
    <div class="boxKonten">
    	<?php
    	if (@$_GET['op']=="home") {
    		?>
    		<center>
    			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    				<div class="tulisan">
    					<h2>PERKENALKAN</h2>
    					<table>
    						<tr><td>Nama</td><td>:</td><td>Nurkhairi Amini</td></tr>
    						<tr><td>NIM</td><td>:</td><td>11180910000049</td></tr>
    						<tr><td>Tempat Lahir</td><td>:</td><td>Curup, Bengkulu</td></tr>
    						<tr><td>Tanggal Lahir</td><td>:</td><td>23 Juni 2000</td></tr>
    					</table>
    				</div>
    			</form>
    		</center>
    		<?php
    	}
    	elseif (@$_GET['op']=="pendaftaran") {
    		?>
            <center>
    		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pendaftaran">
    			<div class="tulisan">
    				<h2><center>FORMULIR PENDAFTARAN</center></h2>
    				<font color="white">
    					<table>
    						<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
    						<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat" size="30"></td></tr>
    						<tr><td>Tanggal Lahir</td><td>:</td><td><select name="tanggal">
    							<option value="01">01</option>
    							<option value="02">02</option>
    							<option value="03">03</option>
    							<option value="04">04</option>
    							<option value="05">05</option>
    							<option value="06">06</option>
    							<option value="07">07</option>
    							<option value="08">08</option>
    							<option value="09">09</option>
    							<option value="10">10</option>
    							<option value="11">11</option>
    							<option value="12">12</option>
    							<option value="13">13</option>
    							<option value="14">14</option>
    							<option value="15">15</option>
    							<option value="16">16</option>
    							<option value="17">17</option>
    							<option value="18">18</option>
    							<option value="19">19</option>
    							<option value="20">20</option>
    							<option value="21">21</option>
    							<option value="22">22</option>
    							<option value="23">23</option>
    							<option value="24">24</option>
    							<option value="25">25</option>
    							<option value="26">26</option>
    							<option value="27">27</option>
    							<option value="28">28</option>
    							<option value="29">29</option>
    							<option value="30">30</option>
    							<option value="31">31</option>
    						</select>
    						<select name="bulan">
    							<option value="Januari">01</option>
    							<option value="Februari">02</option>
    							<option value="Maret">03</option>
    							<option value="April">04</option>
    							<option value="Mei">05</option>
    							<option value="Juni">06</option>
    							<option value="Juli">07</option>
    							<option value="Agustus">08</option>
    							<option value="September">09</option>
    							<option value="Oktober">10</option>
    							<option value="November">11</option>
    							<option value="Desember">12</option>
    						</select>
    						<select name="tahun">
    							<option value="1980">1980</option>
    							<option value="1981">1981</option>
    							<option value="1982">1982</option>
    							<option value="1983">1983</option>
    							<option value="1984">1984</option>
    							<option value="1985">1985</option>
    							<option value="1986">1986</option>
    							<option value="1987">1987</option>
    							<option value="1988">1988</option>
    							<option value="1989">1989</option>
    							<option value="1990">1990</option>
    							<option value="1991">1991</option>
    							<option value="1992">1992</option>
    							<option value="1993">1993</option>
    							<option value="1994">1994</option>
    							<option value="1995">1995</option>
    							<option value="1996">1996</option>
    							<option value="1997">1997</option>
    							<option value="1998">1998</option>
    							<option value="1999">1999</option>
    							<option value="2000">2000</option>
    							<option value="2001">2001</option>
    							<option value="2002">2002</option>
    							<option value="2003">2003</option>
    							<option value="2004">2004</option>
    							<option value="2005">2005</option>
    							<option value="2006">2006</option>
    							<option value="2007">2007</option>
    							<option value="2008">2008</option>
    							<option value="2009">2009</option>
    						</select></td></tr>
    						<tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="5" cols="32"></textarea></td></tr>
    						<tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex" value="Laki-laki">Laki-laki<input type="radio" name="sex" value="Perempuan">Perempuan</td></tr>
    						<tr><td>Asal Sekolah</td><td>:</td><td><input type="text" name="asal" size="30"></td></tr>
    						<tr><td>Nilai Ujian Nasional</td><td>:</td><td><input type="text" name="nilai" size="30"></td></tr>
    						<tr><tr></tr><tr></tr><tr></tr><td></td><td></td><td>
                                <input type="submit" name="submit" value="Submit">                
                                <input type="reset" name="reset" value="Reset"></td></tr>
    					</table>
    				</font>
    			</div>
    		</form>
            </center>
    		<?php
    	}
    	elseif (@$_GET['op']=="beratideal") {
    		?>
            <center>
    		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=beratideal">
    			<div>
    				<h2 style="color: white"><center>MENGUKUR BERAT BADAN IDEAL</center></h2>
    				
    					<table>
    						<tr><td>Masukkan Tinggi Badan Anda</td><td>:</td><td><input type="text" name="tinggi"></td><td>Cm</td></tr>
    						<tr><td>Masukkan Berat Badan Anda</td><td>:</td><td><input type="text" name="berat"></td><td>Kg</td></tr>
                            <tr><tr></tr><tr></tr><tr></tr><td></td><td></td><td>
                            <input type="submit" name="submit" value="Submit">                
                            <input type="reset" name="reset" value="Reset"></td></tr>
    					</table>
    				</font>
    			</div>
    		</form>
            </center>
    		<?php
    	}
    	elseif (@$_GET['op']=="cekusia") {
    		?>
            <center>
    		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=cekusia">
    			<div class="tulisan">
    				<h2><center>MENGHITUNG KATEGORI USIA</center></h2>
    				<font color="white">
    					<table>
    						<tr><td>Masukkan Usia Anda</td><td>:</td><td><input type="text" name="usia"></td><td>Tahun</td></tr>
    						<tr><tr></tr><tr></tr><tr></tr><td></td><td></td><td>
                                <input type="submit" name="submit" value="Submit">                
                                <input type="reset" name="reset" value="Reset"></td></tr>
    					</table>
    				</font> 				
    			</div>
    		</form>
            </center>
    		<?php
    	}
    	elseif (@$_GET['op']=="persegipanjang") 
        {
    		?>
            <center>
    		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=persegipanjang">
    			<div class="tulisan">
    				<h2><center>MENGHITUNG LUAS PERSEGI PANJANG</center></h2>
    				<font color="white">
    					<table>
    						<tr><td>Masukkan Panjang</td><td>:</td><td><input type="text" name="panjang"></td></tr>
    						<tr><td>Masukkan Lebar</td><td>:</td><td><input type="text" name="lebar"></td></tr>
    						<tr><tr></tr><tr></tr><tr></tr><td></td><td></td><td>
                                <input type="submit" name="submit" value="Submit">                
                                <input type="reset" name="reset" value="Reset"></td></tr>
    					</table>	
    				</font>
    			</div>
    		</form>
            </center>
    		<?php
    	}
    	elseif (@$_GET['op']=="segitiga") {
    		?>
            <center>
    		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=segitiga">
    			<div class="tulisan">
    				<h2><center>MENGHITUNG LUAS SEGITIGA</center></h2>
    				<font color="white">
    					<table>
    						<tr><td>Masukkan Alas Segitiga</td><td>:</td><td><input type="text" name="alas"></td></tr>
    						<tr><td>Masukkan Tinggi Segitiga</td><td>:</td><td><input type="text" name="tinggi"></td></tr>
    						<tr><tr></tr><tr></tr><tr></tr><td></td><td></td><td>
                                <input type="submit" name="submit" value="Submit">                
                                <input type="reset" name="reset" value="Reset"></td></tr>
    					</table>	
    				</font>
    			</div>
    		</form>
            </center>
    		<?php
    	}
    	elseif (@$_GET['op']=="daftarmahasiswa") {
    		?>

    		<?php
    			$servername = "localhost";
    			$username = "root";
    			$password = "";
    			$dbname = "universitas";
    			$connection = mysqli_connect($servername, $username, $password, $dbname);
    			if (!$connection) {
    				die("Connection Failed:".mysqli_connect_error());
    			}
    			$query = mysqli_query($connection,"SELECT*FROM mahasiswa");
    			?>

    			<form action="" method="post">
    				<div class="tulisan">
    					<h2><center>DAFTAR MAHASISWA</center></h2>
    					<font color="black">
    						<center>
    							<table border="1" cellpadding="0" cellspacing="0">
    								<tr>
    									<th>Nama</th>
    									<th>NIM</th>
    									<th>Tempat Lahir</th>
    									<th>Tanggal Lahir</th>
    									<th>Jurusan</th>
    									<th>IPK</th>
    								</tr>
    								<?php 
    									if (mysqli_num_rows($query)>0) {
    									?>
    									<?php
    										$no=1;
    										while ($data=mysqli_fetch_array($query)) {
    											?>
    											<tr>
    												<td><?php echo $data["nama"];?></td>
    												<td><?php echo $data["nim"];?></td>
    												<td><?php echo $data["tempat"];?></td>
    												<td><?php echo $data["tanggal"];?></td>
    												<td><?php echo $data["jurusan"];?></td>
    												<td><?php echo $data["ipk"];?></td>
    											</tr>
    											<?php $no++;
    										} ?>  										
    										<?php 
    									} ?>
    							</table>
    						</font>
    					</div>
    				</center>
    			</form>
    		<?php
    	}
    	if (@$_GET['show']=="pendaftaran") {
    		$namalengkap= $_POST['nama'];
    		$tempatlahir= $_POST['tempat'];
    		$tanggallahir= $_POST['tanggal'];
    		$bulanlahir= $_POST['bulan'];
    		$tahunlahir= $_POST['tahun'];
    		$alamat= $_POST['alamat'];
    		$jeniskelamin= $_POST['sex'];
    		$asalsekolah= $_POST['asal'];
    		$nilaiujian= $_POST['nilai'];


    		echo "<table id='tes'>";
    		echo "<center><h2 id='tes2'>Form Pendaftaran</h2></center>";
    		echo "<tr><td>Nama Lengkap</td><td>:</td><td>".$namalengkap."</td></tr>";
    		echo "<tr><td>Tempat Lahir</td><td>:</td><td>".$tempatlahir."</td></tr>";
    		echo "<tr><td>Tanggal Lahir</td><td>:</td><td>".$tanggallahir."-".$bulanlahir."-".$tahunlahir."</td></tr>";
    		echo "<tr><td>Alamat Lengkap</td><td>:</td><td>".$alamat."</td></tr>";
    		echo "<tr><td>Jenis Kelamin</td><td>:</td><td>".$jeniskelamin."</td></tr>";
    		echo "<tr><td>Asal Sekolah</td><td>:</td><td>".$asalsekolah."</td></tr>";
    		echo "<tr><td>Nilai Ujian</td><td>:</td><td>".$nilaiujian."</td></tr>";
    		echo "</table>";
    	}
    	elseif (@$_GET["show"]=="beratideal") {
    		$tinggi = $_POST['tinggi'];
    		$berat = $_POST['berat'];
    		$persen = ($tinggi-100)*0.1;
    		$ideal = ($tinggi-100)-$persen;
    		if ($berat<=$ideal+2 && $berat>=$ideal-2) {
    			echo "<center><h2 id='tes2'>Menghitung Berat Badan Ideal</h2></center>";
    			echo "<center><p id='tes'>Berat Badan Anda Ideal</center></p>";
    		}
    		else {
    			echo "<center><h2 id='tes2'>Menghitung Berat Badan Ideal</h2></center>";
    			echo "<p id='tes'>Berat Badan Anda Tidak Ideal</p>";
    		}
    	}
    	elseif (@$_GET['show']=="cekusia") {
    		$usia = $_POST['usia'];
    		if ($usia >= 0 && $usia <= 5.5) {
    			echo "<center><h2 id='tes2'>Kategori Usia</h2></center>";
    			echo "<p id='tes'>Status Usia Anda : Balita</p>";
    		}
    		elseif ($usia > 5.5 && $usia <= 16.5) {
    			echo "<center><h2 id='tes2'>Kategori Usia</h2></center>";
    			echo "<p id='tes'>Status Usia Anda : Anak-anak</p>";
    		}
    		elseif ($usia > 16.5 && $usia <= 50.5) {
    			echo "<center><h2 id='tes2'>Kategori Usia</h2></center>";
    			echo "<p id='tes'>Status Usia Anda : Dewasa</p>";
    		}
    		elseif ($usia > 50.5) {
    			echo "<center><h2 id='tes2'>Kategori Usia</h2></center>";
    			echo "<p id='tes'>Status Usia Anda : Tua</p>";
    		}
    	}
    	elseif (@$_GET['show']=="persegipanjang") {
    		function luas_persegipanjang($panjang,$lebar){
    			$hasil = $panjang*$lebar;
    			echo "<center><h2 id='tes2'>Menghitung Luas Persegi Panjang</h2></center>";
    			echo "<p id='tes'>Panjang Persegi Panjang Adalah <b>".$panjang."</b></p>";
    			echo "<p id='tes'>Lebar Persegi Panjang Adalah <b>".$lebar."</b></p>";
    			echo "<p id='tes'>Luas Persegi Panjang Adalah <b>".$hasil."</b></p>";
    		}
    		$panjang = $_POST['panjang'];
    		$lebar = $_POST['lebar'];
    		luas_persegipanjang($panjang,$lebar);
    	}
    	elseif (@$_GET['show']=="segitiga") {
    		function luas_segitiga($alas,$tinggi){
    			$hasil = ($alas/2)*$tinggi;
    			echo "<center><h2 id='tes2'>Menghitung Luas Segitiga</h2></center>";
    			echo "<p id='tes'>Alas Segitiga Adalah <b>".$alas."</b></p>";
    			echo "<p id='tes'>Tinggi Segitiga Adalah <b>".$tinggi."</b></p>";
    			echo "<p id='tes'>Luas Segitiga Adalah <b>".$hasil."</b></p>";
    		}
    		$alas = $_POST['alas'];
    		$tinggi = $_POST['tinggi'];
    		luas_segitiga($alas,$tinggi);
    	}
    	?>
    </div>
</body>
</html>