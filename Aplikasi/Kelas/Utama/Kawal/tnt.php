<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Tnt extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		//\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
		$this->papar->css = dpt_senarai('CSS_ARRAY_CDN');
		$this->papar->js = dpt_senarai('JS_ARRAY_CDN');
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##------------------------------------------------------------------------------------------
	function array_insert_after($no,$key, array &$array, $new_key, $new_value)
	{
		# http://eosrei.net/comment/287
		if (array_key_exists($key, $array))
		{
			$new = array();
			foreach ($array as $k => $value)
			{
				$new[$no][$k] = $value;//echo "$no $key $new <br>\r";
				if ($k === $key)
					$new[$no][$new_key] = $new_value;
			}
			return $new;
		}

		return FALSE;
	}
##------------------------------------------------------------------------------------------
	function godekData($t,$semuaData)
	{
		list($data,$meta) = $semuaData;
		foreach($meta as $k=>$v): foreach($v as $k1=>$v1):
			if($k1=='name') $meta[$k]['data'] = $data[0][$v1];
		endforeach;
			$meta[$k]['primary_key'] = (!empty(array_filter($meta[$k]['flags']))) ?
				'yes':'no';
			$meta[$k]['type'] = $meta[$k]['native_type'];
			$meta[$k]['length'] = $meta[$k]['len'];
			# buang nilai element
			unset($meta[$k]['len']);
			unset($meta[$k]['flags']);
			unset($meta[$k]['pdo_type']);
			unset($meta[$k]['precision']);
			unset($meta[$k]['native_type']);
		endforeach;//*/
		#
		$meta2 = null;
		//$meta2 = $this->tanya->paparMedan($t);
		//$meta2 = $this->tanya->paparMedan02($t);
		//$meta2 = $this->tanya->pilihMedan($t);
		//$meta2 = $this->tanya->pilihMedan01($t);
		//$meta2 = $this->tanya->pilihMedan02($t);# tidak boleh pakai
		#
		return array($data,$meta,$meta2);
	}
##------------------------------------------------------------------------------------------
	function dataMeta($t,$semuaData)
	{
		list($data,$meta,$meta2) = $this->godekData($t,$semuaData);
		# bentuk sql yang biasa
		$sql2 = $this->tanya->paparSqlCariData($t);
		# masukkan dalam $this->papar
		$this->papar->senarai['keterangan'] = $data;
		$this->papar->_meta = $meta;//*/
		# Semak data dulu
		$this->semakPembolehubah($sql2,'sql2');
		$this->semakPembolehubah($meta2,'meta2');
		$this->semakPembolehubah($data,'data');
		//$this->semakPembolehubah($this->papar->senarai,'senarai');
		$this->semakPembolehubah($this->papar->_meta,'_meta');
	}
##------------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
##------------------------------------------------------------------------------------------
	public function paparHeader($lokasi = 'pergi/mana')
	{
		//$this->paparHeader('sumber/fail/rujukan');
		////$this->semakPembolehubah($ujian,'ujian',0);# Semak data dulu
		//echo '<br>location: ' . URL . $lokasi;
		header('location:' . URL . $lokasi);//*/
	}
##------------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{
		$jenis = $this->papar->pilihTemplate($template=431);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##------------------------------------------------------------------------------------------
	public function index($a='')
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = $this->_folder;

		# Pergi papar kandungan
		//$this->paparHeader('tnt/biodata');
		$p = 0; $f = array('index');
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,$f[$p],$noInclude=0);
	}
##------------------------------------------------------------------------------------------
#==========================================================================================
#------------------------------------------------------------------------------------------
	public function biodata($a=null)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'Biodata';
		$this->papar->senarai['biodata'][] = $this->tanya->biodata();

		# Pergi papar kandungan
		$p = 1; $f = array('index','biodata','keterangan','formula');
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,$f[$p],$noInclude=0);
	}
#------------------------------------------------------------------------------------------
	public function borang($a=null)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = $a;
		//$this->papar->senarai['biodata'][] = $this->tanya->biodata();
		list($t, $m, $c, $s, $p) = $this->tanya->keterangan();
		list($data,$meta) = $this->tanya->cariSemuaDataMeta//cariSql
			($t, $m, $c, $s, $p);
		$this->papar->senarai['keterangan'] = $data;
		$this->papar->_meta = $meta;

		# Pergi papar kandungan
		$p = 2; $f = array('index','biodata','keterangan','formula');
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		//$this->semakPembolehubah($this->papar->_meta,'_meta');# Semak data dulu
		$this->paparKandungan($this->_folder,$f[$p],$noInclude=0);//*/
	}
#------------------------------------------------------------------------------------------
	public function borangBaru($a=null,$b=null)
	{
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//$this->semakPembolehubah($b,'b');# Semak data dulu
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = $a;
		/*list($t, $m, $c, $s, $p) = $this->tanya->cariKeterangan($b);
		list($data,$meta) = $this->tanya->cariSemuaDataMeta//cariSql
			($t, $m, $c, $s, $p);
		$this->papar->senarai['keterangan'] = $data;
		$this->papar->_meta = $meta;//*/

		# Pergi papar kandungan
		$p = 2; $f = array('index','biodata','keterangan','formula');
		$this->semakPembolehubah($_POST,'POST');# Semak data dulu
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		//$this->semakPembolehubah($this->papar->_meta,'_meta');# Semak data dulu
		//$this->paparKandungan($this->_folder,$f[$p],$noInclude=0);//*/
	}
#------------------------------------------------------------------------------------------
	public function borangUbah($a=null,$b=null)
	{
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//$this->semakPembolehubah($a,'a');# Semak data dulu
		//$this->semakPembolehubah($b,'b');# Semak data dulu
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = $a;
		list($t, $m, $c, $s, $p) = $this->tanya->cariKeterangan($a);
		$semuaData = $this->tanya->cariSemuaDataMeta//cariSql
			($t, $m, $c, $s, $p);
		$this->dataMeta($t,$semuaData);

		# Pergi papar kandungan
		$p = 2; $f = array('index','biodata','keterangan','formula');
		//$this->paparKandungan($this->_folder,$f[$p],$noInclude=0);//*/
	}
#------------------------------------------------------------------------------------------
	public function cetak($p=1)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'Cetak';
		$this->papar->biodata = $this->tanya->biodata();
		$this->papar->claim = $this->tanya->claim();
		$this->papar->ms = $this->tanya->ms();

		# Pergi papar kandungan
		$f = array('','sheet1','sheet2','sheet3','sheet4',);
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,$f[$p],$noInclude=1);
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}