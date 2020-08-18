<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_daftar_iklan;

class c_iklan extends BaseController
{
	protected $iklan_model;

	public function __construct()
	{
		$this->iklan_model = new m_daftar_iklan();
	}

	public function home()
	{

		//return view('welcome_message');
		$data['judul_halaman'] = 'Beranda';
		$data['tab_aktif'] = 'Beranda';
		echo view('v_head', $data);
		echo view('v_header', $data);
		echo view('vh_conhome');
		echo view('v_footer');
		echo view('v_js');
	}

	public function category($kategori_terpilih)
	{
		$tampil_cari = "display:block !important;";
		$intro_hasil = "Kategori : ";

		if ($kategori_terpilih == "seputar-kuliner"){
			$kategori = "Seputar Kuliner";
		}
		elseif ($kategori_terpilih == 'pakaian'){
			$kategori = "Pakaian";
		}
		elseif ($kategori_terpilih == 'elektronik'){
			$kategori = "Elektronik";
		}
		elseif ($kategori_terpilih == 'bahan-bangunan'){
			$kategori = "Bahan Bangunan";
		}
		elseif ($kategori_terpilih == 'otomotif'){
			$kategori = "Otomotif";
		}
		elseif ($kategori_terpilih == 'rumah-tangga'){
			$kategori = "Rumah Tangga";
		}
		elseif ($kategori_terpilih == 'barang-lainnya'){
			$kategori = "Barang Lainnya";
		}
		elseif ($kategori_terpilih == 'jasa'){
			$kategori = "Jasa";
		}

		$hasil_cari = $kategori;
		$iklan_tampil = $this->iklan_model->ambil_kategori($kategori);

		$data=[	'judul_halaman' => 'Daftar Iklan',
				'tab_aktif' => 'Daftar Iklan',
				'iklan_tampil' => $iklan_tampil->paginate(16, 'iklan_model'),
				'pager' => $this->iklan_model->pager,
				'hasil_cari' => $hasil_cari,
				'tampil_cari' => $tampil_cari,
				'intro_hasil' => $intro_hasil,
		];

		echo view('v_head', $data);
		echo view('v_header', $data);
		echo view('v_breadcrumb', $data);
		echo view('vc_concategory', $data);
		echo view('vc_all_ads', $data);
		echo view('v_footer');
		echo view('v_js');
	}

	public function all_ads()
	{

		$kata_kunci = $this->request->getVar('kata_kunci');
		$hasil_cari = "";
		$intro_hasil = "";

		if ($kata_kunci) {
			$iklan_tampil = $this->iklan_model->cari($kata_kunci);
			$tampil_cari = "display:block !important;";
			$hasil_cari = $kata_kunci;
		} 
		else
		{
			$iklan_tampil = $this->iklan_model;
			$tampil_cari = "display:none !important;";
		}

		// $status_wa = $this->iklan_model->wa_status($indeks)->row();
		// if ($status_wa->status_wa == 'Terdaftar') {
		// 	$tombol_aksi = '<button class="btn btn-success icon tombol-aksi-kategori" style="font-weight: bold;" href="https://api.whatsapp.com/?send='.$telp.'"> <i class="fa fa-whatsapp"></i> Hubungi</button>';
		// }
		// else {
		// 	$tombol_aksi = '<button class="btn btn-warning icon tombol-aksi-kategori" style="font-weight: bold;" href="'.$telp.'"> <i class="fa fa-phone"></i> Hubungi</button>';
		// }

		$data=[	'iklan_tampil' => $iklan_tampil->paginate(16, 'iklan_model'),
				'pager' => $this->iklan_model->pager,
				'judul_halaman' => 'Daftar Iklan',
				'tab_aktif' => 'Daftar Iklan',
				'hasil_cari' => $hasil_cari,
				'tampil_cari' => $tampil_cari,
				'intro_hasil' => $intro_hasil,
				// 'tombol_aksi' => $tombol_aksi
		];

		echo view('v_head', $data);
		echo view('v_header', $data);
		echo view('v_breadcrumb', $data);
		echo view('vc_concategory', $data);
		echo view('vc_all_ads', $data);
		echo view('v_footer');
		echo view('v_js');
	}

	//--------------------------------------------------------------------

	public function detail($slug = null){
        $data=[	'detail' => $this->iklan_model->rinci_iklan($slug)->getRow(),
        		'judul_halaman' => 'Iklan',
        		'tab_aktif' => 'Daftar Panduan'
        ];

        if(empty($data['detail'])) {
        	throw new \CodeIgniter\Exceptions\PageNotFoundException('Iklan tidak ditemukan.');
        }

		echo view('v_head', $data);
		echo view('v_header', $data);
		echo view('v_breadcrumb', $data);
		echo view('vc_concategory');
		echo view('v_detail');
		echo view('v_footer');
		echo view('v_js');
	}

	public function add_ads()
	{
		$data=[	'judul_halaman' => 'Pasang Iklan',
				'tab_aktif' => 'Pasang Iklan',
				'validation' => \Config\Services::validation()
		];
		echo view('v_head', $data);
		echo view('v_header', $data);
		echo view('v_breadcrumb', $data);
		echo view('vc_concategory');
		echo view('vc_add_ads');
		echo view('v_footer');
		echo view('v_js');
	}

	public function save_ads()
	{
		if (!$this->validate([
			'judul' => [
				'rules' => 'required|is_unique[daftar_iklan.judul]',
				'errors' => [
					'required' => 'Maaf, {field} iklan tidak boleh kosong.',
					'is_unique' => 'Maaf, {field} iklan yang dimasukkan sudah terdaftar.'
				]
			],
			'kategori' => [
				'rules' => 'required[daftar_iklan.kategori]',
				'errors' => [
					'required' => 'Maaf, {field} iklan tidak boleh kosong.'
				]
			],
			'deskripsi' => [
				'rules' => 'required[daftar_iklan.deskripsi]',
				'errors' => [
					'required' => 'Maaf, {field} iklan tidak boleh kosong.'
				]
			],
			'nama' => [
				'rules' => 'required[daftar_iklan.nama]',
				'errors' => [
					'required' => 'Maaf, {field} pengiklan tidak boleh kosong.'
				]
			],
			'telp' => [
				'rules' => 'required[daftar_iklan.telp]',
				'errors' => [
					'required' => 'Maaf, nomor telepon pengiklan tidak boleh kosong.'
				]
			],
			'status_wa' => [
				'rules' => 'required[daftar_iklan.status_wa]',
				'errors' => [
					'required' => 'Maaf, anda belum memilih status nomor telepon anda.'
				]
			],
			'gambar' => [
				'rules' => 'max_size[gambar,4096]|is_image[gambar]|ext_in[gambar,jpg,jpeg,png]',
				'errors' => [
					'max_size' => 'Maaf, ukuran file yang anda unggah terlalu besar.',
					'is_image' => 'Maaf, file yang anda unggah bukan gambar.',
					'ext_in' => 'Maaf, format file yang anda unggah tidak didukung.'
				]
			]
		])) {
			// $validation = \Config\Services::validation();
			return redirect()->to(base_url('pasang-iklan'))->withInput();//->with('validation', $validation)
		}

  //       $this->iklan_model->save([
  //           'indeks'  => $time_stamp,
  //           'kategori' => $this->request->getVar('kategori'),
  //           'judul'  => $this->request->getVar('judul'),
  //           'deskripsi' => $this->request->getVar('deskripsi'),
  //           'nama'  => $this->request->getVar('nama'),
  //           'telp' => $this->request->getVar('telp'),
  //           'status_wa'  => $this->request->getVar('status_wa'),
  //           'gambar' => $this->request->getVar('gambar'),
		// 	'status_terbit'  => "Belum Terbit"
  //       ]);
  //       return redirect()->to(base_url('semua-iklan'));
		$judul = $this->request->getPost('judul');
		date_default_timezone_set("Asia/Jakarta");
		$time_stamp = date('YmdHis');
		$slug = url_title($this->request->getVar('judul'), '-', true);

		$file_gambar = $this->request->getFile('gambar');

		if ($file_gambar->getError() == 4) {
			$nama_gambar = 'default.jpg';
		} 
		else {
			$nama_gambar = $file_gambar->getRandomName();
			$file_gambar->move('public/gambar', $nama_gambar);
		}

        $data = [
            'indeks'  => $time_stamp,
            'kategori' => $this->request->getPost('kategori'),
            'judul'  => $judul,
            'slug' => $slug,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'nama'  => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'status_wa'  => $this->request->getPost('status_wa'),
            'gambar' => $nama_gambar,
			'status_terbit'  => "Belum Terbit",
        ];
        
        $this->iklan_model->insert($data);

        session()->setFlashdata('pesan', 'Iklan <strong>"'.$judul.'"</strong> berhasil diajukan. <br>Status penerbitan iklan akan diberitahukan ke nomor terdaftar dalam <strong>24 jam</strong>. <br>Jika ada yang ingin ditanyakan, silahkan hubungi admin melalui tombol <strong>kritik & saran</strong>.');

        return redirect()->to(base_url('semua-iklan'));
	}

}
