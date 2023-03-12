<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // URL Security //
    // mencegah agar user member tidak sembarang bisa akses controller 'user' lewat url browser ketika belum login 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // if (!$this->session->userdata('email')) { //jika tidak ada data controller di session (yg dimana session akan didapat jika kita melakukan login (Auth.php baris) )
        //    redirect('auth');
        // }

        cek_login();
    }
    // end URL Security //
    public function index()
    {
        $data['judul'] = 'My Profile';
        // ambil data dari db sesuai dengan yg ada di session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_footer');
    }

    // METHOD EDIT PROFILE
    public function edit()
    {
        $data['judul'] = 'Edit Profile';
        // ambil data dari db, 1 row diambil dari data yg mengandung value email yg sama dengan data di session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        // $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_footer');
        } else {
            $emailSession = $this->session->userdata('email');
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $country = $this->input->post('country');
            $hometown = $this->input->post('tempat_lahir');
            $address = $this->input->post('address');
            $about = $this->input->post('about');
            $company = $this->input->post('company');
            $job = $this->input->post('job');
            $phone = $this->input->post('phone');
            $website = $this->input->post('website');
            $github = $this->input->post('github');
            $facebook = $this->input->post('facebook');
            $instagram = $this->input->post('instagram');

            // cek jika ada file gambar yg akan di upload
            $upload_image = $_FILES['image']['name'];

            // aturan upload file gambar 
            if ($upload_image) {
                // https://codeigniter.com/userguide3/libraries/file_uploading.html#setting-preferences
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    // menghapus file gambar di folder, jika kita mengganti gambar profile (agar penyimpanan tidak penuh)
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image); //hapus jika gambar sebelumnya bukan pp default
                    }

                    // query ke database di table user (image)
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $new_image = $data['user']['image'];
            }


            // QUERY BUILDER UPDATE KE DB 
            $this->db->set('name', $name);
            $this->db->set('username', $username);
            $this->db->set('image', $new_image); // upload gambar baru
            /* lalu ci sudah otomatis menambahkan auto_increment number di akhir 
               nama file yg disimpan jika kita mengupload file yg sama, makanya ada baris 72*/
            $this->db->set('tgl_lahir', $tgl_lahir);
            $this->db->set('country', $country);
            $this->db->set('tempat_lahir', $hometown);
            $this->db->set('address', $address);
            $this->db->set('about', $about);
            $this->db->set('company', $company);
            $this->db->set('job', $job);
            $this->db->set('phone', $phone);
            $this->db->set('web_link', $website);
            $this->db->set('github_link', $github);
            $this->db->set('fb_link', $facebook);
            $this->db->set('ig_link', $instagram);
            $this->db->where('email', $emailSession);
            $this->db->update('user');

            $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Data Profilemu Telah Terupdate !
                </div>
            ');
            // redirect ke user
            redirect('user');
        }
    }

    public function remove_pp()
    {
        $emailSession = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $old_image = $data['user']['image'];
        unlink(FCPATH . 'assets/img/profile/' . $old_image);
        $this->db->set('image', "default.png");
        $this->db->where('email', $emailSession);
        $this->db->update('user');
        redirect('user');
    }

    public function about()
    {
        $data['judul'] = 'Edit Profile';
        // ambil data dari db, 1 row diambil dari data yg mengandung value email yg sama dengan data di session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/home_header', $data);
        $this->load->view('user/about', $data);
        $this->load->view('templates/home_sidebar', $data);
        $this->load->view('templates/home_footer');
    }
}
