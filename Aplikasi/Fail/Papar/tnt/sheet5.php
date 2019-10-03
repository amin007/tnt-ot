<html>
<head>
<?php
if (isset($this->css))
{
	foreach ($this->css as $css)
	{
		echo "\n"; // '<link rel="stylesheet" type="text/css" href="' . $css . '">';
		?><link rel="stylesheet" type="text/css" href="<?php echo $css ?>"><?php
	}
}
?>
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
	<br>Thanks for riding with us, <?php echo $this->resit['ISSUED T0'] ?>!
	<br><br><br>
</td></tr>
</table>
</div<!-- div align="center" -->

<br>

<div align="center">
<table class="excel">
<td colspan="2" style="width:260pt;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009D3C;">BOOKING DETAILS</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">BOOKING CODE</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $this->resit['BOOKING CODE'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">ISSUED BY DRIVER</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $this->resit['ISSUED BY DRIVER'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">TAG</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $this->resit['TAG'] ?></span>
	<br><br>
</td>
<td style="width:220pt;border-left:2pt solid white;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009D3C;">&nbsp;</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">ISSUED ON</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $this->resit['ISSUED ON'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">ISSUED TO</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $this->resit['ISSUED T0'] ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">REMARKS</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $this->resit['REMARKS'] ?></span>
	<br><br>
</td>
</tr>
<td style="width:200pt;">
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">
	<i class="fas fa-map-marker-alt" style="color:009D3C"></i>
	PICK UP LOCATION</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->resit['PICK UP LOCATION 1'] ?>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->resit['PICK UP LOCATION 2'] ?>
	<br><br>
</td>
<td style="width:60pt;border-left:2pt solid white;">
	<i class="far fa-arrow-alt-circle-right fa-4x" style="color:009D3C"></i>
</td>
<td style="width:220pt;border-left:2pt solid white;">
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a9a9a9;">
	<i class="fas fa-map-marker-alt" style="color:red"></i>
	DROP OFF LOCATION</span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->resit['DROP OFF LOCATION 1'] ?>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->resit['DROP OFF LOCATION 2'] ?>
	<br><br>
</td>
</tr>
</table>
</div<!-- div align="center" -->

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
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#000;"><?php echo $this->resit['Meter Fare'] ?></span>
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
	<?php echo $this->resit['TOTAL'] ?></span>
	<br><br>
</td>
</tr>
<tr>
<td>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;Payment Type
	<br><br>
</td>
<td style="border-left:2pt solid white;">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->resit['Payment Type'] ?>
	<br><br>
</td>
</tr>
</table>
</div<!-- div align="center" -->

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
</div<!-- div align="center" -->

<br><br><br><br>

</body>
</html>