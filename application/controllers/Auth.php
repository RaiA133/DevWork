<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // SAAT SUDAH LOGIN jika url diubah ke auth akan kembali kemenu user (harus klik tombol logout)
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        // FORM LOGIN RULES //
        $this->form_validation->set_rules('loginEmail', 'loginEmail', 'required|trim|valid_email', [
            'valid_email' => '<i>Penulisan Masih Email Salah</i>',
        ]);
        $this->form_validation->set_rules('loginPassword', 'loginPassword', 'required|trim');
        // end FORM LOGIN RULES //
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Login';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            //validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('loginEmail');
        $password = $this->input->post('loginPassword');


        //SELECT * FROM user WHERE email='email';
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // check apakah ada data user di database
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                //Cek Password
                if (password_verify($password, $user['password'])) // pencocokan password yg diketik di login-form dengan di hash
                {
                    $data = [
                        'email' => $user['email'],              // SESSION
                        'role_id' => $user['role_id'],
                        'unique_id' => $user['unique_id']
                    ];
                    //masukan $data ke sesion (data akan masuk hanya jika melakukan login)
                    $this->session->set_userdata($data);

                    $_SESSION['unique_id'] = $this->session->userdata('unique_id');

                    // UPDATE status jadi Online Now saat LOGIN
                    $emailSession = $this->session->userdata('email');
                    $this->db->set('status', "Online Now");
                    $this->db->where('email', $emailSession);
                    $this->db->update('user');

                    // cek admin atau bukan
                    if ($user['role_id'] == 1) {
                        include_once 'http://localhost/devwork/vendors/liveChat/php/login.php';
                        redirect('home');
                    } else {
                        include_once 'http://localhost/devwork/vendors/liveChat/php/login.php';
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', "
                    <div class='alert alert-danger' role='alert'>
                        Wrong Password !
                    </div>");
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', "
                <div class='alert alert-danger' role='alert'>
                    This Email Has Not Been Activated
                </div>");
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', "
                <div class='alert alert-danger' role='alert'>
                    Registration Failed!, Email Not Registered
                </div>");
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }


        // FORM REGISTRASI RULES //

        // pengecekan isi form. 
        // required = artinya jika tidak di isi akan false.
        // trim = space di akhir dan awal inputan akan di hiraukan
        // valid_email = untuk 
        // is_unique[user.email] = untuk pengecekan apakah email sudah ada di table dalam database
        // min_length = jumlah digit minimal inputan di form
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('registerEmail', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => "<i>Email Is Registered</i>"
        ]);
        $this->form_validation->set_rules('registerPassword1', 'Password', 'required|trim|min_length[6]|matches[registerPassword2]', [
            'matches' => "<i>Unmatched Passwords</i>",
            'min_length' => "<i>Password is too short, 6 characters minimum</i>",
            'required' => "<i>Password Required</i>"
        ]);
        $this->form_validation->set_rules('registerPassword2', 'repeatePassword', 'required|trim|matches[registerPassword1]');

        // end FORM REGISTRASI RULES//



        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Register';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/Registration');
            $this->load->view('templates/footer');
        } else {

            // taruh semua data value form register ke $data
            $data = [
                // 'field' => 'form_name'
                'unique_id' => rand(time(), 100000000),
                'name' => htmlspecialchars($this->input->post('name', true)), // true = untuk mengidari xss / cross site scripting
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('registerEmail')),
                'image' => 'default.png', //default data
                'password' => password_hash($this->input->post('registerPassword1'), PASSWORD_DEFAULT),
                'tgl_lahir' => 'Belum isi',
                'tempat_lahir' => 'Belum isi',
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time() + (60 * 60 * 6), //indonesia timezone
                'status' => 'Offline Now'
            ];

            // insert ke database
            $this->db->insert('user', $data);

            // pemberitahuan keberhasilan pendaftaran
            $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Registration Successful!, Please Login
                </div>
            ');

            // redirect ke login
            redirect('auth');
        }
    }

    // LOGOUT
    public function logout()
    {
        $emailSession = $this->session->userdata('email');
        $this->db->set('status', "Offline Now");
        $this->db->where('email', $emailSession);
        $this->db->update('user');

        // membersihkan $data dari session
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_data');
        $this->session->unset_userdata('unique_id');

        session_unset();
        session_destroy();

        $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
                You Have Been Logged Out!
            </div>
        ');
        // redirect ke login
        include_once 'http://localhost/devwork/vendors/liveChat/php/logout.php';
        redirect('auth');
    }

    // JIKA KITA MENCOBA MELANGGAR URL (dari helper baru)
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}

// $auth = new Auth;
// $auth->_login();

// echo Auth::index();
