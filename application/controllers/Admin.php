<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // URL Security //
    // mencegah agar user member tidak sembarang bisa akses controller 'admin' lewat url browser ketika belum login 
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('email')) { //jika tidak ada data controller di session (yg dimana session akan didapat jika kita melakukan login (Auth.php baris) )
        //    redirect('auth');
        // }

        // function helper baru (fungsi yg kita buat sendiri tapi bisa dipanggil dimanapun)
        // cek keadaan data session & role dari data session
        cek_login();
    }
    // end URL Security //
    public function index()
    {
        $data['judul'] = 'Administrator';
        // ambil data dari db sesuai dengan yg ada di session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_footer');
    }
    public function hapus($id)
    {
        $this->db->delete('user', ['id' => $id]);
        redirect('admin');
    }
}
