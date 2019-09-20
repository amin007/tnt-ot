<html>
<head>
<style type="text/css">
/* ********************************************************************* */
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	/*border-top:1pt solid black;
	border-left:1pt solid black;
	border-right:1pt solid black;
	border-bottom:1pt solid black;*/

	/*padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;*/
}
/* ********************************************************************* */
#tajukTengah{
	border-style:double;
	text-align:center;
	vertical-align:middle;
}
#kotakSolid {
	border:1px solid black;
	/**border-top:1pt solid black;
	border-left:1pt solid black;
	border-right:1pt solid black;
	border-bottom:1pt solid black;*/
}
#garisBawahPutihAsal
{
	font-size:12.0pt;font-weight:400;
	text-decoration:none;text-underline-style:none;text-line-through:none;
	font-family:Arial;border:none
}
#garisBawahPutih
{
	font-size:8pt;font-weight:200;color:white;
	text-decoration:none;text-underline-style:none;
	text-line-through:none;
	text-align:right;
	font-family:Arial;border:none
}
#garisBawaHitamAsal
{
	font-size:12.0pt;color:white;font-weight:400;
	text-decoration:none;text-underline-style:none;text-line-through:none;
	font-family:Arial;border-top:.5pt solid windowtext;border-right:none;
	border-bottom:none;border-left:none
}
#garisBawaHitam
{
	font-size:8pt;font-weight:200;color:white;
	text-align:right;
	text-decoration:none;text-underline-style:none;text-line-through:none;
	font-family:Arial;border:.5pt solid windowtext;
}
#garisJum
{
	font-size:8pt;font-weight:200;
	text-align:right;
	text-decoration:none;text-underline-style:none;text-line-through:none;
	font-family:Arial;border:.5pt solid windowtext;
}
#garis2Kiri
{
	font-size:12pt;font-weight:200;text-align:right;
	border-left:double black;/*color:white;*/
}
/* ********************************************************************* */
</style>
</head>
<body>

<table class="excel">
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">TUNTUTAN ELAUN PERJALANAN KENDERAAN</td>
	<td id="garis2Kiri">1</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Bagi :</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td width="90"></td>
	<td id="garis2Kiri">2</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>500 km pertama:</td>
	<td id="kotakSolid">&nbsp;</td>
	<td> km X</td>
	<td>0.70</td>
	<td>sen / km </td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">{km01}</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">3</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>500 km selepas 1000</td>
	<td id="kotakSolid">&nbsp;</td>
	<td> km X </td>
	<td>0.65</td>
	<td>sen / km </td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">{km02}</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">4</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>1001 km selepas 1700</td>
	<td id="kotakSolid">&nbsp;</td>
	<td> km X </td>
	<td>0.60</td>
	<td>sen / km </td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">{km03}</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">5</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>1701 Setiap km selepas</td>
	<td id="kotakSolid">&nbsp;</td>
	<td> km X </td>
	<td>0.55</td>
	<td>sen / km </td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">{km04}</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">6</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">7</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">8</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">9</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td> Jumlah KM :</td>
	<td id="garisBawaHitam">{km05}</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td> Jumlah </td>
	<td>: RM</td>
	<td id="garisBawaHitam">{rmkm05}</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">10</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">TUNTUTAN TAMBANG PENGANGKUTAN AWAM</td>
	<td id="garis2Kiri">11</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">12</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Teksi : Ehailing (Grabcar)</td>
	<td id="garisBawaHitam">0.00</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisBawaHitam">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">13</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Bas :</td>
	<td id="garisBawaHitam">0.00</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisBawaHitam">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">14</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Kereta Api :</td>
	<td id="garisBawaHitam">&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisBawaHitam">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">15</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Feri :</td>	<td id="garisBawaHitam">0.00</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisBawaHitam">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">16</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Lain-lain:</td>
	<td id="garisBawaHitam">0.00</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisBawaHitam">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">17</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garisBawaHitam">&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td> Jumlah </td>
	<td>: RM</td>
	<td id="garisBawaHitam">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">18</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">19</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">TUNTUTAN ELAUN MAKAN / ELAUN HARIAN</td>
	<td id="garis2Kiri">20</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">21</td>
</tr>
<tr height="20">
	<td align=right>3</td>
	<td colspan=2> hari X Elaun Makan sebanyak</td>
	<td>RM</td>
	<td id="garisJum">40.00 </td>
	<td>/ hari</td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">120.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">22</td>
</tr>
<tr height="20">
	<td align=right>4</td>
	<td colspan=2> hari X Elaun Harian sebanyak</td>
	<td>RM</td>
	<td id="garisJum">20.00 </td>
	<td>/ hari</td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">80.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">23</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td> Jumlah </td>
	<td>: RM</td>
	<td id="garisJum">200.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">24</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">25</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">TUNTUTAN BAYARAN SEWA HOTEL(BSH) / ELAUN LOJING</td>
	<td id="garis2Kiri">26</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">27</td>
</tr>
<tr height="20">
	<td align=right>2</td>
	<td>hari X BSH sebanyak</td>
	<td></td>
	<td>RM</td>
	<td id="garisJum">66.00 </td>
	<td>/ hari</td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">132.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">28</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>hari X BSH sebanyak</td>
	<td></td>
	<td>RM</td>
	<td id="garisJum"></td>
	<td>/ hari</td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">29</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">30</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=4>Bayaran Perkhidmatan Dan Cukai Perkhidmatan </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisJum">&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">31</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">32</td>
</tr>
<tr height="20">
	<td align="right">1</td>
	<td colspan=2> hari X Elaun Loging sebanyak</td>
	<td>RM</td>
	<td id="garisJum">40.00 </td>
	<td>/ hari</td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">40.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">33</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=2> hari X Elaun Loging* sebanyak</td>
	<td>RM</td>
	<td id="garisJum">35.00 </td>
	<td>/ hari</td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">34</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>* Untuk kursus</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td> Jumlah </td>
	<td>: RM</td>
	<td id="garisJum">172.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">35</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">36</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">TUNTUTAN PELBAGAI</td>
	<td id="garis2Kiri">37</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">38</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=2>Tol [ Resit: sila rujuk lampiran ] </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisJum">&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">39</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=3>Tempat Letak Kereta </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisJum">&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">40</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Dobi [ Resit ]</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisJum">&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">41</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Telefon</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisJum">&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">42</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Pos</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>: RM</td>
	<td id="garisJum">&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">43</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td> Jumlah </td>
	<td>: RM</td>
	<td id="garisJum">0.00 </td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">44</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">45</td>
</tr>
<tr height="20">
  <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>Jumlah Tuntutan</td>
	<td>: RM</td>
	<td id="garisJum">372.00</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">46</td>
</tr>
<tr>
	<td colspan="11" style="text-align:center;border-top:1px solid black;"><?php
	echo $this->ms[5] ?></td>
	<td>*</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20" style="page-break-before:always;">
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
	<td id="garis2Kiri">1</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td> PENGAKUAN</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">2</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td> Saya mengaku bahawa :</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">3</td>
</tr>
<tr height="20">
	<td align="right"> (a)</td>
	<td colspan=8>perjalanan pada tarikh-tarikh tersebut adalah benar dan
	telah dibuat atas urusan rasmi ;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">4</td>
</tr>
<tr height="20">
	<td align="right"> (b)</td>
	<td colspan=7>tuntutan ini dibuat mengikut kadar dan syarat seperti yang dinyatakan di bawah</td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">5</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=7>peraturan-peraturan bagi pegawai bertugas rasmi dan / atau pegawai berkursus</td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">6</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=2>yang berkuatkuasa semasa ;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">7</td>
</tr>
<tr height="20">
	<td align="right"> (c)</td>
	<td colspan=4>perbelanjaan yang bertanda (*) berjumlah sebanyak RM </td>
	<td colspan="2" id="kotakSolid">&nbsp;</td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">8</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=4>telah sebenarnya dilakukan dan dibayar oleh saya ;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">9</td>
</tr>
<tr height="20">
	<td align="right"> (d)</td>
	<td colspan=2>panggilan telefon sebanyak RM</td>
	<td colspan="2" id="kotakSolid">&nbsp;</td>
	<td colspan=4> dibuat atas urusan rasmi ; dan</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">10</td>
</tr>
<tr height="20">
	<td align="right"> (e)</td>
	<td colspan=9>butir-butir seperti yang dinyatakan di atas adalah benar
	dan saya bertanggungjawab terhadapnya.</td>
	<td id="garis2Kiri">11</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">12</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">13</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=2>Tarikh : 12 September 2019</td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">14</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td colspan=4 style="border-top:2.0pt dashed black">{namaPegawai}</td>
	<td></td>
	<td id="garis2Kiri">15</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">16</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">PENGESAHAN</td>
	<td id="garis2Kiri">17</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=6>Adalah disahkan bahawa perjalanan tersebut adalah atas urusan rasmi.</td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">18</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">19</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">20</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Tarikh :</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">21</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td colspan=4 style="border-top:2.0pt dashed black"> ( Tandatangan )</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">22</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">23</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">24</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">25</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td colspan=4 style="border-top:2.0pt dashed black">( Nama )</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">26</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">27</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">28</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">29</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td colspan=4 style="border-top:2.0pt dashed black">( Jawatan )</td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">30</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">31</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">32</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">PENDAHULUAN DIRI ( jika ada )</td>
	<td id="garis2Kiri">33</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">34</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td colspan=3>Pendahuluan Diri diberi</td>
	<td></td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum"></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">35</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td colspan=3>Tolak : Tuntutan sekarang</td>
	<td></td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum"></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">36</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td colspan=4>Baki dituntut / Baki dibayar balik</td>
	<td></td>
	<td>: RM</td>
	<td id="garisJum"></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">37</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">38</td>
</tr>
<tr height="20">
	<td> Catatan :</td>
	<td colspan=4>(*)-  jika pegawai memilih untuk tidak menerima SSB</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">39</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td colspan=3>(**) - potong mana yang tidak berkenaan.</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">40</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">41</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr height="20">
	<td colspan="10" id="tajukTengah">UNTUK KEGUNAAN PEJABAT</td>
	<td id="garis2Kiri">42</td>
</tr>
<tr height="20">
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
	<td id="garis2Kiri">43</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Disemak oleh :</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">44</td>
</tr>
<tr height="20">
	<td>&nbsp;</td>
	<td>Tarikh :</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>&nbsp;</td>
	<td id="garis2Kiri">45</td>
</tr>
<tr height="20">
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
	<td id="garis2Kiri">46</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
<tr>
	<td colspan="11" style="text-align:center;border-top:1px solid black;"><?php
	echo $this->ms[6] ?></td>
	<td>*</td>
</tr>
<!-- sempadan --------------------------------------------------------------------------------- -->
</table>

</body>
</html>