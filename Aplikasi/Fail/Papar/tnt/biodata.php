<?php
//echo '<pre>senarai=><br>'; print_r($this->senarai); echo '</pre>' . "\r\r";

//ulangJadual($this->senarai);
foreach($this->senarai as $jadual => $row):
	paparJadual($this->senarai, $jadual, $row);
endforeach;
#
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
