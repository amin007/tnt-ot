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
table.excel tbody td { border:1px; }
/* ********************************************************************* */
#hitam {
	background-color:#000000;
	/*border:10pt double black;*/
}
#hitamkiri {
	border-left:30px solid black;
	/*border-right:5px solid black;*/
}
#hitamkanan {
	/*border-left:5px solid black;*/
	border-right:30px solid black;
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
	border:2pt double windowtext;
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
	<td height="10" colspan="15"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan=2>Nama</td>
	<td colspan=5>: <?php echo $this->biodata['namaPegawai'] ?></td>
	<td></td>
	<td>No. K/P</td>
	<td colspan=3>: <?php echo $this->biodata['noKP'] ?></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan=2>Alamat Bertugas</td>
	<td colspan=4>: <?php echo $this->biodata['alamatBertugas'] ?></td>
	<td></td>
	<td></td>
	<td>No. Pembekal</td>
	<td colspan=2>: {noPembekal}</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan=2>No Akaun</td>
	<td colspan=2>: {noAkaun}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>No.Gaji</td>
	<td colspan=2>: {noGaji}</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan=2>Nama Bank /</td>
	<td colspan=4>: {namaBank}</td>
	<td></td>
	<td></td>
	<td>No. Telefon</td>
	<td colspan=2>: {noTelefon}</td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td colspan=2>Alamat</td>
	<td>{alamat}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
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
	<td colspan=2>No. Bil/Invois</td>
	<td colspan=2>: {noInvois}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>Email</td>
	<td>:{email}</td>
	<td></td>
	<td></td>
</tr>
<tr height="10">
	<td></td>
	<td colspan="13" style="border-bottom:5px solid black;">&nbsp;</td>
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
	<td>Elaun Makan</td>
	<td id="kotakJumlah">120.00</td>
	<td>Elaun Harian</td>
	<td></td>
	<td id="kotakJumlah">80.00</td>
	<td></td>
	<td></td>
	<td>: B 0221101</td>
	<td>= RM</td>
	<td id="kotakJumlah">200.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>2.</td>
	<td>Sewa Hotel</td>
	<td id="kotakJumlah">132.00</td>
	<td>Loging</td>
	<td></td>
	<td id="kotakJumlah">40.00</td>
	<td>Servis Caj</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td>: B 0221102</td>
	<td>= RM</td>
	<td id="kotakJumlah">172.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>3.</td>
	<td>Bayaran Tambang Keretapi</td>
	<td id="kotakJumlah">*0.00*</td>
	<td>LRT</td>
	<td></td>
	<td id="kotakJumlah">&nbsp;</td>
	<td></td>
	<td>&nbsp;</td>
	<td>: B 0221103</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>4.</td>
	<td>Kilometer</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td>Tambang Bas</td>
	<td></td>
	<td id="kotakJumlah">0.00</td>
	<td>Teksi/ Grabcar</td>
	<td id="kotakJumlah">0.00</td>
	<td>: B 0221104</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>5.</td>
	<td>Bayaran Tambang Kapal/Bot</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>: B 0221105</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>6.</td>
	<td>Bayaran Kapal Terbang</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>: B 0221106</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>7.</td>
	<td>Elaun Kerja Luar</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>: B 0221107</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>8.</td>
	<td>Bayaran Tol</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td></td>
	<td></td>
	<td colspan=2>Bayaran Meletak Kereta</td>
	<td  id="kotakJumlah">&nbsp;</td>
	<td>: B 0221199</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>9.</td>
	<td>Bayaran Balik Telefon</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>: B 0223102</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
	<td>&nbsp;</td>
	<td id="birukiri"></td>
</tr>
<tr height="20">
	<td id="birukanan"></td>
	<td>&nbsp;</td>
	<td>10.</td>
	<td>Elaun Tugas Memandu</td>
	<td id="kotakJumlah">&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>: B 0115199</td>
	<td>= RM</td>
	<td id="kotakJumlah">0.00</td>
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
	<td id="kotakJumlah">372.00</td>
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
	<td colspan="15" style="border-top:20px solid black;"></td>
</tr>
<tr height="10">
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan">&nbsp;</td>
	<td colspan="3" style="font-size:30px;text-align:center;
	border-top:2pt double black;
	border-right:2pt double black;
	border-bottom:2pt double black;">
	<b>POM</b></td>
	<td style="border-style: none;"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td colspan="5" style="font-size:30px;text-align:right;
	border-top:0pt;
	border-right:2pt double black;
	border-bottom:0pt">
	BDP-AP01</td>
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
	<td colspan=6>Jenis modul: (tandakan di kotak yang berkenaan)</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20"><!-- jarak antara row -->
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
	<td colspan=2>Pesanan Kerajaan</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td colspan=2>Arahan Pembayaran</td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20"><!-- jarak antara row -->
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
	<td colspan=2>Penyata Pemungut</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td>ePerolehan</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20"><!-- jarak antara row -->
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
	<td colspan=2>Penyelarasan Rekod</td>
	<td></td>
	<td></td>
	<td width="40px" id="kotak">&nbsp;</td>
	<td>APCT</td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20"><!-- jarak antara row -->
	<td id="hitamkanan"></td>
	<td colspan="13"></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20">
	<td id="hitamkanan"></td>
	<td></td>
	<td></td>
	<td colspan=6>Sub Modul : Tuntutan Perjalanan {noInvois}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id="hitamkiri"></td>
</tr>
<tr height="20"><!-- jarak antara row -->
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
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<tr style='page-break-before:always;height:18.0pt'>
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
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td>BAGI</td>
	<td colspan=2>September</td>
	<td rowspan=2>/</td>
	<td colspan=2>2019</td>
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
	<td></td>
	<td colspan=2>( BULAN )</td>
	<td colspan=2>( TAHUN )</td>
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
	<td>NAMA</td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=4><?php echo $this->biodata['namaPegawai'] ?></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan=2>NO. KAD PENGENALAN</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td></td>
	<td colspan=2><?php echo $this->biodata['noKP'] ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td9>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan=2>GRED / KATEGORI /</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>{gred}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td>[ KUMPULAN (*) ] :</td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>{kumpulan}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td>JAWATAN</td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=3>{jawatan}</td>
	<td></td>
	<td></td>
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
	<td>NO AKAUN BANK<span style='mso-spacerun:yes'>  </span></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>{noAkaun}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan=2>NAMA BANK/ALAMAT</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=3>{namaBank}</td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
</tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>{alamat}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
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
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>GAJI</td>
	<td></td>
	<td>: RM</td>
	<td class=xl179>{gajiPokok}</td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td colspan=2>PENDAPATAN (RM)</td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>ELAUN-ELAUN</td>
	<td>: RM</td>
	<td class=xl179>{elaun}</td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>JUMLAH</td>
	<td></td>
	<td>: RM</td>
	<td>{jumGaji}</td>
	<td></td>
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
	<td>KENDERAAN</td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>JENIS / MODEL</td>
	<td>:</td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>NO. PENDAFTARAN</td>
	<td>:</td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>KUASA [C.C]</td>
	<td>:</td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>KELAS TUNTUTAN</td>
	<td>:</td>
	<td></td>
	<td></td>
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
	<td>ALAMAT PEJABAT</td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=4>{alamatPejabat01}</td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=3>{alamatPejabat02}</td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=4>{alamatPejabat03}</td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=4>{alamatPejabat04}</td>
	<td></td>
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
	<td>ALAMAT RUMAH</td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>{alamatRumah01}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=3>{alamatRumah02}</td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td colspan=2>{alamatRumah03}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="kotaKiri"></td>
 </tr>
<tr height="20">
	<td id="kotaKanan"></td>
	<td></td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td id="kotaKanan">&nbsp;&nbsp;</td>
	<td></td>
	<td colspan=3>{alamatRumah04}</td>
	<td></td>
	<td></td>
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

</table>

<br><br><br><br>

</body>
</html>