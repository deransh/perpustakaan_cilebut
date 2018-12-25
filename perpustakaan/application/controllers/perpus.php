<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Perpus extends CI_Controller {
function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('user_model');
    } 
     public function index(){ 
        $this->load->view('index');
    } 
     public function loginn(){
        $this->load->view('login');
    } 
    function proses(){
         $user_name = $this->input->post('user_name');
         $password = $this->input->post('password');
         if ($this->user_model->cek_login($user_name, $password)== TRUE)
         {  
             $this->session->set_flashdata('message','Selamat Datang Admin');
             redirect('perpus/home');
         }else{
              $this->session->set_flashdata('message','Login Gagal!Email atau Password Tidak Terdaftar');
              redirect('perpus/loginn');
         }}
    public function home()
    {   $this->load->model('user_model');
        $data['buku'] = $this->user_model->book()->result();
        $this->load->view('home',$data);
    }
  
     public function forgot_password()
    {
        $this->load->view('forgot_password');
    }
    
     public function table(){
        $this->load->model('user_model');
        $data['v_userpinjam'] = $this->user_model->list_table()->result();
        $this->load->view('table',$data);
    } 
    public function calon_member(){
        $this->load->model('user_model');
        $data['member'] = $this->user_model->member()->result();
        $this->load->view('member',$data);
    } 
   
   public function book(){
        $this->load->model('user_model');
        $data['buku'] = $this->user_model->book()->result();
        $this->load->view('buku',$data);
    }

    public function tambah_book()
    {
        $this->load->view('tambah_book');
    }

    public function simpan_book()
    {
        $data = array(
            'kd_buku'                => $this->input->post("kd_buku"),  
            'judul'                  => $this->input->post("judul"),
            'pengarang'              => $this->input->post("pengarang"),
            'penerbit'                => $this->input->post("penerbit"),
            'stok'                    => $this->input->post("stok"),
            'th_terbit'               => $this->input->post("th_terbit"),
            'id_kategori'             => $this->input->post("id_kategori")
            
        );

        $this->user_model->simpan_book($data);

        redirect('perpus/book');

    }

    public function edit_buku($kd_buku)
    {
        $kd_buku = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Buku',
            'buku'      => $this->user_model->rubah_buku($kd_buku)

        );

        $this->load->view('ubah_buku', $data);
    }
    public function update_buku()
    {
        $id['kd_buku'] = $this->input->post("kd_buku");
        $data = array(
            'judul'                   => $this->input->post("judul"),
            'pengarang'               => $this->input->post("pengarang"),
            'penerbit'                => $this->input->post("penerbit"),
            'stok'                    => $this->input->post("stok"),
            'th_terbit'               => $this->input->post("th_terbit"),
            'id_kategori'             => $this->input->post("id_kategori")
            
        );

        $this->user_model->update_buku($data, $id);
        redirect('perpus/book');

    }

    public function hapus_buku($kd_buku)
  {
    $id['kd_buku'] = $this->uri->segment(3);
    
    $this->user_model->hapus_buku($id);

    redirect('perpus/book');
  }    

     public function data_anggota(){
        $this->load->model('user_model');
        $data['anggota'] = $this->user_model->list_anggota()->result();
        $this->load->view('anggota',$data);
        }
     public function tambah_anggota()
    {

        $this->load->view('tambah_anggota');
    }
     public function simpan_anggota()
    {
        $data = array(
            'id_anggota'           => $this->input->post("id_anggota"),  
            'nik'                  => $this->input->post("nik"),
            'nama'                 => $this->input->post("nama"),
            'no_hp'                => $this->input->post("no_hp"),
            'email'                => $this->input->post("email"),
            'alamat'               => $this->input->post("alamat")
            
        );

        $this->user_model->simpan_anggota($data);

        redirect('perpus/data_anggota');

    }

    public function edit_anggota($id_anggota)
    {
        $id_anggota = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Buku',
            'anggota'      => $this->user_model->rubah_anggota($id_anggota)

        );

        $this->load->view('ubah_anggota', $data);
    }
    public function update_anggota()
    {
        $id['id_anggota'] = $this->uri->segment(3);
        $data = array(
            'nik'                  => $this->input->post("nik"),
            'nama'                 => $this->input->post("nama"),
            'no_hp'                => $this->input->post("no_hp"),
            'email'                => $this->input->post("email"),
            'alamat'               => $this->input->post("alamat")
            
        );
        $this->user_model->update_anggota($data,$id);
        redirect('perpus/data_anggota');

    }

    public function hapus_anggota($id_anggota)
  {
    $id['id_anggota'] = $this->uri->segment(3);
    
    $this->user_model->hapus_anggota($id);

    redirect('perpus/data_anggota');
  }    


    function member()
    {           
         $this->form_validation->set_rules('nik', 'Nik', 'required|max_length[20]');   
         $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[40]'); 
         $this->form_validation->set_rules('no_hp', 'No_hp', 'required|max_length[20]');                  
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');         
         $this->form_validation->set_rules('alamat', 'Alamat', 'required|max_length[80]');  
        
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
 
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('index');
        }
        else
        {
 
            $form_data = array(
                            'nik' => set_value('nik'),
                            'nama' => set_value('nama'),
                            'no_hp' => set_value('no_hp'),
                            'email' => set_value('email'),
                            'alamat' => set_value('alamat')
                        );
 
            if ($this->user_model->SaveForm($form_data) == TRUE) 
            {
                $this->session->set_flashdata('message','Selamat Proses Pendaftaran Anda Berhasil');
                redirect('perpus');
            }
            else
            {
            $this->session->set_flashdata('message','Pendaftaran Gagal Data Anda Tidak Sesuai');
            redirect('perpus');
            }
        }
 } 

 public function hapus_member($id_member)
  {
    $id['id_member'] = $this->uri->segment(3);
    
    $this->user_model->hapus_calon($id);


    redirect('perpus/calon_member');

  }	
   public function ambil_member($id_member)
  {
    $this->load->model('user_model');
    $id_member = $this->uri->segment(3);
    $this->user_model->terima_member($id_member);

    if ($this->user_model->terima_member($id_member,$query) == FALSE) 
            {
                $this->session->set_flashdata('message','Member Berhasil Menjadi Anggota ');
                redirect('perpus/calon_member');
            }
            else
            {
            $this->session->set_flashdata('message','Data Member Salah');
            redirect('perpus/calon_member');
            }
  } 	
    public function pinjam(){
        $this->load->model('user_model');
        $data['pinjam'] = $this->user_model->list_pinjam()->result();
        $this->load->view('pinjam',$data);
    } 
    public function tambah_pinjam()
    {

        $this->load->view('tambah_pinjam');
    }

    public function simpan_pinjam()
    {
        $data = array(
            'kd_transaksi'            => $this->input->post("kd_transaksi"),  
            'id_anggota'              => $this->input->post("id_anggota"),
            'kd_buku'                 => $this->input->post("kd_buku"),
            'tanggal_pinjam'          => $this->input->post("tanggal_pinjam"),
            'tanggal_kembali'         => $this->input->post("tanggal_kembali"),
            'jml_pinjam'              => $this->input->post("jml_pinjam")
            
        );

        $this->user_model->simpan_pinjam($data);

        redirect('perpus/pinjam');

    }

    public function edit_pinjam($kd_transaksi)
    {
        $kd_transaksi = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit pinjam',
            'pinjam'      => $this->user_model->rubah_pinjam($kd_transaksi)

        );

        $this->load->view('ubah_pinjam', $data);
    }
    public function update_pinjam()
    {
        $id['kd_transaksi'] = $this->input->post("kd_transaksi");
        $data = array(
            'id_anggota'              => $this->input->post("id_anggota"),
            'kd_buku'                 => $this->input->post("kd_buku"),
            'tanggal_pinjam'          => $this->input->post("tanggal_pinjam"),
            'tanggal_kembali'         => $this->input->post("tanggal_kembali"),
            'jml_pinjam'              => $this->input->post("jml_pinjam")
            
        );

        $this->user_model->update_pinjam($data, $id);
        redirect('perpus/pinjam');

    }

    public function hapus_pinjam($kd_transaksi)
  {
    $id['kd_transaksi'] = $this->uri->segment(3);
    
    $this->user_model->hapus_pinjam($id);

    redirect('perpus/pinjam');
  }    

   public function v_denda(){
        $this->load->model('user_model');
        $data['v_denda'] = $this->user_model->list_denda()->result();
        $this->load->view('view_denda',$data);
    } 

    public function hapus_denda($kd_transaksi)
  {
    $id['kd_transaksi'] = $this->uri->segment(3);
    
    $this->user_model->hapus_pinjam($id);

    redirect('perpus/v_denda');
  }    

    public function pengembalian(){
        $this->load->model('user_model');
        $data['pinjam'] = $this->user_model->list_pinjam()->result();
        $this->load->view('v_pengembalian',$data);
    } 
    public function edit_pengembalian($kd_transaksi)
    {
        $kd_transaksi = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit pengembalian',
            'pinjam'      => $this->user_model->rubah_pinjam($kd_transaksi)

        );

        $this->load->view('ubah_pengembalian', $data);
    }
    public function update_pengembalian()
    {
        $id['kd_transaksi'] = $this->input->post("kd_transaksi");
        $data = array(
            'id_anggota'              => $this->input->post("id_anggota"),
            'kd_buku'                 => $this->input->post("kd_buku"),
            'tanggal_pinjam'          => $this->input->post("tanggal_pinjam"),
            'tanggal_kembali'         => $this->input->post("tanggal_kembali"),
            'jml_pinjam'              => $this->input->post("jml_pinjam"),
            'tgl_pengembalian'        => $this->input->post("tgl_pengembalian"),
            'kd_denda'                => $this->input->post("kd_denda")
            
        );

        $this->user_model->update_pinjam($data, $id);
        redirect('perpus/pengembalian');

    }

    public function hapus_pengembalian($kd_transaksi)
  {
    $id['kd_transaksi'] = $this->uri->segment(3);
    
    $this->user_model->hapus_pengembalian($id);

    redirect('perpus/pengembalian');
  }    
 }
	