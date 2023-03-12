<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- QUERY NAMA MENU tergantung Role User | JOINT TABLE -->
        <?php
        // di user_menu pilih id role menu dan nama menunya
        // join ke user_access_menu (hak admin & member)
        // di user_memu Primary Key : id, di role_id foreign key : menu_id
        // dimana role_id sesuai dengan data yg ada di session, ketika kita masih login
        // urutkan menurun berdasarkan menu_id
        $role_id = $this->session->userdata('role_id');
        $queryMenu = " SELECT `user_menu`.`id`, `menu`
                         FROM `user_menu` JOIN `user_access_menu` 
                           ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` =  $role_id
                     ORDER BY `user_access_menu`.`menu_id` ASC
                     ";
        //QUERY
        $menu = $this->db->query($queryMenu)->result_array();
        // var_dump($menu); die; // untuk cek (jika ADMIN : akan ada data "Admin" & "User", jika MEMBER hanya "User")
        ?>

        <!-- LOOPING MENU dari JOIN TABLE diatas -->
        <?php foreach ($menu as $m) : ?>



            <li class="nav-heading"><?= $m['menu']; ?></li>

            <!-- SUB-MENU sesuai Menu Utama -->
            <?php
            // menampilkan semua data yg join ke table
            // dari table user_sub_menu yg join user_menu
            // dimana foreign key yaitu id dari user_sub_menu
            $menu_id = $m['id'];
            $querySubMenu = " SELECT * FROM `user_sub_menu`
                               WHERE `menu_id` = $menu_id
                                 AND `is_active` = 1
                            ";
            //QUERY
            $subMenu = $this->db->query($querySubMenu)->result_array();
            // TADINYA GINI : 
            // SELECT * FROM `user_sub_menu` JOIN `user_menu` 
            // ON `user_sub_menu`.`menu_id` = `menu_id`.`id`
            // WHERE `user_sub_menu` =  $menu_id
            // AND `user_sub_menu`. `is_active` = 1
            ?>

            <?php foreach ($subMenu as $sm) : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url($sm['url']); ?>">
                        <?= $sm['icon']; ?>
                        <span><?= $sm['title']; ?></span>
                    </a>
                </li><!-- End Dashboard Nav -->
            <?php endforeach; ?>

            <li>
                <hr class="nav-divider">
            </li> <!-- End Pemisah Sidebar -->

        <?php endforeach; ?>

        <li class="nav-heading">Action</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('home'); ?>">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('auth/logout'); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Logout Page Nav -->

    </ul>

</aside><!-- End Sidebar-->