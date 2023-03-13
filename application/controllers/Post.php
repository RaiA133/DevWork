<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Post Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar', $data);
        $this->load->view('post/index');
        $this->load->view('templates/home_footer', $data);
    }

    public function create()
    {

        //SELECT * FROM user WHERE email='email';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data['user']);
        // echo date('Y-m-d H:i:s');
        // echo '</br>';
        // echo getHostByName(getHostName());
        // echo '</br>';
        // echo date('Y-m-d H:i:s', time() + (60 * 60 * 6));
        // $url = "https://api.ip2location.io/?key=A8B32F51F112C1F17FE223E7C43CBD19&ip=51.79.160.171";
        // $json_timezone = file_get_contents($url);
        // print_r($json_timezone);
        // die;

        // cek jika ada file gambar yg akan di upload
        $upload_image = $_FILES['post_thumb']['name'];

        // aturan upload file gambar 
        if ($upload_image) {
            // https://codeigniter.com/userguide3/libraries/file_uploading.html#setting-preferences
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path']   = './assets/img/post/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('post_thumb')) {

                // query ke database di table user (image)
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $new_image = "default.jpg";
        }

        $query = [
            // 'field' => 'form_name'
            'nama' => $data['user']['name'], // true = untuk mengidari xss / cross site scripting
            'username' => $data['user']['username'],
            'email' => $data['user']['email'],
            'image' => $data['user']['image'],
            'date_posted' => time() + (60 * 60 * 6), //indonesia timezone        ];
            'post_title' => htmlspecialchars($this->input->post('post_title')),
            'post_category' => htmlspecialchars($this->input->post('post_category')),
            'post_desc' => $this->input->post('post_desc'),
            'post_thumb' => $new_image,
            'post_tags' => htmlspecialchars($this->input->post('post_tags')),
            'post_days' => htmlspecialchars($this->input->post('post_days')),
            'post_pricing' => htmlspecialchars($this->input->post('post_pricing'))
        ];

        // var_dump($query);
        // var_dump($_FILES);
        // die;


        // insert ke database
        $this->db->insert('user_post', $query);
        // pemberitahuan keberhasilan pendaftaran
        $this->session->set_flashdata('message', '
             <div class="alert alert-success" role="alert">
                 Registration Successful!, Please Login
             </div>
         ');

        $this->db->set('unique_id', $data['user']['unique_id']);
        $this->db->where('email', $query['email']);                     // update unique_id to user_post
        $this->db->update('user_post');

        // redirect ke login
        redirect('home/explore?category');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Posted Page';
        $data['user_post'] = $this->db->get_where('user_post', ['id' => $id])->row_array();
        // var_dump($data);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar');
        $this->load->view('post/edit');
        $this->load->view('templates/home_footer');
    }

    public function push_edit($id)
    {
        $data['user_post'] = $this->db->get_where('user_post', ['id' => $id])->row_array();

        $post_title = $this->input->post('post_title');
        $post_desc = $this->input->post('post_desc');
        $category = $this->input->post('post_category');
        $tags = $this->input->post('post_tags');
        $days = $this->input->post('post_days');
        $pricing = $this->input->post('post_pricing');

        // var_dump($data);
        // var_dump($_FILES);
        // die;

        // cek jika ada file gambar yg akan di upload
        $upload_image = $_FILES['post_thumb']['name'];

        // aturan upload file gambar 
        if ($upload_image) {
            // https://codeigniter.com/userguide3/libraries/file_uploading.html#setting-preferences
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path']   = './assets/img/post/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('post_thumb')) {

                // menghapus file gambar di folder, jika kita mengganti gambar profile (agar penyimpanan tidak penuh)
                $old_image = $data['user_post']['post_thumb'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/post/' . $old_image); //hapus jika gambar sebelumnya bukan pp default
                }
                // query ke database di table user (image)
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $new_image = $data['user_post']['post_thumb'];
        }


        // QUERY BUILDER UPDATE KE DB 
        $this->db->set('post_title', $post_title);
        $this->db->set('post_desc', $post_desc);
        $this->db->set('post_thumb', $new_image); // upload thumb baru
        /* lalu ci sudah otomatis menambahkan auto_increment number di akhir 
               nama file yg disimpan jika kita mengupload file yg sama, makanya ada baris 72*/
        $this->db->set('date_posted', time() + (60 * 60 * 6) . "(Modified)");
        $this->db->set('post_category', $category);
        $this->db->set('post_tags', $tags);
        $this->db->set('post_days', $days);
        $this->db->set('post_pricing', $pricing);
        $this->db->where('id', $id);
        $this->db->update('user_post');

        // redirect ke user
        redirect('post/list');
    }

    public function delete_post($id)
    {
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $old_image = $data['user']['image'];
        if ($old_image == "default.png") {
            $this->db->delete('user_post', ['id' => $id]);
            redirect('post/list');
        } else {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
            $this->db->delete('user_post', ['id' => $id]);
            redirect('post/list');
        }
    }

    public function list()
    {
        $data['judul'] = 'List Posted Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar');
        $this->load->view('post/list_post');
        $this->load->view('templates/home_footer');
    }
    public function remove_thumb($id)
    {
        $data['user'] = $this->db->get_where('user_post', ['id' => $id])->result_array();
        $old_thumb = $data['user']['post_thumb'];
        unlink(FCPATH . 'assets/img/post/' . $old_thumb);
        $this->db->set('post_thumb', "default.jpg");
        $this->db->where('id', $id);
        $this->db->update('user');
        redirect('user');
    }
}
