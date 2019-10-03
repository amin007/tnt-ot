<?php
# isytihar data grabcar
$resit = array(
	'BOOKING CODE' => 'ABC-123456-987',
	'ISSUED ON' => date('D d F Y h:i A'), // Tue 17 Sep 2019 08:50 AM
	'ISSUED BY DRIVER' => 'PEMANDU GRAB 007',
	'ISSUED T0' => 'Amin Ledang',
	'TAG' => 'Personal',
	'REMARKS' => '-',
	'PICK UP LOCATION 1' => 'Jalan Kaya Raya 007',
	'PICK UP LOCATION 2' => 'Muar Johor Malaysia Tercinta',
	'DROP OFF LOCATION 1' => 'MCD Parit Raja Daa',
	'DROP OFF LOCATION 2' => 'Batu Pahat Johor Malaysia Tercinta',
	'Meter Fare' => '85',
	'TOTAL' => 'MYR 85.00',
	'Payment Type' => 'Bitcoin 7539',
); # dapatkan medan terlibat
define('URL','../../../../');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
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
	border-width:0;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td {
	border:1pt solid #a9a9a9;
}
/* ********************************************************************* */
</style>
</head>
<body>
<br>
<div align="center">
<table class="excel">
<tr><td colspan="2" style="width:480pt;background:#009D3C;color:#FBFCFE;text-align:center;">
	<img src="<?php echo URL ?>sumber/gambar/grabcar/iconGrab.png" height="90">
	<br>Thanks for riding with us, <?php echo $resit['ISSUED T0'] ?>!
	<br><br><br>
</td></tr>
</table>
</div><!-- div align="center" -->

<br>

<div align="center">
<table class="excel">
<tr>
<td colspan="2" style="width:260pt;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009D3C;">BOOKING DETAILS</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">BOOKING CODE</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $resit['BOOKING CODE'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">ISSUED BY DRIVER</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $resit['ISSUED BY DRIVER'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">TAG</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $resit['TAG'] ?></span>
	<br><br>
</td>
<td style="width:220pt;border-left:2pt solid white;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009D3C;">&nbsp;</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">ISSUED ON</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $resit['ISSUED ON'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">ISSUED TO</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $resit['ISSUED T0'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">REMARKS</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $resit['REMARKS'] ?></span>
	<br><br>
</td>
</tr>
<tr>
<td style="width:200pt;">
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">
	<i class="fas fa-map-marker-alt" style="color:009D3C"></i>
	PICK UP LOCATION</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resit['PICK UP LOCATION 1'] ?>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resit['PICK UP LOCATION 2'] ?>
	<br><br>
</td>
<td style="width:60pt;border-left:2pt solid white;">
	<i class="far fa-arrow-alt-circle-right fa-4x" style="color:009D3C"></i>
</td>
<td style="width:220pt;border-left:2pt solid white;">
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">
	<i class="fas fa-map-marker-alt" style="color:red"></i>
	DROP OFF LOCATION</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resit['DROP OFF LOCATION 1'] ?>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resit['DROP OFF LOCATION 2'] ?>
	<br><br>
</td>
</tr>
</table>
</div><!-- div align="center" -->

<br>

<div align="center">
<table class="excel">
<tr>
<td style="width:260pt;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009D3C;">RECEIPT SUMMARY</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">DESCRIPTION</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;">Meter Fare</span>
	<br><br>
</td>
<td style="width:220pt;border-left:2pt solid white;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009D3C;">&nbsp;</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">AMOUNT</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $resit['Meter Fare'] ?></span>
	<br><br>
</td>
</tr>
<tr>
<td>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;font-weight:0;font-size:150%;">TOTAL</span>
	<br><br>
</td>
<td style="border-left:2pt solid white;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009D3C;font-weight:0;font-size:150%;">
	<?php echo $resit['TOTAL'] ?></span>
	<br><br>
</td>
</tr>
<tr>
<td>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;Payment Type
	<br><br>
</td>
<td style="border-left:2pt solid white;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $resit['Payment Type'] ?>
	<br><br>
</td>
</tr>
</table>
</div><!-- div align="center" -->

<br>

<div align="center">
<table class="excel">
<tr>
<td style="width:50pt;">
<img src="<?php echo URL ?>sumber/gambar/grabcar/people-call-center.jpg" height="90">
</td>
<td style="width:415pt;border-left:2pt solid #a9a9a9;">
&nbsp;&nbsp;We want to stay in tip-top shape for you. Share your comments with us via email as we work together to ensure<br>
&nbsp;&nbsp;efficient and safe travels.
<br><br>
&nbsp;&nbsp;www.grab.com | support.my@grab.com | 1300805858
<br>
</td>
</tr>
</table>
</div><!-- div align="center" -->

<br><br><br><br>

</body>
</html>