<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Borang Terapung 000</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Nama saya Amin, berasal dari muar, johor.">
<meta name="keywords" content="idea kreatif inovatif projek link Dunia Imaginasi Saya">
<meta name="author" content="Amin007 Ledang">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
<style type="text/css">
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
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
</head>
<body>
<!-- menu_atas.php A431 -->
<h1>Sumber</h1>
<a class="btn btn-outline-secondary rounded-pill" href="https://stackoverflow.com/questions/34763090/bootstrap-4-with-remote-modal/48934494#48934494">
https://stackoverflow.com/questions/34763090/bootstrap-4-with-remote-modal/48934494#48934494</a><br>
<a class="btn btn-outline-secondary rounded-pill" href="https://www.codeply.com/go/gmuV1gheKz">https://www.codeply.com/go/gmuV1gheKz</a>
<br>
<!-- menu tengah atas -->

<!-- div class="container" -->
<div class="row">
<div class="col">
	<h1 style="text-align:center;background-color:white;">keterangan<img
		src="http://via.placeholder.com/93x101" alt="logo"
		width="93" height="101"></h1>
	<br>
	<div class="row">
		<div class="col-sm-9" style="background-color:white;text-align:justify;">
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ----------------------------------------------------------------------------------------- --><br>
<ul class="nav nav-pills mb-3">
<li><a href="#x1" class="btn btn-outline-secondary rounded-pill" data-remote="jenisBorangA.php" data-toggle="modal" data-target="#x">A</a></li>
<li><a href="#x1" class="btn btn-outline-secondary rounded-pill" data-remote="jenisBorangB.php" data-toggle="modal" data-target="#x">B</a></li>
<li><a href="#x1" class="btn btn-outline-secondary rounded-pill" data-remote="jenisBorangC.php" data-toggle="modal" data-target="#x">C</a></li>
</ul>
<!-- ----------------------------------------------------------------------------------------- --><br>
<div id="x" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-xl">
	<form method="POST" action="borangBaru.php" autocomplete="off">
		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Pilih Keterangan Perjalanan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-outline-primary" value="Simpan">
				</div>
		</div>
	</form>
	</div>
</div>
<!-- ----------------------------------------------------------------------------------------- --><br>


<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="col-sm-7" -->
	</div><!-- / class="row" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- /div><!-- / class="container" -->
<!-- menu tengah bawah -->
<!-- Footer
================================================== -->
<nav class="navbar navbar-light">
	<span class="label label-info bg-secondary text-white">&copy; Hak Cipta Terperihara 2019. Theme Asal Bootstrap Twitter </span>
	<span class="label label-info bg-secondary text-white">PHP version: 7.1.20</span>
</nav>
</footer -->

<!-- khas untuk jquery dan js2 lain
================================================== -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><script>
$('#x1').on('show.bs.modal', function (e) {
	var button = $(e.relatedTarget);
	var modal = $(this);

	// load content from HTML string
	modal.find('.modal-body').html("Nice modal body baby...");

	// or, load content from value of data-remote url
	//modal.find('.modal-body').load(button.data("remote"));
});
</script>
</body>
</html>