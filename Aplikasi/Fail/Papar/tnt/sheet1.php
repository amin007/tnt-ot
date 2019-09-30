<html>
<head>
<style type="text/css">
/* ********************************************************************* */
table.excel {
	border-style:ridge;
	border-width:0;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:0;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td {
	/*border-top:1pt solid black;
	border-left:1pt solid black;
	border-right:1pt solid black;
	border-bottom:1pt solid black;*/
}
/* ********************************************************************* */
#hitam {
	background-color:#000000;
	/*border:10pt double black;*/
}
#hitamkiri {
	background-color:#000000;
	border-left:20px solid black;
	/*border-right:20px solid black;*/
}
#hitamkanan {
	background-color:#000000;
	/*border-left:20px solid black;*/
	border-right20px solid black;
}
#biru { background-color:#00ffff; }
#birukiri {
	border-left:5px solid black;
	/*border-right:5px solid black;*/
}
#birukanan {
	/*border-left:5px solid black;*/
	border-right:5px solid black;
}
/* ********************************************************************* */
#kotaAtas {
	border-top:1px solid black;
	/*border-right:1px solid black;*/
}
#kotaAtasKanan {
	border-top:1px solid black;
	border-right:1px solid black;
}
#kotaKiri {
	border-left:1px solid black;
	/*border-right:1px solid black;*/
}
#kotaKanan {
	/*border-left:1px solid black;*/
	border-right:1px solid black;
}
#kotaBawahKanan {
	border-right:1px solid black;
	border-bottom:1px solid black;
}
#kotaBawah {
	/*border-left:1px solid black;*/
	border-bottom:1px solid black;
}
#kotak {
	border-top:2pt double black;
	border-left:2pt double black;
	border-right:2pt double black;
	border-bottom:2pt double black;
}
#kotakSolid {
	border-top:1pt solid black;
	border-left:1pt solid black;
	border-right:1pt solid black;
	border-bottom:1pt solid black;
}
#kotakHide {
	font-size:20.0pt;color:white;font-weight:400;
	text-decoration:none;text-underline-style:none;text-line-through:none;
	font-family:Arial;border:none;
}
#kotakJumlah {
	border:double windowtext;
	/*border-style:double;*/
	font-size:15pt;font-weight:100;
	text-align: center;
}
#top {
    background-color: #ccc;
    padding: 20px
}
/* ********************************************************************* */
</style>
</head>
<body>
<br>
<table class="excel">
<tr height="20">
	<td style="width:15pt"></td>
	<td colspan="13" style="border-style:double;">
		<h3 align="center">PECAHAN PERBELANJAAN PERJALANAN DAN SARA HIDUP KAKITANGAN AWAM DI DALAM NEGERI</h3>
	</td>
</tr>
<tr>
	<td height="10" colspan="14"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan="2">Nama</td>
	<td colspan="5">: <?php echo $this->biodata['namaPegawai'] ?></td>
	<td></td>
	<td colspan="2">No. K/P</td>
	<td>:<?php echo $this->biodata['noKP'] ?></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan="2">Alamat Bertugas</td>
	<td colspan="5">: <?php echo $this->biodata['alamatBertugas'] ?></td>
	<td></td>
	<td colspan="2">No. Pembekal</td>
	<td>:<?php echo $this->biodata['noPembekal'] ?></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan="2">No Akaun</td>
	<td colspan="5">: <?php echo $this->biodata['noAkaun'] ?></td>
	<td></td>
	<td colspan="2">No.Gaji</td>
	<td>:<?php echo $this->biodata['noGaji'] ?></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan="2">Nama Bank /</td>
	<td colspan="5">: <?php echo $this->biodata['namaBank'] ?></td>
	<td></td>
	<td colspan="2">No. Telefon</td>
	<td>:<?php echo $this->biodata['noTelefon'] ?></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan="2">Alamat</td>
	<td colspan="5">&nbsp;<?php echo $this->biodata['alamatBank'] ?></td>
	<td></td>
	<td colspan="2"></td>
	<td>&nbsp;</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan="2">No. Bil/Invois</td>
	<td colspan="5">: <?php echo $this->claim['noInvois'] ?></td>
	<td></td>
	<td colspan="2">Email</td>
	<td>:<?php echo $this->biodata['email'] ?></td>
	<td></td>
</tr>
<!-- tanda sempadan ----------------------------------------------------------------------------- -->
<tr height="10">
	<td></td>
	<td colspan="13" style="border-bottom:5px solid black;"></td>
	<td></td>
</tr>
<tr height="10">
	<td id="birukanan"></td>
	<td colspan="13">&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>1.</td>
	<td>Elaun Makan</td><td id="kotakJumlah"><?php echo $this->claim['elaunMakan'] ?></td>
	<td colspan="2">Elaun Harian</td><td id="kotakJumlah"><?php echo $this->claim['elaunHarian'] ?></td>
	<td></td>
	<td></td>
	<td>:&nbsp;B&nbsp;0221101</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221101'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>2.</td>
	<td>Sewa Hotel</td><td id="kotakJumlah"><?php echo $this->claim['sewaHotel'] ?></td>
	<td colspan="2">Loging</td><td id="kotakJumlah"><?php echo $this->claim['loging'] ?></td>
	<td>Servis Caj</td><td id="kotakJumlah" style="width:40pt"><?php echo $this->claim['servisCaj'] ?></td>
	<td>:&nbsp;B&nbsp;0221102</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221102'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>3.</td>
	<!-- td>Bayaran Tambang Keretapi</td><td id="kotakJumlah"><?php echo $this->claim['tambangKeretapi'] ?></td -->
	<td>Tambang Keretapi</td><td id="kotakJumlah"><?php echo $this->claim['tambangKeretapi'] ?></td>
	<td colspan="2">LRT</td><td id="kotakJumlah"><?php echo $this->claim['tambangLRT'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td>:&nbsp;B&nbsp;0221103</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221103'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>4.</td>
	<td>Kilometer</td><td id="kotakJumlah"><?php echo $this->claim['jumKMRM'] ?></td>
	<td colspan="2">Tambang&nbsp;Bas</td><td id="kotakJumlah"><?php echo $this->claim['tambangBas'] ?></td>
	<td>Teksi/ Grabcar</td><td id="kotakJumlah"><?php echo $this->claim['tambangKeretaSewa'] ?></td>
	<td>:&nbsp;B&nbsp;0221104</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221104'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>5.</td>
	<!-- td>Bayaran Tambang Kapal/Bot</td><td id="kotakJumlah"><?php echo $this->claim['tambangKapalBot'] ?></td -->
	<td>Tambang Kapal/Bot</td><td id="kotakJumlah"><?php echo $this->claim['tambangKapalBot'] ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>:&nbsp;B&nbsp;0221105</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221105'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>6.</td>
	<!-- td>Bayaran Kapal Terbang</td><td id="kotakJumlah"><?php echo $this->claim['tambangKapalTerbang'] ?></td -->
	<td>Tambang Kapal Terbang</td><td id="kotakJumlah"><?php echo $this->claim['tambangKapalTerbang'] ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>:&nbsp;B&nbsp;0221106</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221106'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>7.</td>
	<td>Elaun Kerja Luar</td><td id="kotakJumlah"><?php echo $this->claim['elaunKerjaLuar'] ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>:&nbsp;B&nbsp;0221107</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221107'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>8.</td>
	<td>Bayaran Tol</td><td id="kotakJumlah"><?php echo $this->claim['bayaranTol'] ?></td>
	<td></td>
	<td></td>
	<td colspan="2">Bayaran Meletak Kereta</td><td id="kotakJumlah"><?php echo $this->claim['bayaranParkir'] ?></td>
	<td>:&nbsp;B&nbsp;0221199</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0221199'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>9.</td>
	<td>Bayaran Balik Telefon</td><td id="kotakJumlah"><?php echo $this->claim['bayaranBalikTel'] ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>:&nbsp;B&nbsp;0223102</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0223102'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>10.</td>
	<td>Elaun Tugas Memandu</td><td id="kotakJumlah"><?php echo $this->claim['elaunTugasMemandu'] ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>:&nbsp;B&nbsp;0115199</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['b0115199'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>*</td>
	<td colspan="6">SILA LEKATKAN DITUNTUTAN ORIGINAL</td>
	<td>&nbsp;</td>
	<td>JUMLAH</td>
	<td>= RM</td>
	<td id="kotakJumlah"><?php echo $this->claim['jumClaim'] ?></td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="10">
	<td id="birukanan"></td>
	<td colspan="13">&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="10">
	<td></td>
	<td colspan="13" style="border-top:5px solid black;">&nbsp;</td>
	<td></td>
</tr>
<!-- tanda sempadan ----------------------------------------------------------------------------- -->
<tr height="10">
	<td colspan="15" style="border-bottom:20px solid black;"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td colspan="3" style="font-size:30px;text-align:center;
	border-right:2pt double black;
	border-bottom:2pt double black;">
	<b><?php echo $this->claim['kodPejabat'] ?></b></td>
	<td></td>
	<td></td>
	<td></td>
	<td colspan="7" style="font-size:30px;text-align:right;">
	<?php echo $this->claim['kodModul'] ?></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td colspan="13" style="text-align:center;font-size:20;">Pergerakan Modul 1GFMAS</td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td></td>
	<td colspan="6">Jenis modul: (tandakan di kotak yang berkenaan)</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="10"><!-- jarak antara row -->
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td>Waran Peruntukan</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td colspan="2">Pesanan Kerajaan</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td colspan="2">Arahan Pembayaran</td>
	<td id="hitamkiri"></td>
</tr>
<tr height="10"><!-- jarak antara row -->
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td>Baucar Jurnal</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td colspan="2">Penyata Pemungut</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td>ePerolehan</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="10"><!-- jarak antara row -->
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td>Perubahan Gaji</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td colspan="2">Penyelarasan Rekod</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td>APCT</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="10"><!-- jarak antara row -->
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td></td>
	<td colspan="10">Sub Modul : Tuntutan Perjalanan <?php echo $this->claim['noInvois'] ?></td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="10"><!-- jarak antara row -->
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td colspan="2" id="kotakSolid">Tindakan</td>
	<td colspan="3" id="kotakSolid">Tandatangan Ringkas</td>
	<td colspan="3" id="kotakSolid">Tarikh</td>
	<td colspan="3" id="kotakSolid">No. Rujukan AP</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td colspan="2" id="kotakSolid">Sedia</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td colspan="2" id="kotakSolid">Peraku 1</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td colspan="2" id="kotakSolid">Peraku 2</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td colspan="2" id="kotakSolid">Batal</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td colspan="3" id="kotakSolid">&nbsp;</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20"><!-- jarak antara row -->
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="10">
	<td colspan="15" style="border-top:20px solid black;"></td>
</tr>
<tr height="10">
	<td colspan="15" style="text-align:center"><?php echo $this->ms[1] ?></td>
</tr>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<tr style="page-break-before:always;height:18.0pt">
	<td colspan="15"></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td colspan="13" style="border-style:double;">
		<h2 align="center">KENYATAAN TUNTUTAN ELAUN PERJALANAN
		DALAM NEGERI</h2>
	</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td colspan="15"></td>
</tr>
<tr height="30">
	<td></td>
	<td></td>
	<td></td>
	<td rowspan="2" align="right">BAGI</td>
	<td colspan="2" style="border-bottom:dashed;text-align:center;"><?php echo $this->claim['bulan'] ?></td>
	<td rowspan="2" align="center">/</td>
	<td colspan="2" style="border-bottom:dashed;text-align:center;"><?php echo $this->claim['tahun'] ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td colspan="2" style="text-align:center;">( BULAN )</td>
	<td colspan="2" style="text-align:center;">( TAHUN )</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td colspan="15">&nbsp;</td>
</tr>
<tr height="20">
	<td></td>
	<td colspan="13" id="kotaBawah" align="center">MAKLUMAT PEGAWAI</td>
	<td></td>
</tr>
<tr height="20"><!-- kotaAtasKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaAtas" colspan="4"></td>
	<td id="kotaAtasKanan">&nbsp;&nbsp;</td>
	<td id="kotaAtas" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">NAMA</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['namaPegawai'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">NO. KAD PENGENALAN</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td></td>
	<td colspan="5"><?php echo $this->biodata['noKP'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">GRED / KATEGORI /</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['gred'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">[ KUMPULAN (*) ] :</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['kumpulan'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">JAWATAN</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['jawatan'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaBawahKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaBawah" colspan="4"></td>
	<td id="kotaBawahKanan">&nbsp;&nbsp;</td>
	<td id="kotaBawah" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaAtasKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaAtas" colspan="4"></td>
	<td id="kotaAtasKanan">&nbsp;&nbsp;</td>
	<td id="kotaAtas" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">NO AKAUN BANK</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['noAkaun'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">NAMA BANK/ALAMAT</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['namaBank'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatBank'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaBawahKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaBawah" colspan="4"></td>
	<td id="kotaBawahKanan">&nbsp;&nbsp;</td>
	<td id="kotaBawah" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaAtasKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaAtas" colspan="4"></td>
	<td id="kotaAtasKanan">&nbsp;&nbsp;</td>
	<td id="kotaAtas" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="2">GAJI</td>
	<td>: RM</td>
	<td colspan="2" align="right"><?php echo $this->biodata['gajiPokok'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">PENDAPATAN (RM)</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="2">ELAUN-ELAUN</td>
	<td>: RM</td>
	<td colspan="2" align="right"><?php echo $this->biodata['elaun'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="2">JUMLAH</td>
	<td>: RM</td>
	<td colspan="2" align="right"><?php echo $this->biodata['jumGaji'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaBawahKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaBawah" colspan="4"></td>
	<td id="kotaBawahKanan">&nbsp;&nbsp;</td>
	<td id="kotaBawah" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaAtasKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaAtas" colspan="4"></td>
	<td id="kotaAtasKanan">&nbsp;&nbsp;</td>
	<td id="kotaAtas" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">KENDERAAN</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="2">JENIS / MODEL</td>
	<td colspan="3">:<?php echo $this->biodata['kenderaanModel'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="2">NO. PENDAFTARAN</td>
	<td colspan="3">:<?php echo $this->biodata['kenderaanNoDaftar'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="2">KUASA [C.C]</td>
	<td colspan="3">:<?php echo $this->biodata['kenderaanKuasa'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="2">KELAS TUNTUTAN</td>
	<td colspan="3">:<?php echo $this->biodata['kenderaanKelasTuntutan'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaBawahKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaBawah" colspan="4"></td>
	<td id="kotaBawahKanan">&nbsp;&nbsp;</td>
	<td id="kotaBawah" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaAtasKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaAtas" colspan="4"></td>
	<td id="kotaAtasKanan">&nbsp;&nbsp;</td>
	<td id="kotaAtas" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">ALAMAT PEJABAT</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatPejabat01'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatPejabat02'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatPejabat03'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatPejabat04'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaBawahKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaBawah" colspan="4"></td>
	<td id="kotaBawahKanan">&nbsp;&nbsp;</td>
	<td id="kotaBawah" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaAtasKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaAtas" colspan="4"></td>
	<td id="kotaAtasKanan">&nbsp;&nbsp;</td>
	<td id="kotaAtas" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2">ALAMAT RUMAH</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatRumah01'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatRumah02'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan="5"><?php echo $this->biodata['alamatRumah03'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan="2"></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td></td>
	<td colspan="5"><?php echo $this->biodata['alamatRumah04'] ?></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20"><!-- kotaBawahKanan -->
	<td id="kotaKanan"></td>
	<td id="kotaBawah" colspan="4"></td>
	<td id="kotaBawahKanan">&nbsp;&nbsp;</td>
	<td id="kotaBawah" colspan="8"></td>
	<td id="kotaKiri"></td>
</tr>
<tr height="10">
	<td colspan="15" style="text-align:center"><?php echo $this->ms[2] ?></td>
</tr>

</table>

<br><br><br><br>

</body>
</html>