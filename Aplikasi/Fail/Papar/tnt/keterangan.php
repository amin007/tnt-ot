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
//contohBorangBootstrap();//contohBorang02();//borangPerjalanan();
//modalBorang();
modalBorang02();
ulangJadualAsas($this->senarai);
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
				echo "\n" . '<div class="tab-pane" id="' . $myTable . '">'
				. "\n" . '<!-- Jadual ' . $myTable
				. ' ########################################### -->';
				//paparJadual($senarai,$myTable,$row0);
				papar_jadual($row, $myTable, $pilih=5);
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
	function ulangJadualAsas($senarai)
	{
		foreach ($senarai as $jadual => $row)
		{
			if ( count($row)==0 ) echo '';
			else
			{
				echo "\n" . '<!-- Jadual ' . $jadual
				. ' ########################################### -->';
				//paparJadual($senarai,$jadual,$row0);
				//papar_jadual($row, $jadual, $pilih=5);
				paparJadualAsas($row, $jadual, $pilih=5);
				echo "\n" . '<!-- Jadual ' . $jadual
				. ' ########################################### -->'
				. "\n";
			}# if ( count($row)==0 )
		}
		#
	}
#-------------------------------------------------------------------------------------------------
	function paparJadualAsas($row, $jadual, $pilih)
	{
		echo  "\n" . '<table class="table table-bordered table-hover table-sm">';
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < count($row); $kira++)
		{	# print the headers once:
			if ( !$printed_headers ) :
				echo  "\n" . '<thead><tr>';
				foreach ( array_keys($row[$kira]) as $tajuk ) :
					echo  "\n" . '<th>' . $tajuk . '</th>';
				endforeach;
				echo  "\n" . '</tr></thead>';
				$printed_headers = true;
			endif;
		#-----------------------------------------------------------------
		# print the data row
			echo  "\n" . '<tbody><tr>';
			foreach ( $row[$kira] as $key=>$data ) :
				echo paparTD($jadual, $key, $data);
			endforeach;
			echo  "\n" . '</tr></tbody>';
		}
		#-----------------------------------------------------------------
		echo "\n" . '</table>' . "\n";
		#
	}
#-------------------------------------------------------------------------------------------------
	function paparTD($jadual, $key, $data)
	{
		if($key=='No'):
			$p = '<a href="' . URL . 'tnt/borangUbah/' .
			$data . '">' . $data . '</a>';
		else:
			$p = $data;
		endif;

		return "\n" . '<td>' . $p . '</td>';
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
		$class2 = 'col-sm-6 '; # untuk $data
		$html->medanCarian(
			array($method, $myTable, $senarai, $cariID, $_jadual)
		);
		# mula papar html5
		echo  "\n" . '<form method="POST" action="' . $aksi
		. '" class="bg-light text-dark">';
		for ($kira=0; $kira < count($row); $kira++)
		{	foreach ( $row[$kira] as $key=>$data )
			{## papar data $row ----------------------------------------------------------
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
		$jenis = null;
		$tx = $meta['jadual'][$i]['type'];//$type = 'VAR_STRING';
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
	function modalBorang()
	{
		$mencari = URL . 'tnt/borangBaru';
		echo  "\n";?>
<!-- ----------------------------------------------------------------------------------------- --><br>
<button class="btn btn-outline-primary rounded-pill" data-toggle="modal"
data-target="#extraLargeModal">Tambah Keterangan Perjalanan</button>
<div id="extraLargeModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-xl">
	<form method="POST" action="<?=$mencari?>" autocomplete="off">
		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Pilih Keterangan Perjalanan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body"><p><?php borangPerjalanan() ?></p></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-outline-primary" value="Simpan">
				</div>
		</div>
	</form>
	</div>
</div>
<!-- ----------------------------------------------------------------------------------------- --><br>
<?php	echo  "\n";
	}
#-------------------------------------------------------------------------------------------------
	function modalBorang02()
	{
		$mencari = URL . 'tnt/borangBaru';
		$url = URL . 'tnt/jenisBorang/';
		//<a href="#theModal" class="nav-link" data-remote="/render/xJCCbGB5oA" data-toggle="modal" data-target="#theModal">Modal</a>
		//<a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#extraLargeModal" data-remote="/render/xJCCbGB5oA" >Modal</a>
		echo  "\n";?>
<!-- ----------------------------------------------------------------------------------------- --><br>
<ul class="nav nav-pills mb-3">
<li><a class="btn btn-outline-secondary rounded-pill" data-remote="<?php echo $url ?>a" data-toggle="modal" data-target="#x">A</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-remote="<?php echo $url ?>b" data-toggle="modal" data-target="#x">B</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-remote="<?php echo $url ?>c" data-toggle="modal" data-target="#x">C</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#x">Keterangan</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#x">Mula/Tamat</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#x">Tuntutan</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#x">Bayaran</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#x">Tambang</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#x">Pengangkutan</a></li>
<li><a class="btn btn-outline-secondary rounded-pill" data-toggle="modal" data-target="#x">Elaun</a></li>
</ul>
<!-- ----------------------------------------------------------------------------------------- --><br>
<div id="x" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-xl">
	<form method="POST" action="<?=$mencari?>" autocomplete="off">
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
<?php	echo  "\n";
	}
#-------------------------------------------------------------------------------------------------
	function borangPerjalanan()
	{
		$j = 'tnt';
		$tarikh = $j . '[tarikh]';
		$bertolak = $j . '[bertolak]';
		$sampai = $j . '[sampai]';
		$keterangan = $j . '[keterangan]';
		$keteranganNamaPejabat = $j . '[keteranganNamaPejabat]';
		$keteranganHari = $j . '[keteranganHari]';
		$keteranganKadar = $j . '[keteranganKadar]';
		$keteranganNamaPemandu = $j . '[keteranganNamaPemandu]';
		$jarak = $j . '[jarak]';
		$jumlah = $j . '[jumlah]';
	}
#-------------------------------------------------------------------------------------------------
	function borangTarikhMasa($j)
	{
		$tarikh = $j . '[tarikh]';
		$bertolak = $j . '[bertolak]';
		$sampai = $j . '[sampai]';
		?><div class="form-group col-md-4">
				<label for="inputState">Tarikh & Masa</label>
				<input name="$tarikh" type="date" class="form-control">
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
					<input name="$bertolak" type="time" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
					<input name="$sampai" type="time" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group --><?php
		echo "\n";
		#
	}
#-------------------------------------------------------------------------------------------------
	function borangKeteranganAm($j)
	{
		?>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Keterangan</legend>
		<div class="form-row">
			<?php borangTarikhMasa($j) ?>
			<div class="form-group col-md-3">
				<label for="inputCity">Keterangan</label>
				<textarea name="$keterangan" class="form-control" row="100"></textarea>
			</div>
			<div class="form-group col-md-3">
				<label for="inputZip">&nbsp;</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Jarak KM</span></div>
					<input name="$jarak" type="text" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Jum RM</span></div>
					<input name="$jumlah" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<?php
	}
#-------------------------------------------------------------------------------------------------
	function borangMulaTamat($j)
	{
		?>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Mula/Tamat</legend>
		<div class="form-row">
			<?php borangTarikhMasa($j) ?>
			<div class="form-group col-md-3">
				<label for="inputState">Mula/Tamat</label>
				<select name="$keterangan" class="form-control">
					<option value="" selected>Tiada</option>
					<option>Dari pejabat {namaPejabat} ke</option>
					<option>Balik ke {namaPejabat}</option>
					<option>Dari tempat kediaman ke</option>
					<option>Balik ke tempat kediaman</option>
					<option>Dari tempat penginapan ke</option>
					<option>Balik ke tempat penginapan di </option>
				</select>
				<label for="inputCity">namaPejabat</label>
				<textarea name="$keteranganNamaPejabat" class="form-control" row="100"></textarea>
			</div>
			<div class="form-group col-md-3">
				<label for="inputZip">&nbsp;</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Jarak KM</span></div>
					<input name="$jarak" type="text" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Jum RM</span></div>
					<input name="$jumlah" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<?php
	}
#-------------------------------------------------------------------------------------------------
	function borangTuntutan($j)
	{
		?>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Tuntutan</legend>
		<div class="form-row">
			<?php borangTarikhMasa($j) ?>
			<div class="form-group col-md-3">
				<label for="inputState">Jenis Tuntutan</label>
				<select name="$keterangan" class="form-control">
				<option value="" selected>Tiada</option>
				<option>Tuntutan Perbatuan</option>
				<option>Tuntutan Keretapi</option>
				<option>Tuntutan Teksi</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input name="$keteranganKadar" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<?php
	}
#-------------------------------------------------------------------------------------------------
	function borangBayaran($j)
	{
		?>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Bayaran</legend>
		<div class="form-row">
			<?php borangTarikhMasa($j) ?>
			<div class="form-group col-md-3">
				<label for="inputState">Bayaran</label>
				<select name="$keterangan" class="form-control">
					<option value="">Bayaran ...</option>
					<option>Bayaran Tol</option>
					<option>Bayaran Parkir</option>
					<option>Bayaran Dobi</option>
					<option>Bayaran Balik Telefon</option>
					<option>Bayaran Pos</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input name="$keteranganKadar" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<?php
	}
#-------------------------------------------------------------------------------------------------
	function borangTambang($j)
	{
		?>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Tambang</legend>
		<div class="form-row">
			<?php borangTarikhMasa($j) ?>
			<div class="form-group col-md-3">
				<label for="inputState">Tambang</label>
				<select name="$keterangan" class="form-control">
					<option value="">Tambang ...</option>
					<option>Tambang Bas</option>
					<option>Tambang Teksi</option>
					<option>Tambang Grabcar</option>
					<option>Tambang Kereta Terbang</option>
					<option>Tambang Keretapi</option>
					<option>Tambang Komuter</option>
					<option>Tambang ERL</option>
					<option>Tambang LRT</option>
					<option>Tambang Monoril</option>
					<option>Tambang MRT</option>
					<option>Tambang Kapal Terbang</option>
					<option>Tambang Helikopter</option>
					<option>Tambang Kapal Angkasa</option>
					<option>Tambang Kapal Laut</option>
					<option>Tambang Bot</option>
					<option>Tambang Feri</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input name="$keteranganKadar" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<?php
	}
#-------------------------------------------------------------------------------------------------
	function borangPengangkutan($j)
	{
		?>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Pengangkutan</legend>
		<div class="form-row">
			<?php borangTarikhMasa($j) ?>
			<div class="form-group col-md-3">
				<label for="inputState">Cara Pengangkutan</label>
				<select name="$keterangan" class="form-control">
					<option value="" selected>Tiada</option>
					<option>* memandu kenderaan sendiri</option>
					<option>** menumpang saudara sendiri</option>
					<option>** menumpang {namaPemandu}</option>
					<option>*** menaiki kenderaan jabatan</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="inputState">Nama Pemandu</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Nama</span></div>
					<input name="$keteranganNamaPemandu" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<?php
	}
#-------------------------------------------------------------------------------------------------
	function borangElaun($j)
	{
		?>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Elaun</legend>
		<div class="form-row">
			<?php borangTarikhMasa($j) ?>
			<div class="form-group col-md-3">
				<label for="inputState">Kiraan</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Elaun</span></div>
					<select name="$keterangan" class="form-control">
					<option selected>Elaun Loging X RM 40.00</option>
					<option>Elaun *Loging X RM 35.00</option>
					<option>Elaun Hotel</option>
					<option>Servis Caj</option>
					<option>Elaun Makan X RM 40.00</option>
					<option>Elaun Harian X RM 20.00</option>
					<option>Elaun Kerja Luar</option>
					<option>Elaun Tugas Memandu</option>
					</select>
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-1">
				<label for="inputState">Berapa</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">hari</span></div>
					<input name="$keteranganHari" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-1">
				<label for="inputState">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input name="$keteranganKadar" type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
		</div><!-- / class="form-row -->
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<?php
	}
#-------------------------------------------------------------------------------------------------
	function borangPerjalananLama()
	{
		# https://getbootstrap.com/docs/4.3/components/forms/
		print <<<END
<!-- h1> Ini Template Borang Bootstrap </h1 -->
<form>
<!-- sempadan form-group row -->
<fieldset class="border p-2"><legend class="w-auto">Perjalanan</legend>
<div class="form-group row">
	<label for="inputTajuk" class="col-sm-2 control-label text-right">#label</label>
	<div class="col-sm-8">
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">*</span></div>
			<input type="text" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="col-sm-10" -->
</div><!-- / class="form-group row" -->
</fieldset><br>
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
<fieldset class="form-group border p-2"><legend class="w-auto">Perjalanan 01</legend>
<div class="form-row">
	<div class="form-group col-md-3">
		<label for="inputState">Tarikh & Masa</label>
		<input type="date" class="form-control">
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
			<input type="time" class="form-control">
			<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
			<input type="time" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="form-group -->
	<div class="form-group col-md-3">
		<label for="inputCity">Keterangan</label>
		<textarea class="form-control" row="100"></textarea>
	</div>
	<div class="form-group col-md-3">
		<label for="inputState">Jenis Tuntutan</label>
		<select class="form-control">
		<option selected>Tiada</option>
		<option>Tuntutan Perbatuan</option>
		<option>Tuntutan Keretapi</option>
		<option>Tuntutan Teksi</option>
		<option>...</option>
		</select>
		<label for="inputState">Cara Pengangkutan</label>
		<select class="form-control">
		<option selected>Tiada</option>
		<option>dengan memandu kenderaan sendiri</option>
		<option>dengan menaiki ERL</option>
		<option>dengan menaiki LRT</option>
		<option>dengan Teksi</option>
		<option>dengan Grabcar</option>
		<option>** menumpang saudara sendiri</option>
		<option>*** menaiki kenderaan jabatan</option>
		<option>...</option>
		</select>
	</div>
	<div class="form-group col-md-3">
		<label for="inputZip">&nbsp;</label>
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">Jarak KM</span></div>
			<input type="text" class="form-control">
			<div class="input-group-prepend"><span class="input-group-text">Jum RM</span></div>
			<input type="text" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div>
</div>
</fieldset>
<!-- sempadan form-group row -->
<fieldset class="form-group border p-2"><legend class="w-auto">Perjalanan 02</legend>
<div class="form-row">
	<div class="form-group col-md-1">
			<label>Tarikh</label>
			<input type="date" class="form-control">
	</div><!-- / class="form-group -->
	<div class="form-group col-md-3">
		<label for="inputState">Masa</label>
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
			<input type="time" class="form-control">
			<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
			<input type="time" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="form-group -->
	<div class="form-group col-md-3">
		<label for="inputState">Kiraan</label>
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">Elaun</span></div>
			<select class="form-control">
			<option selected>Elaun Loging X RM 40.00</option>
			<option>Elaun *Loging X RM 35.00</option>
			<option>Elaun Hotel</option>
			<option>Elaun Makan X RM 40.00</option>
			<option>Elaun Harian X RM 20.00</option>
			<option>Bayaran Tol</option>
			<option>Bayaran Parkir</option>
			<option>Tambang Bas</option>
			<option>Tambang Teksi</option>
			<option>Tambang Grabcar</option>
			</select>
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="form-group -->
	<div class="form-group col-md-1">
		<label for="inputState">Berapa</label>
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">hari</span></div>
			<input type="text" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="form-group -->
	<div class="form-group col-md-1">
		<label for="inputState">Kadar</label>
		<div class="input-group input-group">
			<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
			<input type="text" class="form-control">
		</div><!-- / "input-group input-group" -->
	</div><!-- / class="form-group -->
</div><!-- / class="form-row -->
</fieldset>
<!-- sempadan form-group row -->
<fieldset class="form-group border p-2"><legend class="w-auto">Perjalanan 03</legend>
<div class="form-row">
	<div class="form-group col">
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Keterangan</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Tuntutan</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Bayaran</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Tambang</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Elaun</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Pengangkutan</label>
	</div><!-- / class="form-group col" -->
</div><!-- / class="form-row" -->
</fieldset>
<!-- sempadan form-group row -->

</form>
<br>
END;
		#
	}

#-------------------------------------------------------------------------------------------------
	function contohBorang02()
	{
		print <<<END
<p>
	<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
	<div class="col">
		<div class="collapse multi-collapse" id="multiCollapseExample1">
			<div class="card card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			</div>
		</div>
	</div>
	<div class="col">
		<div class="collapse multi-collapse" id="multiCollapseExample2">
			<div class="card card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			</div>
		</div>
	</div>
</div>
<!-- ----------------------------------------------------------------------------------------- --
<div class="accordion" id="accordionExample">
	<div class="card">
		<div class="card-header" id="headingOne">
			<h2 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Collapsible Group Item #1
				</button>
			</h2>
		</div>
		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header" id="headingTwo">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Collapsible Group Item #2
				</button>
			</h2>
		</div>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			<div class="card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header" id="headingThree">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Collapsible Group Item #3
				</button>
			</h2>
		</div>
		<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
			<div class="card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
</div>
<!-- ----------------------------------------------------------------------------------------- --<br>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<li class="nav-item">
	<a class="border border-secondary nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
</li>
<li class="nav-item">
	<a class="border border-secondary nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
</li>
<li class="nav-item">
	<a class="border border-secondary nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
</li>
</ul>
<div class="tab-content" id="pills-tabContent">
	<div class="border border-secondary tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		Home Daa
	</div>
	<div class="border border-secondary tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		Profile Daa
	</div>
	<div class="border border-secondary tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
		Contact Daa
	</div>
</div>
<!-- ----------------------------------------------------------------------------------------- --<br>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Keterangan</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Tuntutan</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Bayaran</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Tambang</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Elaun</label>
		<label data-toggle-"tab" data-target="#tab1"><input type="radio" name="radio01">Pengangkutan</label>
<!-- ----------------------------------------------------------------------------------------- --><br>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<li>
	<a href="#a" class="btn btn-outline-secondary rounded-pill active" data-toggle="pill" aria-selected="true">Keterangan</a>
</li>
<li>
	<a href="#b" class="btn btn-outline-secondary rounded-pill" data-toggle="pill" aria-selected="false">Tuntutan</a>
</li>
<li>
	<a href="#c" class="btn btn-outline-secondary rounded-pill" data-toggle="pill" aria-selected="false">Bayaran</a>
</li>
<li>
	<a href="#d" class="btn btn-outline-secondary rounded-pill" data-toggle="pill" aria-selected="false">Tambang</a>
</li>
<li>
	<a href="#e" class="btn btn-outline-secondary rounded-pill" data-toggle="pill" aria-selected="false">Pengangkutan</a>
</li>
<li>
	<a href="#f" class="btn btn-outline-secondary rounded-pill" data-toggle="pill" aria-selected="false">Elaun</a>
</li>
</ul>
<div class="tab-content" id="pills-tabContent">
	<div class="tab-pane fade show active" id="a">
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Keterangan</legend>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputState">Tarikh & Masa</label>
				<input type="date" class="form-control">
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
					<input type="time" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
					<input type="time" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-3">
				<label for="inputCity">Keterangan</label>
				<textarea class="form-control" row="100"></textarea>
			</div>
			<div class="form-group col-md-3">
				<label for="inputZip">&nbsp;</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Jarak KM</span></div>
					<input type="text" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Jum RM</span></div>
					<input type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- / class="tab-pane fade" -->
	<div class="tab-pane fade" id="b">
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Tuntutan</legend>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputState">Tarikh & Masa</label>
				<input type="date" class="form-control">
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
					<input type="time" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
					<input type="time" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-3">
				<label for="inputState">Jenis Tuntutan</label>
				<select class="form-control">
				<option value="" selected>Tiada</option>
				<option>Tuntutan Perbatuan</option>
				<option>Tuntutan Keretapi</option>
				<option>Tuntutan Teksi</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- / class="tab-pane fade" -->
	<div class="tab-pane fade" id="c">
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Bayaran</legend>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputState">Tarikh & Masa</label>
				<input type="date" class="form-control">
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
					<input type="time" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
					<input type="time" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-3">
				<label for="inputState">Bayaran</label>
				<select class="form-control">
					<option value="">Bayaran ...</option>
					<option>Bayaran Tol</option>
					<option>Bayaran Parkir</option>
					<option>Bayaran Dobi</option>
					<option>Bayaran Balik Telefon</option>
					<option>Bayaran Pos</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- / class="tab-pane fade" -->
	<div class="tab-pane fade" id="d">
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Tambang</legend>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputState">Tarikh & Masa</label>
				<input type="date" class="form-control">
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
					<input type="time" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
					<input type="time" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-3">
				<label for="inputState">Tambang</label>
				<select class="form-control">
					<option value="">Tambang ...</option>
					<option>Tambang Bas</option>
					<option>Tambang Teksi</option>
					<option>Tambang Grabcar</option>
					<option>Tambang Kereta Terbang</option>
					<option>Tambang Keretapi</option>
					<option>Tambang Komuter</option>
					<option>Tambang ERL</option>
					<option>Tambang LRT</option>
					<option>Tambang Monoril</option>
					<option>Tambang MRT</option>
					<option>Tambang Kapal Terbang</option>
					<option>Tambang Helikopter</option>
					<option>Tambang Kapal Angkasa</option>
					<option>Tambang Kapal Laut</option>
					<option>Tambang Bot</option>
					<option>Tambang Feri</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- / class="tab-pane fade" -->
	<div class="tab-pane fade" id="e">
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Pengangkutan</legend>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputState">Tarikh & Masa</label>
				<input type="date" class="form-control">
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
					<input type="time" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
					<input type="time" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-3">
				<label for="inputState">Cara Pengangkutan</label>
				<select class="form-control">
					<option value="" selected>Tiada</option>
					<option>* memandu kenderaan sendiri</option>
					<option>** menumpang saudara sendiri</option>
					<option>*** menaiki kenderaan jabatan</option>
				</select>
			</div>
		</div>
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- / class="tab-pane fade" -->
	<div class="tab-pane fade" id="f">
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<fieldset class="form-group border p-2"><legend class="w-auto">Elaun</legend>
		<div class="form-row">
			<div class="form-group col-md-1">
					<label>Tarikh</label>
					<input type="date" class="form-control">
			</div><!-- / class="form-group -->
			<div class="form-group col-md-3">
				<label for="inputState">Masa</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Mula</span></div>
					<input type="time" class="form-control">
					<div class="input-group-prepend"><span class="input-group-text">Tamat</span></div>
					<input type="time" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-3">
				<label for="inputState">Kiraan</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">Elaun</span></div>
					<select class="form-control">
					<option selected>Elaun Loging X RM 40.00</option>
					<option>Elaun *Loging X RM 35.00</option>
					<option>Elaun Hotel</option>
					<option>Servis Caj</option>
					<option>Elaun Makan X RM 40.00</option>
					<option>Elaun Harian X RM 20.00</option>
					<option>Elaun Kerja Luar</option>
					<option>Elaun Tugas Memandu</option>
					</select>
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-1">
				<label for="inputState">Berapa</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">hari</span></div>
					<input type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
			<div class="form-group col-md-1">
				<label for="inputState">Kadar</label>
				<div class="input-group input-group">
					<div class="input-group-prepend"><span class="input-group-text">RM</span></div>
					<input type="text" class="form-control">
				</div><!-- / "input-group input-group" -->
			</div><!-- / class="form-group -->
		</div><!-- / class="form-row -->
		</fieldset>
	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- / class="tab-pane fade" -->
</div>
<!-- ----------------------------------------------------------------------------------------- --<br>
<p>
	<a class="btn btn-outline-secondary rounded-pill" href="#Keterangan" aria-controls="Keterangan" data-toggle="collapse" aria-expanded="false">Keterangan</a>
	<a class="btn btn-outline-secondary rounded-pill" href="#Tuntutan" aria-controls="Tuntutan" data-toggle="collapse" aria-expanded="false">Tuntutan</a>
	<a class="btn btn-outline-secondary rounded-pill" href="#Bayaran" aria-controls="Bayaran" data-toggle="collapse" aria-expanded="false">Bayaran</a>
	<a class="btn btn-outline-secondary rounded-pill" href="#Tambang" aria-controls="Tambang" data-toggle="collapse" aria-expanded="false">Tambang</a>
	<a class="btn btn-outline-secondary rounded-pill" href="#Elaun" aria-controls="Elaun" data-toggle="collapse" aria-expanded="false">Elaun</a>
	<a class="btn btn-outline-secondary rounded-pill" href="#Pengangkutan" aria-controls="Pengangkutan" data-toggle="collapse" aria-expanded="false">Pengangkutan</a>
</p>
<!-- sempadan form-group row -->
<div class="row"><div class="col">
	<div class="collapse multi-collapse" id="Keterangan"><div class="card card-body">
		Keterangan
	</div><!-- / class="card card-body" -->
	</div><!-- / class="collapse multi-collapse" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- sempadan form-group row -->
<div class="row"><div class="col">
	<div class="collapse multi-collapse" id="Tuntutan"><div class="card card-body">
		Tuntutan
	</div><!-- / class="card card-body" -->
	</div><!-- / class="collapse multi-collapse" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- sempadan form-group row -->
<div class="row"><div class="col">
	<div class="collapse multi-collapse" id="Bayaran"><div class="card card-body">
		Bayaran
	</div><!-- / class="card card-body" -->
	</div><!-- / class="collapse multi-collapse" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- sempadan form-group row -->
<div class="row"><div class="col">
	<div class="collapse multi-collapse" id="Tambang"><div class="card card-body">
		Tambang
	</div><!-- / class="card card-body" -->
	</div><!-- / class="collapse multi-collapse" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- sempadan form-group row -->
<div class="row"><div class="col">
	<div class="collapse multi-collapse" id="Elaun"><div class="card card-body">
		Elaun
	</div><!-- / class="card card-body" -->
	</div><!-- / class="collapse multi-collapse" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- sempadan form-group row -->
<div class="row"><div class="col">
	<div class="collapse multi-collapse" id="Pengangkutan"><div class="card card-body">
		Pengangkutan
	</div><!-- / class="card card-body" -->
	</div><!-- / class="collapse multi-collapse" -->
</div><!-- / class="col" -->
</div><!-- / class="row" -->
<!-- sempadan form-group row -->
<!-- ----------------------------------------------------------------------------------------- -->
<br>
END;
		#
	}
#-------------------------------------------------------------------------------------------------
	function contohBorang03()
	{
		print <<<END
END;
		#
	}
#-------------------------------------------------------------------------------------------------
?>