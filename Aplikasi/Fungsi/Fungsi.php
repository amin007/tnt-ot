<?php
//namespace Aplikasi\Kitab; //echo __NAMESPACE__;
#------------------------------------------------------------------------------------------
function bulanan($jenis, $t)
{
	if ($jenis=='kawalan')// $t = '12' , tahun
		$bulan = array('rangka'.$t,
		'jan'.$t, 'feb'.$t, 'mac'.$t, 'apr'.$t,
		'mei'.$t, 'jun'.$t, 'jul'.$t, 'ogo'.$t,
		'sep'.$t, 'okt'.$t, 'nov'.$t, 'dis'.$t);
	elseif ($jenis=='data_bulanan')
		$bulan = array(
		'jan'.$t, 'feb'.$t, 'mac'.$t, 'apr'.$t,
		'mei'.$t, 'jun'.$t, 'jul'.$t, 'ogo'.$t,
		'sep'.$t, 'okt'.$t, 'nov'.$t, 'dis'.$t);
	elseif ($jenis=='nama_bulan')
		$bulan = array(
		'jan', 'feb', 'mac', 'apr',
		'mei', 'jun', 'jul', 'ogo',
		'sep', 'okt', 'nov', 'dis');
	elseif ($jenis=='key_nama_bulan')
		$bulan = array(
		'jan' => 0, 'feb' => 1, 'mac' => 2, 'apr' => 3,
		'mei' => 4, 'jun' => 5, 'jul' => 6, 'ogo' => 7,
		'sep' => 8, 'okt' => 9, 'nov' =>10, 'dis' =>11);
	elseif ($jenis=='bulan_penuh')
		$bulan = array('Januari', 'Februari', 'Mac', 'April',
		'Mei', 'Jun', 'Julai', 'Ogos',
		'September', 'Oktober', 'November', 'Disember');
	elseif ($jenis=='key_bulan_penuh')
		$bulan = array('Januari' => 0, 'Februari' => 1, 'Mac' => 2, 'April' => 3,
		'Mei' => 4, 'Jun' => 5, 'Julai' => 6, 'Ogos' => 7,
		'September' => 8, 'Oktober' => 9, 'November' => 10, 'Disember' => 11);
	elseif ($jenis=='nama_harian')
		$bulan = array('Ahad','Isnin','Selasa','Rabu',
		'Khamis','Jumaat','Sabtu');
	elseif ($jenis=='key_nama_harian')
		$bulan = array('Ahad' => 0,'Isnin' => 1,'Selasa' => 2,'Rabu' => 3,
		'Khamis' => 4,'Jumaat' => 5,'Sabtu' => 6);
    //elseif ($jenis=='') $bulan = array();
	# pulangkan nilai $bulan
	return $bulan;
}
#------------------------------------------------------------------------------------------
function dptNamaHari($tarikh)
{
	$hb = date('w', strtotime($tarikh)); # w = cari key dalam tarikh
	$namaHari = array_search($hb,bulanan('key_nama_harian', null)); # papar nama hari
	return $namaHari;
}
#------------------------------------------------------------------------------------------
// mula untuk kod php+html
function papar_jadual($row, $myTable, $pilih)
{
	if ($pilih == 1)
	{
///////////////////////////////////////////////////////////////////////////////////////////////////
		?><!-- Jadual <?php echo $myTable ?> -->
		<table border="1" class="excel" id="example"><?php
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < count($row); $kira++)
		{	# print the headers once:
			if ( !$printed_headers ) : ?>
		<thead><tr>
		<th>#</th><?php foreach ( array_keys($row[$kira]) as $tajuk ) :
		?><th><?php echo $tajuk ?></th>
		<?php endforeach; ?>
		</tr></thead>
		<?php
				$printed_headers = true;
			endif;
		#-----------------------------------------------------------------
		//print the data row ?>
		<tbody><tr>
		<td><?php echo $kira+1 ?></td>
		<?php foreach ( $row[$kira] as $key=>$data ) :
		?><td><?php echo $data ?></td>
		<?php endforeach; ?>
		</tr></tbody>
		<?php
		}
		#-----------------------------------------------------------------
		?></table><!-- Jadual <?php echo $myTable ?> --><?php
///////////////////////////////////////////////////////////////////////////////////////////////////
	}
	elseif ($pilih == 2) 
	{
///////////////////////////////////////////////////////////////////////////////////////////////////
		?><!-- Jadual <?php echo $myTable ?> -->
		<table border="1" class="excel" id="example"><?php
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < count($row); $kira++)
		{	# print the headers once:
			if ( !$printed_headers ) : ?>
		<thead><tr>
		<th>#</th><?php
				foreach ( array_keys($row[$kira]) AS $tajuk )
				{ 	if ( !is_int($tajuk) ) :
						$paparTajuk = ($tajuk=='nama') ?
						$tajuk . '(jadual:' . $myTable . ')'
						: $tajuk; ?>
		<th><?php echo $paparTajuk ?></th>
		<?php		endif;
				}
		?></tr></thead><?php
				$printed_headers = true;
			endif;
		#-----------------------------------------------------------------
		//print the data row ?>
		<tbody><tr>
		<td><?php echo $kira+1 ?></td>
		<?php
			foreach ( $row[$kira] AS $key=>$data )
			{
				?><td><?php echo $data ?></td>
		<?php
			}
			?></tr></tbody>
		<?php
		}
		#-----------------------------------------------------------------
		?></table><!-- Jadual <?php echo $myTable ?> --><?php
///////////////////////////////////////////////////////////////////////////////////////////////////
	}
	elseif ($pilih == 3) 
	{
///////////////////////////////////////////////////////////////////////////////////////////////////
		?><!-- Jadual <?php echo $myTable ?>  --><?php
		for ($kira=0; $kira < count($row); $kira++)
		{// ulang untuk $kira++ ?>
		<table border="1" class="excel" id="example">
		<tbody><?php foreach ( $row[$kira] as $key=>$data ):?>
		<tr>
		<td><span class="label"><?php echo $key ?></span></td>
		<td><?php echo $data ?></td>
		</tr>
		<?php endforeach; ?></tbody>
		</table>
		<?php
		}// ulang untuk $kira++ ?>
		<!-- Jadual <?php echo $myTable ?> --><?php
///////////////////////////////////////////////////////////////////////////////////////////////////
	} // tamat if ($pilih ==3
	elseif ($pilih == 4)
	{ // mula if ($pilih==4
///////////////////////////////////////////////////////////////////////////////////////////////////
		$bil_tajuk = $row['bil_tajuk'];
		$bil_baris = $row['bil_baris'];
		$output  = null;
		//$output .= '<br>$bil_tajuk=' . $bil_tajuk;
		//$output .= '<br>$bil_baris=' . $bil_baris;
		$output .= '<table border="1" class="excel" id="example">
		<thead><tr>
		<th colspan="' . $bil_tajuk . '">
		<strong>Jadual ' . $myTable . ' : ' . $bil_tajuk . '
		</strong></th>
		</tr></thead>';

		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##===========================================================
				$output .= "\r\t<thead><tr>\r\t<th>#</th>";
				foreach ( array_keys($row[$kira]) as $tajuk ) :
				$output .= "\r\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\r\t" . '</tr></thead>';
			##============================================================
				$printed_headers = true;
			}
		#-----------------------------------------------------------------
			# print the data row
			$output .= "\r\t<tbody><tr>\r\t<td>" . ($kira+1) . '</td>';
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\r\t" . '<td>' . $data . '</td>';
			endforeach;
			$output .= "\r\t" . '</tr></tbody>';
		}#----------------------------------------------------------------
		$output .= "\r\t" . '</table>';

		return $output;
	} // tamat if ($pilih == 4
///////////////////////////////////////////////////////////////////////////////////////////////////
	elseif ($pilih == 5)
	{// mula if (pilih==5
///////////////////////////////////////////////////////////////////////////////////////////////////
		?><table class="table table-bordered table-hover table-sm"><?php
		// mula bina jadual
		$printed_headers = false;
		#-----------------------------------------------------------------
		for ($kira=0; $kira < count($row); $kira++)
		{	//print the headers once:
			if ( !$printed_headers ) : ?>
		<thead><tr>
		<?php foreach ( array_keys($row[$kira]) as $tajuk ) :
		?><th><?php echo $tajuk ?></th>
		<?php endforeach; ?>
		</tr></thead><?php
				$printed_headers = true;
			endif;
		#-----------------------------------------------------------------
		//print the data row ?>
		<tbody><tr>
		<?php foreach ( $row[$kira] as $key=>$data ) :
		?><td><?php echo $data ?></td>
		<?php endforeach; ?>
		</tr></tbody>
		<?php
		}
		#-----------------------------------------------------------------
		?></table><!-- Jadual <?php echo $myTable ?> --><?php
	}// tamat if ($pilih==5
///////////////////////////////////////////////////////////////////////////////////////////////////
}
// tamat untuk kod php+html 
#------------------------------------------------------------------------------------------
/**
 * Returns the type of the var passed.
 *
 * @param mixed $var Variable
 * @return string Type of variable
 */
function myGetType($var)
{
	if (is_array($var)) return "array";
	if (is_bool($var)) return "boolean";
	if (is_float($var)) return "float";
	if (is_int($var)) return "integer";
	if (is_null($var)) return "NULL";
	if (is_numeric($var)) return "numeric";
	if (is_object($var)) return "object";
	if (is_resource($var)) return "resource";
	if (is_string($var)) return "string";
	return "unknown type";
}
#------------------------------------------------------------------------------------------
/*
kira titik perpuluhan
	#https://stackoverflow.com/questions/2430084/php-get-number-of-decimal-digits
	$tp = strlen(preg_replace("/.*\./", "", $var));//kira titik perpuluhan

*/
#------------------------------------------------------------------------------------------
function countDecimals($str)
{
	# https://board.phpbuilder.com/d/10366697-resolved-how-can-i-count-decimal-places-in-a-number-in-php/7
	//$fNumber = floatval($fNumber);
	//for( $iDec = 0; $fNumber != round($fNumber, $iDec); $iDec++);
	$iDec = strlen(substr(strrchr($str, "."), 1));

	return $iDec;
}
#------------------------------------------------------------------------------------------
function phpToSqlDataType($var)
{
	$len = strlen($var);
	$tp = countDecimals($var);
	if (is_array($var)) return "enum";//"array";
	if (is_bool($var)) return "tinyint($len)";//"boolean";
	if (is_float($var) && in_array($tp,array(1,2)) ) return "decimal(10,2)";//"float";
	//if (is_float($var)) return "float($len)";//"float";
	if (is_float($var)) return "float";//"float";
	if (is_int($var)) return "int(11)";//"integer";
	if (is_null($var)) return "varchar($len)";//"NULL";
	//if (is_numeric($var)) return "numeric";
	//if (is_object($var)) return "object";
	//if (is_resource($var)) return "resource";
	if (is_string($var) && $len < 6) return "char($len)";
	if (is_string($var) && $len > 12) return "varchar(255)";
	if (is_string($var)) return "varchar($len)";//"string";
	return 'apakah!!!';
}
#------------------------------------------------------------------------------------------
function kira($kiraan)
{
	// pecahan kepada ratus
	return number_format($kiraan,0,'.',',');
}
#------------------------------------------------------------------------------------------
function kira2($dulu,$kini)
{
	// buat bandingan dan pecahan kepada ratus
	return @number_format((($kini-$dulu)/$dulu)*100,0,'.',',');
	//@$kiraan=(($kini-$dulu)/$dulu)*100;
}
#------------------------------------------------------------------------------------------
function kira3($kira,$n)
{
	return str_pad($kira,$n,'0',STR_PAD_LEFT);
}
#------------------------------------------------------------------------------------------
function kiraDuit($kira,$namaDuit=null)
{
	$kira = str_pad(kira($kira),5,'-',STR_PAD_LEFT);# tukar format 00000.00
	if($namaDuit == null) return $kira;
	if(in_array($namaDuit,array('RM','rm'))) return 'RM&nbsp;&nbsp;' . $kira;
	if(in_array($namaDuit,array('MYR','myr'))) return 'MYR ' . $kira;
	if(in_array($namaDuit,array('$'))) return '$ ' . $kira;
	if(in_array($namaDuit,array('USD'))) return 'USD ' . $kira;
}
#------------------------------------------------------------------------------------------
#https://www.php.net/manual/en/function.number-format.php
#https://www.php.net/manual/en/function.money-format.php
#------------------------------------------------------------------------------------------
function huruf($jenis, $papar)
{
    /*
		huruf('BESAR', )
		huruf('kecil', )
		huruf('Depan', )
		huruf('Besar_Depan', )
    */
	switch($jenis)
	{# mula - pilih $jenis
		case 'BESAR':
			$papar = strtoupper($papar);
			break;
		case 'kecil':
			$papar = strtolower($papar);
			break;
		case 'Depan':
			$papar = ucfrist($papar);
			break;
		case 'Besar_Depan':
			$papar = mb_convert_case($papar, MB_CASE_TITLE);
			break;
	}# tamat - pilih $jenis

	return $papar;
}
#------------------------------------------------------------------------------------------
function bersih($papar)
{
	# lepas lari aksara khas dalam SQL
	//$papar = mysql_real_escape_string($papar);
	# buang ruang kosong (atau aksara lain) dari mula & akhir
	$papar = trim($papar);

	return $papar;
}
#------------------------------------------------------------------------------------------
function gambar_latarbelakang()
{
	$tmpt2 = ($_SERVER['SERVER_NAME']=='www.amin007.org') ?
		'../bssu/bg/bg' // utk website amin007
		: '../../../private_html/bg/bg'; // utk localhost

	foreach(scandir($tmpt2) as $gambar)
	{
		if (substr($gambar,-3) == 'jpg')
			$papar[]=$gambar;
	}

	$today = rand(0, count($papar)-1);
	return $papar[$today];
}
#------------------------------------------------------------------------------------------
function dpt_senarai($pilih)
{
	# define('MSICBARU', serialize (array()) );
	if ($pilih == 'TNT_PEGAWAI') :
		$jadual = unserialize(TNT_PEGAWAI);
	# kod JS/css local dan cdn
	elseif ($pilih == 'CSS_ARRAY') :
		$jadual = unserialize(CSS_ARRAY);
	elseif ($pilih == 'JS_ARRAY') :
		$jadual = unserialize(JS_ARRAY);
	elseif ($pilih == 'CSS_ARRAY_CDN') :
		$jadual = unserialize(CSS_ARRAY_CDN);
	elseif ($pilih == 'JS_ARRAY_CDN') :
		$jadual = unserialize(JS_ARRAY_CDN);
	# kod login
	elseif ($pilih == 'jadual_login') :
		$jadual = unserialize(JADUAL_LOGIN);
	elseif ($pilih == 'jadual_biodata') :
		$jadual = unserialize(JADUAL_BIODATA);
	# pilih nama jadual
	elseif ($pilih == 'jadual_nama') :
		$jadual = unserialize(JADUAL_NAMA);
	else : $jadual = array(); //unserialize()
	endif;

	//echo 'dpt_senarai($pilih = ' . $pilih . ')<hr>';
	//echo '<pre>$jadual =>'; print_r($jadual); echo '</pre><hr>';

	return $jadual;
}
#------------------------------------------------------------------------------------------