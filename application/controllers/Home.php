<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
        
		$this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
        $data = array(
            'judul' => "Beranda | Setya",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten,
        );
		$this->load->view('beranda', $data);
	}
    
	public function kategori($id){
		$this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array();

        $this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;

        $data = array(
            'judul' => $nama_kategori." | Setya",
            'nama_kategori' => $nama_kategori,
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
        );

		$this->load->view('kategori', $data);
	}

    public function artikel($id) {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();
        $data = array(
            'judul' => $konten->judul." | Setya",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
        );
        $this->load->view('detail', $data);
    }
    public function search()
    {
        // Ambil keyword dari input form
        $keyword = $this->input->post('keyword');

        // Query pencarian dari database
            $this->db->from('konten a');
            $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
            $this->db->like('a.judul', $keyword); // Cari berdasarkan judul
            $this->db->or_like('b.nama_kategori', $keyword); // Cari berdasarkan nama kategori
            $konten = $this->db->get()->row();
            $this->db->from('konfigurasi');
		    $konfig = $this->db->get()->row();
        
            $this->db->from('kategori');
            $kategori = $this->db->get()->result_array();

            $cari = $konten;

        if($cari <> null ){
            $this->db->from('konten a');
            $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
            $this->db->like('a.judul', $keyword); // Cari berdasarkan judul
            $this->db->or_like('b.nama_kategori', $keyword); // Cari berdasarkan nama kategori
            $konten = $this->db->get()->row();
            $this->db->from('konfigurasi');
		    $konfig = $this->db->get()->row();
        
            $this->db->from('kategori');
            $kategori = $this->db->get()->result_array();
        
            // Data yang dikirim ke view
            $data = array(
                'judul_halaman' => 'Hasil Pencarian',
                'konten' => $konten,
                'kategori' => $kategori,
                'keyword' => $keyword,
                'konfig' => $konfig,
            );
        
            // Load view dan kirim data
            $this->load->view('detail', $data);
        }   else {
            $this->session->set_flashdata('alert','                    
            <div class="alert alert-dark alert-dismissible mb-0" role="alert">
	    	Berhasil memperbarui konten
		    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		    </div>'
            );
            
            redirect($_SERVER['HTTP_REFERER']);
        }

        // $this->db->from('konfigurasi');
		// $konfig = $this->db->get()->row();
        
        
        // $this->db->from('kategori');
        // $kategori = $this->db->get()->result_array();
    
        // // Data yang dikirim ke view
        // $data = array(
        //     'judul_halaman' => 'Hasil Pencarian',
        //     'konten' => $konten,
        //     'kategori' => $kategori,
        //     'keyword' => $keyword,
        //     'konfig' => $konfig,
        // );
    
        // // Load view dan kirim data
        // $this->load->view('detail', $data);
    }
}
