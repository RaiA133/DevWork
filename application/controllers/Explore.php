<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Explore extends CI_Controller
{
    public function search()
    {
        $this->load->view('liveChat/php/search');
    }
    public function chat()
    {
        $this->load->view('liveChat/header');
        $this->load->view('liveChat/chat');
    }
    public function users()
    {
        $this->load->view('liveChat/php/users');
    }
    public function insertChat()
    {
        $this->load->view('liveChat/php/insert-chat');
    }
    public function getChat()
    {
        $this->load->view('liveChat/php/get-chat');
    }
    public function messages()
    {
        $data['judul'] = 'Messages Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/home_header', $data);
        // $this->load->view('liveChat/header', $data);
        $this->load->view('liveChat/user', $data);
        $this->load->view('templates/home_sidebar', $data);
        $this->load->view('templates/home_footer', $data);
    }
}
