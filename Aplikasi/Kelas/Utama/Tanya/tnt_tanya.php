<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Tnt_Tanya extends \Aplikasi\Kitab\Tanya
{
#=================================================================================================
#------------------------------------------------------------------------------------------------#
	public function __construct()
	{
		parent::__construct();
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
	}
#------------------------------------------------------------------------------------------------#
	function data_contoh($pilih)
	{
		$data = array(
			'namaPendek' => 'james007',
			'namaPenuh' => 'Polan Bin Polan',
			'level' => 'pelawat'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
#=================================================================================================
#------------------------------------------------------------------------------------------------#
	public function biodata($pilih=2)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//list($a1,$a2,$a3) = dpt_senarai('TNT_PEGAWAI');
		$data = array(
			'namaPegawai' => 'POLAN BIN POLAN',
			'noKP' => '010203010123',
			'alamatBertugas' => 'UNIT RISIKAN KHAS'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
#=================================================================================================
}
