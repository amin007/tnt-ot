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
		<div class="col-sm-9" style="background-color:white;text-align:justify;">
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
//echo '<pre>senarai=><br>'; print_r($this->senarai); echo '</pre>' . "\r\r";
contohBorangBootstrap();
?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="col-sm-7" -->
	</div><!-- / class="row" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- /div><!-- / class="container" -->
<?php
# koleksi fungsi untuk paparkan data dari $this->senarai
##################################################################################################
	function contohBorangBootstrap()
	{
		# https://getbootstrap.com/docs/4.3/components/forms/
		print <<<END
<!-- h1> Ini Template Borang Bootstrap </h1 -->
<form method="POST" action="" class="bg-light text-dark">
<!-- sempadan form-group row -->
<div class="form-group row">
	<label for="inputTajuk" class="col-sm-2 control-label text-right">#label</label>
	<div class="col-sm-10">
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">*</span></div>
			<input type="text" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="col-sm-10" -->
</div><!-- / class="form-group" -->
<!-- sempadan form-group row -->
<div class="form-group row">
	<label class="col-sm-2 control-label text-right" for="exampleFormControlSelect1">Example select</label>
	<div class="col-sm-10">
		<select class="form-control" id="exampleFormControlSelect1">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	</div><!-- / class="col-sm-10" -->
</div>
<!-- sempadan form-group row -->
<div class="form-group row">
	<label class="col-sm-2 control-label text-right" for="exampleFormControlSelect2">Example multiple select</label>
	<div class="col-sm-10">
		<select multiple class="form-control" id="exampleFormControlSelect2">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	</div><!-- / class="col-sm-10" -->
</div>
<!-- sempadan form-group row -->
<fieldset class="form-group border p-2">
<div class="row">
	<legend class="col-form-label col-sm-2 pt-0">Radios</legend>
	<div class="col-sm-10">
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
			<label class="form-check-label" for="gridRadios1">
				First radio
			</label>
		</div><!-- / class="form-check" -->
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
				Second radio
			</label>
		</div><!-- / class="form-check" -->
		<div class="form-check disabled">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
			<label class="form-check-label" for="gridRadios3">
				Third disabled radio
			</label>
		</div><!-- / class="form-check" -->
	</div><!-- / class="col-sm-10" -->
</div>
</fieldset>
<!-- sempadan form-group row -->
<div class="form-group row">
	<label class="col-sm-2 control-label text-right" for="exampleFormControlTextarea1">Example textarea</label>
	<div class="col-sm-10">
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div><!-- / class="col-sm-10" -->
</div>
<!-- sempadan form-group row -->
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputCity">City</label>
		<input type="text" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-md-4">
		<label for="inputState">State</label>
		<select id="inputState" class="form-control">
		<option selected>Choose...</option>
		<option>...</option>
		</select>
	</div>
	<div class="form-group col-md-2">
		<label for="inputZip">Zip</label>
		<input type="text" class="form-control" id="inputZip">
	</div>
</div>
<!-- sempadan form-group row -->
</form>
<!-- sempadan form-group row -->
<form>
<!-- sempadan form-group row -->
<fieldset class="border p-2"><legend class="w-auto">Your Are Legend</legend>
<div class="form-group row">
	<label for="inputTajuk" class="col-sm-2 control-label text-right">#label</label>
	<div class="col-sm-8">
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">*</span></div>
			<input type="text" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="col-sm-10" -->
</div><!-- / class="form-group row" -->
</fieldset>
<!-- sempadan form-group row -->
</form>
<br>
END;
		# https://stackoverflow.com/questions/16852484/use-fieldset-legend-with-bootstrap/16852571
		#
	}
##################################################################################################
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
	function paparJadual($senarai,$myTable,$row)
	{
		# set pembolehubah utama
		$method = $cariID = $_jadual = $carian = null;
		$jenis = $jadual = null;
		#
		$html = new Aplikasi\Kitab\BrgBaru01;
		$aksi = URL . $method . '/ubahSimpan/' . $carian;
		$class1 = 'col-sm-7'; # untuk tajuk dan hantar
		$class2 = 'col-sm-6 '; # untuk $data
		$html->medanCarian(
			array($method, $myTable, $senarai, $cariID, $_jadual)
		);
		#
		echo  "\n" . '<form method="POST" action="'.$aksi
		. '" class="bg-light text-dark">';
		for ($kira=0; $kira < count($row); $kira++)
		{	foreach ( $row[$kira] as $key=>$data )
			{## papar data $row ----------------------------------------------------------
				echo  "\n" . '<div class="form-group row">' . "\n\t"
				. '<label for="inputTajuk" class="col-sm-2 control-label text-right">'
				. $key . '</label>' . "\n\t" . '<div class="'.$class2.'">';
				#
				$name = 'name="' . $myTable . '[' .$key . ']"';
				$semua = array($jenis,$myTable,$kira,$key,$data,$name);
				$paparData = $html->ubahInput2($key,$data, 'VAR_STRING', $semua);
				echo $paparData . "\n\t";
				#
				echo '</div><!-- / class="'.$class2.'" -->' . "\n"
				. '</div><!-- / class="form-group" -->' . "\n";
			}## --------------------------------------------------------------------------
		}$html->medanHantar($_jadual, $class1);
		echo "\n" . '</form><!-- / class="form-horizontal" -->';
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