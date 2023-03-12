<main id="main" class="main">

    <section class="section">
        <div class="row">

            <!-- MY PROFILE side_bar -->

            <div class="pagetitle">
                <?php
                // ambil data role_id kita dari data akun yg kita login kan sekarang
                $role_id = $this->session->userdata('role_id');
                // fetch data database dari table user_menu
                $role = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
                // var_dump($role); //test
                ?>
                <h1><?= $judul; ?> | <?= $role['role']; ?></h1>
                <p>Profile Information</p>
            </div><!-- End Page Title -->

            <!-- flash data dari controller/user.php -->
            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 21rem;">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top" alt="profile">
                    <div class="card-body">
                        <hr class="divider">
                        <h5 class="card-title py-0"><?= $user['name']; ?> | <?= $user['username']; ?></h5>
                        <hr class="divider">
                        <div class="text-center">
                            <a href="<?= $user['github_link']; ?>" class="card-link">Github</a>
                            <a href="<?= $user['fb_link']; ?>" class="card-link">Facebook</a>
                            <a href="<?= $user['ig_link']; ?>" class="card-link">Instagram</a>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">User Code : UM00<?= $user['id']; ?></li>
                        <li class="list-group-item"><?= $user['email']; ?></li>
                        <li class="list-group-item">Place/birth : <?= $user['tempat_lahir']; ?> | <?= $user['tgl_lahir']; ?></li>
                        <li class="list-group-item">Active Since : <?= date('d F Y', $user['date_created']); ?> | <?= date('G:i', $user['date_created']); ?></li>
                    </ul>
                    <ul class="sidebar-nav" id="sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="<?= base_url('user/edit'); ?>">
                                <i class="bi bi-pencil"></i>
                                <span>Edit Profile</span>
                            </a>
                        </li><!-- End Home Page Nav -->
                    </ul>
                </div>
            </div>

            <!-- end MY PROFILE -->

        </div>
    </section>

</main><!-- End #main -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are You Sure Exit Now ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a type="button" class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Ya</a>
            </div>
        </div>
    </div>
</div>