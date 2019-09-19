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
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
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
	public function index($a='TNT')
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		//$this->papar->Tajuk_Muka_Surat = $a;

		# Pergi papar kandungan
		$this->paparHeader('tnt/biodata');
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
##------------------------------------------------------------------------------------------
#==========================================================================================
#------------------------------------------------------------------------------------------
	public function biodata($a=null)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = $a;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
#------------------------------------------------------------------------------------------
	public function cetak($p=1)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'Cetak';
		$this->papar->biodata = $this->tanya->biodata();
		$this->papar->claim = $this->tanya->claim();

		# Pergi papar kandungan
		$f = array('','sheet1','sheet2','sheet3','sheet4',);
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,$f[$p],$noInclude=1);
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
