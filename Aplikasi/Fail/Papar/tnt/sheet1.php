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
#hitam { background-color:#000000; }
#biru { background-color:#00ffff; }
#top {
    background-color: #ccc;
    padding: 20px
}
/* ********************************************************************* */
</style>
</head>
<body>

<table class="excel">
<tr height="80">
	<td style="width:15pt"></td>
	<td colspan="13" style="border-style:double;">
		<h1 align="center">PECAHAN PERBELANJAAN PERJALANAN DAN SARA HIDUP KAKITANGAN AWAM DI DALAM NEGERI</h1>
	</td>
	<td style="width:15pt">*</td>
</tr>
<tr>
	<td height="33" colspan="15" style="height:24.95pt"></td>
</tr>
<tr height="66">
	<td></td>
	<td></td>
	<td colspan=2>Nama</td>
	<td colspan=5>: <?php echo $this->biodata['namaPegawai'] ?></td>
	<td></td>
	<td>No. K/P</td>
	<td colspan=3>: <?php echo $this->biodata['noKP'] ?></td>
	<td style='width:18pt'>*</td>
</tr>
<tr height=66 style='mso-height-source:userset;height:50.1pt'>
	<td height=66  style='height:50.1pt'></td>
	<td></td>
	<td colspan=2>Alamat Bertugas</td>
	<td colspan=4>: <?php echo $this->biodata['alamatBertugas'] ?></td>
	<td></td>
	<td></td>
	<td>No. Pembekal</td>
	<td colspan=2>: {noPembekal}</td>
	<td></td>
	<td>*</td>
</tr>
<tr height=66 style='mso-height-source:userset;height:50.1pt'>
	<td height=66  style='height:50.1pt'></td>
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
	<td>*</td>
</tr>
<tr height=66 style='mso-height-source:userset;height:50.1pt'>
	<td height=66  style='height:50.1pt'></td>
	<td></td>
	<td colspan=2>Nama Bank /</td>
	<td colspan=4>: {namaBank}</td>
	<td></td>
	<td></td>
	<td>No. Telefon</td>
	<td colspan=2>: {noTelefon}</td>
	<td></td>
	<td>*</td>
</tr>
<tr height=66 style='mso-height-source:userset;height:50.1pt'>
	<td height=66  style='height:50.1pt'></td>
	<td></td>
	<td colspan=2>Alamat</td>
	<td><span style='mso-spacerun:yes'>  </span>{alamat}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td class=xl151>*</td>
</tr>
<tr height=66 style='mso-height-source:userset;height:50.1pt'>
	<td height=66  style='height:50.1pt'></td>
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
	<td>*</td>
</tr>
<tr height="26" style="background-color: #00ffff;">
	<td colspan="15">*</td>
</tr>
<tr height=26 style='mso-height-source:userset;height:20.1pt'>
	<td id="biru"></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td>&nbsp;</td>
	<td class=xl86>1.</td>
	<td class=xl109>Elaun Makan</td>
	<td class=xl429 style="border:2.0pt double windowtext;">120.00</td>
	<td>Elaun Harian</td>
	<td></td>
	<td class=xl429 style="border:2.0pt double windowtext;">80.00</td>
	<td class=xl107></td>
	<td class=xl84></td>
	<td class=xl85>: B 0221101</td>
	<td class=xl86>= RM</td>
	<td class=xl430 style="border:2.0pt double windowtext;">200.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>2.</td>
	<td class=xl109>Sewa Hotel</td>
	<td class=xl429 style="border:2.0pt double windowtext;">132.00</td>
	<td class=xl106>Loging</td>
	<td class=xl115></td>
	<td class=xl429 style="border:2.0pt double windowtext;">40.00</td>
	<td class=xl109>Servis Caj</td>
	<td class=xl145>&nbsp;</td>
	<td class=xl85>: B 0221102</td>
	<td class=xl86>= RM</td>
	<td class=xl430 style="border:2.0pt double windowtext;">172.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>3.</td>
	<td>Bayaran Tambang Keretapi</td>
	<td style="border:2.0pt double windowtext;">*0.00*</td>
	<td class=xl106>LRT</td>
	<td class=xl90></td>
	<td class=xl139 style='border-top:none'>&nbsp;</td>
	<td class=xl115></td>
	<td class=xl331 style='border-top:none'>&nbsp;</td>
	<td class=xl85>: B 0221103</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>4.</td>
	<td class=xl109>Kilometer</td>
	<td class=xl140 style='border-top:none'>&nbsp;</td>
	<td class=xl106>Tambang Bas</td>
	<td class=xl115></td>
	<td class=xl331 style='border-top:none;font-size:20.0pt;color:white;
  font-weight:400;text-decoration:none;text-underline-style:none;text-line-through:
  none;font-family:Arial;border:2.0pt double windowtext'>0.00</td>
	<td>Teksi/ Grabcar</td>
	<td class=xl429 style='border-top:none'>&nbsp;</td>
	<td class=xl85>: B 0221104</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>5.</td>
	<td>Bayaran Tambang Kapal/Bot</td>
	<td class=xl141 style='border-top:none'>&nbsp;</td>
	<td class=xl80></td>
	<td class=xl91></td>
	<td class=xl92></td>
	<td class=xl92></td>
	<td class=xl93></td>
	<td class=xl85>: B 0221105</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>6.</td>
	<td>Bayaran Kapal Terbang</td>
	<td class=xl142 style='border-top:none'>&nbsp;</td>
	<td class=xl80></td>
	<td class=xl94></td>
	<td class=xl86></td>
	<td class=xl86></td>
	<td class=xl84></td>
	<td class=xl85>: B 0221106</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>7.</td>
	<td class=xl109>Elaun Kerja Luar</td>
	<td class=xl143 style='border-top:none'>&nbsp;</td>
	<td class=xl80></td>
	<td class=xl89></td>
	<td class=xl94></td>
	<td class=xl94></td>
	<td class=xl84></td>
	<td class=xl85>: B 0221107</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>8.</td>
	<td class=xl109>Bayaran Tol</td>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td class=xl109 colspan=2>Bayaran Meletak Kereta</td>
	<td class=xl145>&nbsp;</td>
	<td class=xl85>: B 0221199</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>9.</td>
	<td>Bayaran Balik Telefon</td>
	<td class=xl145 style='border-top:none'>&nbsp;</td>
	<td class=xl80></td>
	<td class=xl84></td>
	<td class=xl86></td>
	<td class=xl86></td>
	<td class=xl84></td>
	<td class=xl85>: B 0223102</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height=80>
	<td id="biru"></td>
	<td class=xl83>&nbsp;</td>
	<td class=xl86>10.</td>
	<td>Elaun Tugas Memandu</td>
	<td class=xl145 style='border-top:none'>&nbsp;</td>
	<td class=xl80></td>
	<td class=xl84></td>
	<td class=xl84></td>
	<td class=xl84></td>
	<td class=xl95></td>
	<td class=xl85>: B 0115199</td>
	<td class=xl86>= RM</td>
	<td class=xl118 style='font-size:20.0pt;color:white;font-weight:400;
  text-decoration:none;text-underline-style:none;text-line-through:none;
  font-family:Arial;border:none'>0.00</td>
	<td class=xl134>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr class=xl80 height=80>
	<td id="biru"></td>
	<td class=xl135>&nbsp;</td>
	<td class=xl136>*</td>
	<td class=xl156 colspan=3>SILA LEKATKAN DITUNTUTAN ORIGINAL</td>
	<td class=xl137>&nbsp;</td>
	<td class=xl137>&nbsp;</td>
	<td class=xl137>&nbsp;</td>
	<td class=xl137>&nbsp;</td>
	<td class=xl157>JUMLAH</td>
	<td class=xl146>= RM</td>
	<td class=xl431>372.00</td>
	<td class=xl138>&nbsp;</td>
	<td id="biru"></td>
</tr>
<tr height="26" style="background-color: #00ffff;">
	<td colspan="15">*</td>
</tr>
<tr class=xl80 height=26 style='mso-height-source:userset;height:20.1pt'>
	<td height=26 class=xl80 style='height:20.1pt'></td>
	<td class=xl112></td>
	<td class=xl112></td>
	<td class=xl96></td>
	<td class=xl80></td>
	<td class=xl80></td>
	<td class=xl80></td>
	<td class=xl80></td>
	<td class=xl80></td>
	<td class=xl80></td>
	<td class=xl92></td>
	<td class=xl86></td>
	<td class=xl119></td>
	<td class=xl80></td>
	<td class=xl97>*</td>
</tr>
<!-- tanda sempadan ----------------------------------------------------------------------------- -->
<tr height="30" style="background-color: #000000;">
	<td colspan="15">*</td>
</tr>
<tr height="40">
	<td id="hitam">&nbsp;</td>
	<td colspan=3 rowspan=2 style="border-right:2.0pt double black;
	border-bottom:2.0pt double black"><h2>POM</h2></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td colspan=3>BDP-AP01</td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td class=xl111></td>
	<td class=xl111></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td colspan=12 class=xl500>Pergerakan Modul 1GFMAS</td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td></td>
	<td class=xl120 colspan=3>Jenis modul: (tandakan di kotak yang berkenaan)</td>
	<td class=xl101></td>
	<td class=xl101></td>
	<td class=xl101></td>
	<td class=xl101></td>
	<td class=xl101></td>
	<td class=xl101></td>
	<td class=xl108></td>
	<td class=xl147></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
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
	<td></td>
	<td class=xl108></td>
	<td class=xl147></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101>Waran Peruntukan</td>
	<td></td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101 colspan=2>Pesanan Kerajaan</td>
	<td></td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101 colspan=2>Arahan Pembayaran</td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
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
	<td></td>
	<td></td>
	<td class=xl147></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101>Baucar Jurnal</td>
	<td></td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101 colspan=2>Penyata Pemungut</td>
	<td></td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101>ePerolehan</td>
	<td class=xl147></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
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
	<td></td>
	<td></td>
	<td class=xl147></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101>Perubahan Gaji</td>
	<td></td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101 colspan=2>Penyelarasan Rekod</td>
	<td></td>
	<td></td>
	<td class=xl103>&nbsp;</td>
	<td class=xl101>APCT</td>
	<td class=xl147></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
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
	<td></td>
	<td class=xl108></td>
	<td class=xl147></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td></td>
	<td class=xl154 colspan=6>Sub Modul : Tuntutan Perjalanan {noInvois}</td>
	<td class=xl148></td>
	<td class=xl148></td>
	<td class=xl148></td>
	<td></td>
	<td></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td></td>
	<td></td>
	<td class=xl104></td>
	<td class=xl104></td>
	<td class=xl104></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td class=xl79></td>
	<td class=xl104></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl123 colspan=2>Tindakan</td>
	<td class=xl123 colspan=2>Tandatangan Ringkas</td>
	<td class=xl125>&nbsp;</td>
	<td class=xl123 style='border-left:none'>Tarikh</td>
	<td class=xl124>&nbsp;</td>
	<td class=xl125>&nbsp;</td>
	<td class=xl123 colspan=2>No. Rujukan AP</td>
	<td class=xl114>&nbsp;</td>
	<td class=xl121></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl126 colspan=2 style='mso-ignore:colspan;border-right:.5pt solid black'>Sedia</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl129 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl116 style='border-top:none'>&nbsp;</td>
	<td class=xl117 style='border-top:none'>&nbsp;</td>
	<td></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl126 colspan=2 style='mso-ignore:colspan;border-right:.5pt solid black'>Peraku 1</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl129 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl116 style='border-top:none'>&nbsp;</td>
	<td class=xl117 style='border-top:none'>&nbsp;</td>
	<td></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl126 colspan=2 style='mso-ignore:colspan;border-right:.5pt solid black'>Peraku 2</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl129 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl116 style='border-top:none'>&nbsp;</td>
	<td class=xl117 style='border-top:none'>&nbsp;</td>
	<td></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl126 colspan=2 style='mso-ignore:colspan;border-right:.5pt solid black'>Batal</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl126 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl127 style='border-top:none'>&nbsp;</td>
	<td class=xl128 style='border-top:none'>&nbsp;</td>
	<td class=xl129 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl116 style='border-top:none'>&nbsp;</td>
	<td class=xl117 style='border-top:none'>&nbsp;</td>
	<td></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl122></td>
	<td class=xl122></td>
	<td class=xl102></td>
	<td class=xl102></td>
	<td class=xl102></td>
	<td class=xl102></td>
	<td class=xl108></td>
	<td class=xl108></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id="hitam">*</td>
</tr>
<tr height="40">
	<td id="hitam">*</td>
	<td></td>
	<td class=xl122></td>
	<td class=xl122></td>
	<td class=xl102></td>
	<td class=xl102></td>
	<td class=xl102></td>
	<td class=xl102></td>
	<td class=xl108></td>
	<td class=xl108></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id="hitam">*</td>
</tr>
<tr height="30" style="background-color: #000000;">
	<td colspan="15">*</td>
</tr>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<tr height=24 style='page-break-before:always;height:18.0pt'>
	<td height=24 style='height:18.0pt'></td>
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
	<td></td>
	<td></td>
	<td></td>
	<td>*</td>
</tr>
<tr height="66">
	<td>&nbsp;</td>
	<td colspan="13" style="border-style:double;">
		<h1 align="center">KENYATAAN TUNTUTAN ELAUN PERJALANAN
		DALAM NEGERI</h1>
	</td>
	<td>&nbsp;</td>
</tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
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
	<td></td>
	<td class=xl79></td>
	<td class=xl104></td>
	<td class=xl104>*</td>
</tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td></td>
	<td class=xl158>BAGI</td>
	<td colspan=2 class=xl497>September</td>
	<td rowspan=2 class=xl499>/</td>
	<td colspan=2 class=xl497>2019</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl160></td>
	<td class=xl161></td>
	<td class=xl104>*</td>
</tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td></td>
	<td class=xl159></td>
	<td colspan=2 class=xl498>( BULAN
  )</td>
	<td colspan=2 class=xl498>( TAHUN )</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl160></td>
	<td class=xl161></td>
	<td class=xl104>*</td>
</tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
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
	<td></td>
	<td class=xl79></td>
	<td class=xl104></td>
	<td class=xl104>*</td>
</tr>
<tr height="53">
	<td></td>
	<td colspan="13">MAKLUMAT PEGAWAI</td>
	<td>*</td>
</tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl162>&nbsp;</td>
	<td class=xl182 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl162>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl164 style='border-top:none'>&nbsp;</td>
	<td class=xl165>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183>NAMA</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=4><?php echo $this->biodata['namaPegawai'] ?></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183 colspan=2>NO. KAD PENGENALAN<span
  style='mso-spacerun:yes'> </span></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2><?php echo $this->biodata['noKP'] ?></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183 colspan=2>GRED / KATEGORI /</td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159>{gred}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183>[ KUMPULAN (*) ] :</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2>{kumpulan}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183>JAWATAN</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=3>{jawatan}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl162>&nbsp;</td>
	<td class=xl182>&nbsp;</td>
	<td class=xl170>&nbsp;</td>
	<td class=xl163>&nbsp;</td>
	<td class=xl171>&nbsp;</td>
	<td class=xl163>&nbsp;</td>
	<td class=xl163>&nbsp;</td>
	<td class=xl163>&nbsp;</td>
	<td class=xl163>&nbsp;</td>
	<td class=xl163>&nbsp;</td>
	<td class=xl163>&nbsp;</td>
	<td class=xl165>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183>NO AKAUN BANK<span style='mso-spacerun:yes'>  </span></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2>{noAkaun}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183 colspan=2>NAMA BANK/ALAMAT<span
  style='mso-spacerun:yes'>  </span></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=3>{namaBank}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159>{alamat}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl172>&nbsp;</td>
	<td class=xl184>&nbsp;</td>
	<td class=xl174>&nbsp;</td>
	<td class=xl173>&nbsp;</td>
	<td class=xl175>&nbsp;</td>
	<td class=xl173>&nbsp;</td>
	<td class=xl173>&nbsp;</td>
	<td class=xl173>&nbsp;</td>
	<td class=xl173>&nbsp;</td>
	<td class=xl173>&nbsp;</td>
	<td class=xl173>&nbsp;</td>
	<td class=xl176>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl162 style='border-top:none'>&nbsp;</td>
	<td class=xl182 style='border-top:none'>&nbsp;</td>
	<td class=xl170 style='border-top:none'>&nbsp;</td>
	<td class=xl177>&nbsp;</td>
	<td class=xl171 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl165 style='border-top:none'>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159>GAJI</td>
	<td class=xl159></td>
	<td class=xl159>: RM</td>
	<td class=xl179>{gajiPokok}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183 colspan=2>PENDAPATAN (RM)</td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2><span
  style='mso-spacerun:yes'> </span>ELAUN-ELAUN</td>
	<td class=xl159>: RM</td>
	<td class=xl179>{elaun}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159>JUMLAH</td>
	<td class=xl159></td>
	<td class=xl159>: RM</td>
	<td class=xl179>{jumGaji}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl172>&nbsp;</td>
	<td class=xl184>&nbsp;</td>
	<td class=xl174>&nbsp;</td>
	<td class=xl180>&nbsp;</td>
	<td class=xl175 style='border-left:none'>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl176>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl162 style='border-top:none'>&nbsp;</td>
	<td class=xl182 style='border-top:none'>&nbsp;</td>
	<td class=xl170 style='border-top:none'>&nbsp;</td>
	<td class=xl177 style='border-top:none'>&nbsp;</td>
	<td class=xl171 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'><span
  style='mso-spacerun:yes'> </span></td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl165 style='border-top:none'>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183>KENDERAAN</td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2><span
  style='mso-spacerun:yes'> </span>JENIS / MODEL</td>
	<td class=xl159>:</td>
	<td></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl159></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2><span
  style='mso-spacerun:yes'> </span>NO. PENDAFTARAN</td>
	<td class=xl159>:</td>
	<td></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2><span
  style='mso-spacerun:yes'> </span>KUASA [C.C]</td>
	<td class=xl159>:</td>
	<td></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2><span
  style='mso-spacerun:yes'> </span>KELAS TUNTUTAN</td>
	<td class=xl159>:</td>
	<td></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl172>&nbsp;</td>
	<td class=xl184>&nbsp;</td>
	<td class=xl174>&nbsp;</td>
	<td class=xl180>&nbsp;</td>
	<td class=xl175 style='border-left:none'>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl176>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl162 style='border-top:none'>&nbsp;</td>
	<td class=xl182 style='border-top:none'>&nbsp;</td>
	<td class=xl170 style='border-top:none'>&nbsp;</td>
	<td class=xl177 style='border-top:none'>&nbsp;</td>
	<td class=xl171 style='border-top:none;border-left:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl163 style='border-top:none'>&nbsp;</td>
	<td class=xl165 style='border-top:none'>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183>ALAMAT PEJABAT</td>
	<td class=xl159></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=4><span
  style='mso-spacerun:yes'> </span>{alamatPejabat01}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=3><span
  style='mso-spacerun:yes'> </span>{alamatPejabat02}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=4><span
  style='mso-spacerun:yes'> </span>{alamatPejabat03}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl178>&nbsp;</td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=4><span
  style='mso-spacerun:yes'> </span>{alamatPejabat04}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl172>&nbsp;</td>
	<td class=xl184>&nbsp;</td>
	<td class=xl174>&nbsp;</td>
	<td class=xl180>&nbsp;</td>
	<td class=xl175 style='border-left:none'>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl176>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183>ALAMAT RUMAH</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl168>&nbsp;</td>
	<td class=xl159 colspan=2>{alamatRumah01}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl167></td>
	<td class=xl159></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl159 colspan=3>{alamatRumah02}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl159 colspan=2>{alamatRumah03}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl183></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl166>&nbsp;</td>
	<td class=xl159 colspan=3>{alamatRumah04}</td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl159></td>
	<td class=xl169>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>
<tr height=53 style='mso-height-source:userset;height:39.95pt'>
	<td height=53 style='height:39.95pt'></td>
	<td></td>
	<td class=xl172>&nbsp;</td>
	<td class=xl185>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl172>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl181>&nbsp;</td>
	<td class=xl176>&nbsp;</td>
	<td class=xl104>*</td>
 </tr>

</table>

</body>
</html>