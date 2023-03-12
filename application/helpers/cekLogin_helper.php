<?php

// fungsi helper baru untuk cek ada data di session (sudah login) & cek role ketika sudah login
function cek_login()
{
    $ci = get_instance(); // karena $this tidak bisa dipanggil disini, gunakan ini untuk memanggil library CI
    if (!$ci->session->userdata('email')) {
        redirect('auth'); // redirect ke laman login jika tidak ada data disession
    } else {
        $role_id = $ci->session->userdata('role_id'); // ambil data role di session
        $menu = $ci->uri->segment(1); //ambil data nama controller dari url, (1) = controller, (2) = method, (3) = params, seterusnya....

        // query tabel user_menu (dari database), role_id akses tergantung kondisi yg ditetapkan
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array(); // SELECT * FROM user_menu WHERE menu = $menu 
        $menu_id = $queryMenu['id']; // taro idnya aja                                // atau ambil data di database dari dari tabel user_menu yg memiliki value menu sama dengan $menu

        $userAccess = $ci->db->get_where('user_access_menu', [ //SELECT * FROM user_menu WHERE role_id = $role_id AND menu_id = $menu_id
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        } //jika $userAccess ada isi nya dan jumlah baris < 1
    }
}
