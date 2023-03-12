<main id="main" class="main w-100">

    <div class="pagetitle">
        <h1>Messages</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="<?= base_url('home'); ?>">Home</a></li>
                <li class="breadcrumb-item "><a href="<?= base_url('home/explore') . '?category='; ?>" class="active">Messages</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-5">
                <div class="row">

                    <!-- Reports -->
                    <div class="col-lg-12">
                        <div class="card py-3">
                            <?php if ($this->session->userdata('email')) : ?>
                                <div class="card-body">
                                    <section class="users">
                                        <header>
                                            <div class="content">
                                                <?php
                                                // ambil data role_id kita dari data akun yg kita login kan sekarang
                                                // $unique_id = $this->session->userdata('unique_id');
                                                $unique_id = $this->session->userdata('unique_id');
                                                // fetch data database dari table user_menu
                                                // $this->db->order_by('msg_id', 'desc');
                                                $chat_data = $this->db->get_where('user', ['unique_id' => $unique_id])->row_array();
                                                ?>
                                                <img src="<?= base_url('assets/img/profile/') . $chat_data['image']; ?>" alt="">
                                                <div class="details">
                                                    <span><?= $chat_data['name']; ?></span>
                                                    <p><?= $chat_data['status']; ?></p>
                                                </div>
                                            </div>
                                            <a href="<?= base_url('home'); ?>" class="logout">Home</a>
                                        </header>
                                        <div class="search">
                                            <label for="search_user">
                                                <span class="text">Search User Name</span>
                                            </label>
                                            <input type="text" placeholder="Enter name to search...">
                                            <button id="search_user"><i class="fas fa-search"></i></button>
                                        </div>
                                        <div class="users-list">

                                        </div>
                                    </section>
                                </div>
                                <script src="<?= base_url(); ?>assets/js/users.js"></script>
                            <?php endif; ?>
                        </div><!-- End Recent Activity -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>