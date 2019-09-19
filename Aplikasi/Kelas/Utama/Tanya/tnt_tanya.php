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
			'alamatBertugas' => 'UNIT RISIKAN KHAS',
			'noAkaun' => '987456321',
			'namaBank' => 'Maybank',
			'alamatBank' => 'Jalan Kaya Raya',
			'noInvois' => 'URKTNT-09/19-POLAN',
			'noKP' => '010203010123',
			'noPembekal' => '20190103',
			'noGaji' => '5020190103',
			'noTelefon' => '0123456799',
			'email' => 'awak@duduk.mana',
			'gred' => 'N19',
			'kumpulan' => 'SOKONGAN',
			'jawatan' => 'PEMBANTU TADBIR',
			'gajiPokok' => '1234.00',
			'elaun' => '656.00',
			'jumGaji' => '1890.00',
			'kenderaanModel' => '***',
			'kenderaanNoDaftar' => '***',
			'kenderaanKuasa' => '***',
			'kenderaanKelasTuntutan' => '***',
			'alamatPejabat01' => '***',
			'alamatPejabat02' => '***',
			'alamatPejabat03' => '***',
			'alamatPejabat04' => '***',
			'alamatRumah01' => '***',
			'alamatRumah02' => '***',
			'alamatRumah03' => '***',
			'alamatRumah04' => '***',
			//'***' => ''
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
	public function claim($pilih=2)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$data = array(
			'bulan' => date("F"),
			'tahun' => date("Y"),
			'elaunMakan' => '40.00',
			'elaunHarian' => null,
			'b0221101' => '',
			'sewaHotel' => '',
			'loging' => '40.00',
			'servisCaj' => '',
			'b0221102' => '40.00',
			'tambangKeretapi' => '',
			'tambangLRT' => '',
			'b0221103' => '',
			'km' => '',
			'tambangBas' => '',
			'tambangKeretaSewa' => '0',
			'b0221104' => '',
			'tambangKapalBot' => '190.00',
			'b0221105' => '',
			'tambangKapalTerbang' => '',
			'b0221106' => '',
			'elaunKerjaLuar' => '',
			'b0221107' => '',
			'bayaranTol' => null,
			'bayaranParkir' => null,
			'b0221199' => null,
			'bayaranBalikTel' => null,
			'b0223102' => null,
			'elaunTugasMemandu' => null,
			'b0115199' => null,
			'jumClaim' => '100.00'//*/
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
#=================================================================================================
}
