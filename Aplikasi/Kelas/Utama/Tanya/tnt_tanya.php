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
	function harini()
	{
		$key = date('w');
		$days = [
			'ahad',
			'isnin',
			'selasa',
			'rabu',
			'khamis',
			'jumaat',
			'sabtu'
		];
		echo "<hr>hari ini hari " . $days[$key] . "";
	}
#------------------------------------------------------------------------------------------------#
#=================================================================================================
#------------------------------------------------------------------------------------------------#
	public function jenisTuntutan()
	{
		$data = array(
			'Bayaran Tol',
			'Bayaran Parkir',
			'Bayaran Dobi',
			'Bayaran Balik Telefon',
			'Bayaran Pos',
			'Tambang Bas',
			'Tambang Teksi',
			'Tambang Grabcar',
			'Tambang Kereta Terbang',
			'Tambang Keretapi',
			'Tambang Komuter',
			'Tambang ERL',
			'Tambang LRT',
			'Tambang Monoril',
			'Tambang MRT',
			'Tambang Kapal Terbang',
			'Tambang Helikopter',
			'Tambang Kapal Angkasa',
			'Tambang Kapal Laut',
			'Tambang Bot',
			'Tambang Feri',
			'Elaun Loging X RM 40.00',
			'Elaun *Loging X RM 35.00',
			'Elaun Hotel',
			'Servis Caj',
			'Elaun Makan X RM 40.00',
			'Elaun Harian X RM 20.00',
			'Elaun Kerja Luar',
			'Elaun Tugas Memandu'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return $data;
	}
#------------------------------------------------------------------------------------------------#
	public function biodata($pilih=2)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//list($a1,$a2,$a3) = dpt_senarai('TNT_PEGAWAI');
		$data = array(
			# profil
			'namaPegawai' => 'POLAN BIN POLAN',
			'noKP' => '010203010123',
			'gred' => 'N19',
			'kumpulan' => 'SOKONGAN',
			'jawatan' => 'PEMBANTU TADBIR',
			'alamatBertugas' => 'UNIT RISIKAN KHAS',
			'noTelefon' => '0123456799',
			'email' => 'awak@duduk.mana',
			# akaun daa
			'noAkaun' => '987456321',
			'namaBank' => 'Maybank',
			'alamatBank' => 'Jalan Kaya Raya',
			'noPembekal' => 20190103,
			'noGaji' => 5020190103,
			# pendapatan
			'gajiPokok' => 1234.30,
			'elaun' => 656.00,
			'jumGaji' => 1890.10,
			# kenderaan
			'kenderaanModel' => ' Kereta Angkasa ',
			'kenderaanNoDaftar' => ' ############ ',
			'kenderaanKuasa' => ' ############ ',
			'kenderaanKelasTuntutan' => ' ############ ',
			# alamat pejabat
			'alamatPejabat01' => ' ############ ',
			'alamatPejabat02' => ' ############ ',
			'alamatPejabat03' => ' ############ ',
			'alamatPejabat04' => ' ############ ',
			# alamat rumah
			'alamatRumah01' => ' ############ ',
			'alamatRumah02' => ' ############ ',
			'alamatRumah03' => ' ############ ',
			'alamatRumah04' => ' ############ ',
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
			'bulan' => date('F'),
			'tahun' => date('Y'),
			'tarikh' => date('d F Y'),
			'noInvois' => 'URKTNT-' . date('m') . '/' . date('y') . '-POLAN',
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
			'jumKMRM' => '',
			'tambangBas' => '',
			'tambangKeretaSewa' => '85.00',
			'b0221104' => '',
			'tambangKapalBot' => '190.00',
			'b0221105' => '',
			'tambangKapalTerbang' => '',
			'b0221106' => '',
			'elaunKerjaLuar' => '',
			'b0221107' => '',
			'bayaranTol' => '50.00',
			'bayaranParkir' => '8.00',
			'b0221199' => null,
			'bayaranBalikTel' => '23.50',
			'b0223102' => null,
			'elaunTugasMemandu' => null,
			'b0115199' => null,
			'jumClaim' => '100.00',
			# Pergerakan Modul 1GFMAS
			'kodPejabat' => 'UTK-DAA',
			'kodModul' => 'BDP-AP01',
			# ms3 - km
			'km01' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
			'km02' => '',
			'km03' => '',
			'km04' => '',
			'km05' => '',
			'kmRM01' => '',
			'kmRM02' => '',
			'kmRM03' => '',
			'kmRM04' => '',
			# ms3 - tambang awam
			'tambangAwamLain2' => '',
			'jumTambangAwam' => '123.00',
			# ms3 - tuntutan perbagai
			'bayaranDobi' => '0.60',
			'bayaranPos' => '0.60'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
	public function ms($pilih=2)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$t = 'Muka Surat ';
		$ms = 10;
		$data = array(
			'0' => null,
			'1' => "$t 1/$ms",
			'2' => "$t 2/$ms",
			'3' => "$t 3/$ms",
			'4' => "$t 4/$ms",
			'5' => "$t 5/$ms",
			'6' => "$t 6/$ms",
			'7' => "$t 7/$ms",
			'8' => "$t 8/$ms",
			'9' => "$t 9/$ms",
			'10' => "$t 10/$ms",
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
	public function resit($pilih=2)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$t = 'Muka Surat ';
		$ms = 10;
		$data = array(
			'BOOKING CODE' => 'ABC-123456-987',
			'ISSUED ON' => date('D d F Y h:i A'), // Tue 17 Sep 2019 08:50 AM
			'ISSUED BY DRIVER' => 'PEMANDU GRAB 007',
			'ISSUED T0' => 'Amin Ledang',
			'TAG' => 'Personal',
			'REMARKS' => '-',
			'PICK UP LOCATION 1' => 'Jalan Kaya Raya 007',
			'PICK UP LOCATION 2' => 'Muar Johor Malaysia Tercinta',
			'DROP OFF LOCATION 1' => 'MCD Parit Raja Daa',
			'DROP OFF LOCATION 2' => 'Batu Pahat Johor Malaysia Tercinta',
			'Meter Fare' => '85',
			'TOTAL' => 'MYR 85.00',
			'Payment Type' => 'Bitcoin 7539',
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
	public function keterangan()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		//list($idUser,$namaPendek) = $this->tanyaDataSesi();
		$table = dpt_senarai('jadual_nama');
		$t = $table[1];// nama table = t
		$m = '*';// nama medan = m
		$c = $s = $p = null;// carian = c | susun = s | pencam = p
		# semak table
		/*$c[] = array('fix' => 'x=', # cari x= / %like% / xlike
			'atau' => 'WHERE', # WHERE / OR / AND
			'medan' => 'level', # cari dalam medan apa
			'apa' => 'user'); # benda yang dicari//*/
		# pilih pembolehubah = p
		//$p[] = null;
		return array($t, $m, $c, $s, $p); # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
	public function cariKeterangan($apa)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		//list($idUser,$namaPendek) = $this->tanyaDataSesi();
		$table = dpt_senarai('jadual_nama');
		$t = $table[1];// nama table = t
		$m = '*';// nama medan = m
		$c = $s = $p = null;// carian = c | susun = s | pencam = p
		# semak table
		$c[] = array('fix' => ':=', # cari := | :like:
			'atau' => 'WHERE', # WHERE / OR / AND
			'medan' => 'no', # cari dalam medan apa
			'apa' => ':no'); # benda yang dicari//*/
		# pilih pembolehubah = p
		$p['no'] = $apa;
		return array($t, $m, $c, $s, $p); # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------#
#=================================================================================================
}
