<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Index_Tanya extends \Aplikasi\Kitab\Tanya
{
#==========================================================================================
#------------------------------------------------------------------------------------------#
	public function __construct()
	{
		parent::__construct();
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
	}
#------------------------------------------------------------------------------------------#
	function data_contoh($pilih)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data = array(
			'namaPendek' => 'james007',
			'namaPenuh' => 'Polan Bin Polan',
			'level' => 'pelawat'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------#
#------------------------------------------------------------------------------------------#
#==========================================================================================
}
