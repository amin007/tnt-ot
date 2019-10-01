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
<a class="btn btn-outline-secondary rounded-pill" href="https://www.codeply.com/go/r8hrYu0cE7">https://www.codeply.com/go/r8hrYu0cE7</a>
<br>
<!-- menu tengah atas -->
<!-- div class="container" -->
<div class="container">
	<button class="btn btn-primary btn-action" data-url="/echo?someval=jenisBorangA" id="btnAction1">Button API Call A</button>
	<button class="btn btn-primary btn-action" data-url="/echo?someval=jenisBorangB" id="btnAction2">Button API Call B</button>
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
</div><!-- / class="container" -->

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
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
$('.btn-action').click(function(){
	var url = $(this).data("url");
	$.ajax({
		type: "GET",
		url: url,
		dataType: 'json',
		success: function(res)
		{
			// get the ajax response data
			var data = res.body;
			// update modal content
			$('.modal-body').text(data.someval);
			// show modal
			$('#myModal').modal('show');    
		},
		error:function(request, status, error) {
			console.log("ajax call went wrong:" + request.responseText);
		}
	});
});
</script>
</body>
</html>