<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home Page';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar', $data);
        $this->load->view('home/index');
        $this->load->view('templates/home_footer');
    }

    public function explore()
    {

        // $hostname = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "devwork_polardb";

        // $conn = mysqli_connect($hostname, $username, $password, $dbname);
        // if (!$conn) {
        //     echo "Database connection error" . mysqli_connect_error();
        // }

        $data['judul'] = 'Explore Page';
        // if ($this->uri->segment(2) == 'explore' || $this->uri->segment(3) == '') {
        //     $data['category'] = "";
        // } else if (isset($_GET)) {
        //     $data['category'] = $_GET['category'];
        // }
        $data['category'] = $_GET['category'];
        // ambil data dari db sesuai dengan yg ada di session
        $data['user'] = $this->db->get_where('user_post', ['email' => $this->session->userdata('email')])->row_array();


        // $outgoing_id = $_SESSION['unique_id'];
        // $sql = "SELECT * FROM user WHERE NOT unique_id = $outgoing_id ORDER BY id DESC";
        // $query = mysqli_query($conn, $sql);
        // $data['click_data'] = mysqli_fetch_assoc($query);
        // var_dump($data);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar', $data);
        $this->load->view('home/explore', $data);
        $this->load->view('templates/home_footer');
    }
}
