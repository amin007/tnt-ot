<h1><span class="bg-secondary text-white rounded-pill">&nbsp;</span></h1>
<!-- div class="container" -->
<div class="row">
<div class="col">
	<h1 style="text-align:center;background-color:white;"><?php echo $this->Tajuk_Muka_Surat ?><img
		src="http://via.placeholder.com/93x101" alt="logo"
		width="93" height="101"></h1>
	<br>
	<div class="row">
		<div class="col-sm-2"><?php include 'i-menu-kiri.php'; ?></div>
		<div class="col-sm-10" style="background-color:white;text-align:justify;">
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
//echo '<pre>senarai=><br>'; print_r($this->senarai); echo '</pre>' . "\r\r";

//ulangJadual($this->senarai);
foreach($this->senarai as $jadual => $row):
	paparJadual(null,$this->senarai, $jadual, $row);
endforeach;
#
?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="col-sm-7" -->
	</div><!-- / class="row" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- /div><!-- / class="container" -->
<?php
# koleksi fungsi untuk paparkan data dari $this->senarai
#-------------------------------------------------------------------------------------------------
	function ulangData($senarai)
	{
		foreach ($senarai as $myTable => $row)
		{
			if ( count($row)==0 ) echo '';
			else
			{
				buatSql($senarai,$myTable,$row);
			} // if ( count($row)==0 )
		}
		#
	}
#-------------------------------------------------------------------------------------------------
	function buatSql($senarai,$myTable,$row)
	{
		for ($kira=0; $kira < count($row); $kira++)
		{	foreach ( $row[$kira] as $key=>$data )
			{## papar data $row ----------------------------------------------------------
				//$k0 = "$key|$tx";
				list($tx,$semua) = setPencam($i++,$kira,$meta,$myTable,$key,$data);
				echo "$key | $tx <br>";
			}## --------------------------------------------------------------------------
		}
		#
	}
#-------------------------------------------------------------------------------------------------
	function ulangJadual($senarai)
	{
		echo "\n" . '<!-- h1> Ini Template Bootstrap </h1 -->';
		echo "\n" . '<div class="tabbable tabs-top bg-light text-dark">';
		##
		foreach ($senarai as $jadual => $baris)
		{
			if ( count($baris)==0 ) echo '';
			else
			{//$mula = ($jadual=='***') ? ' class="active"' : '';
				echo "\n" . '<li><a href="#'.$jadual.'" data-toggle="tab">'
				. "\n" . '<span class="badge badge-success">'.$jadual.'</span>'
				. "\n" . '<span class="badge">'.count($baris).'</span>'
				. "\n" . '</a></li>';
			}
		}
		##
		echo "\n" . '</ul>';
		echo "\n" . '<div class="tab-content">';
		##
		foreach ($senarai as $myTable => $row)
		{
			if ( count($row)==0 ) echo '';
			else
			{
				$mula2 = ($jadual=='***') ? ' active' : '';
				$tajukjadual = '';
				echo "\n" . '<div class="tab-pane" id="' . $myTable
				. "\n" . '<!-- Jadual ' . $myTable
				. ' ########################################### -->';
				paparJadual($senarai,$myTable,$row0);
				echo "\n" . '<!-- Jadual ' . $myTable
				. ' ########################################### -->'
				. "\n" . '</div>';
			} // if ( count($row)==0 )
		}
		#
		echo "\n" . '</div><!-- class="tab-content" -->';
		echo "\n" . '</div><!-- /tabbable -->';
	}
#-------------------------------------------------------------------------------------------------
	function paparJadual($meta,$senarai,$myTable,$row)
	{
		# set pembolehubah utama
		$method = $cariID = $_jadual = $carian = $jadual = null;
		$i = 0;
		# panggil class
		$html = new Aplikasi\Kitab\BrgBaru01;
		$aksi = URL . $method . '/ubahSimpan/' . $carian;
		$class1 = 'col-sm-7'; # untuk tajuk dan hantar
		$class2 = 'col-sm-6'; # untuk $data
		$html->medanCarian(
			array($method, $myTable, $senarai, $cariID, $_jadual)
		);
		# mula papar html5
		echo  "\n" . '<form method="POST" action="' . $aksi
		. '" class="bg-light text-dark">';
		for ($kira=0; $kira < count($row); $kira++)
		{	foreach ( $row[$kira] as $key=>$data )
			{## papar data $row ----------------------------------------------------------
				//$k0 = "$key|$tx";
				list($tx,$semua) = setPencam($i++,$kira,$meta,$myTable,$key,$data);
				paparMedan($key,$tx,$class2);
				$paparData = $html->ubahInput2($key,$data,$tx,$semua);
				paparInputData($paparData,$class2);
			}## --------------------------------------------------------------------------
		}$html->medanHantar($_jadual, $class1);
		echo "\n" . '</form><!-- / class="form-horizontal" -->';
		//ulangJadualAsas($meta);
	}
#-------------------------------------------------------------------------------------------------
	function setPencam($i,$kira,$meta,$myTable,$key,$data)
	{
		$jenis = $tx = null;
		//$tx = $meta['jadual'][$i]['type'];//$tx = 'VAR_STRING';
		$name = 'name="' . $myTable . '[' .$key . ']"';
		$semua = array($jenis,$myTable,$kira,$key,$data,$name);

		return array($tx,$semua);
	}
#-------------------------------------------------------------------------------------------------
	function paparMedan($key,$tx,$class2)
	{
		$k0 = $key;
		//$k0 = "$key|$tx";
		echo  "\n" . '<div class="form-group row">' . "\n\t"
		. '<label for="inputTajuk" class="col-sm-2 control-label text-right">'
		. $k0 . '</label>' . "\n\t" . '<div class="'.$class2.'">';
		#
	}
#-------------------------------------------------------------------------------------------------
	function paparInputData($paparData,$class2)
	{
		echo $paparData . "\n\t"
		. '</div><!-- / class="' . $class2 . '" -->' . "\n"
		. '</div><!-- / class="form-group" -->' . "\n";
		#
	}
#-------------------------------------------------------------------------------------------------
	function ulangJadualAsal($jadual,$baris)
	{
		#
		print <<<END
<!-- h1> Ini Template Bootstrap </h1 -->
<div class="tabbable tabs-top bg-light text-dark">
	<ul class="nav nav-tabs">
		<li><a href="#$jadual>" data-toggle="tab">
		<span class="badge badge-success">$jadual</span>
		<span class="badge">($baris)</span>
		</a></li>

	</ul>
	<div class="tab-content">
	<div class="tab-pan" id="$jadual">
<!-- Jadual $jadual ########################################### -->
<b>$jadual</b>
<!-- Jadual $jadual ########################################### -->
	</div>

	</div><!-- class="tab-content" -->
</div><!-- /tabbable -->

END;
		echo "\r<b>$jadual</b>";
	}
#-------------------------------------------------------------------------------------------------
?>