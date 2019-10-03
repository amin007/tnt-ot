<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>TNT dan OT</title>
<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" type="text/css">
</head>
<body><h1>Contoh Table Yang Banyak Column</h1>


<table class="table"><?php
$printed_headers = false;# mula bina jadual
#-----------------------------------------------------------------
for($i=1;$i <= 30; $i++):
	# print the headers once:
	if ( !$printed_headers ) :
		echo "\n" . '<thead><tr>';
		for($j=1;$j <= 30; $j++):
			echo  "\n\t" . '<th>A' . $j . '</th>';
		endfor;
		echo "\n" . '</tr></thead>';
		$printed_headers = true;
	endif;
endfor;
#-----------------------------------------------------------------
echo  "\n" . '<tbody>';
#-----------------------------------------------------------------
for($i=1;$i <= 30; $i++):
	# print the data row
	echo  "\n" . '<tr>';
	for($j=1;$j <= 30; $j++):
		echo "\n\t" . '<td>' . $j . '</td>' . "";
	endfor;
	echo "\n" . '</tr>';
endfor;
#-----------------------------------------------------------------
echo  "\n" . '</tbody>';
#-----------------------------------------------------------------
?>
</table>

<!-- untuk javascript
############################################################################## -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>