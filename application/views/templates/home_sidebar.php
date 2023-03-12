<?php
if ($this->session->userdata('email')) {
    if ($_SESSION['role_id'] == 1) {
        $profile = 'admin';
    } else {
        $profile = 'user';
    }
} else {
    $profile = "home";
}

?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' ? '' : 'collapsed'; ?>" href="<?= base_url('home'); ?>">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->
        <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(2) == 'explore' ? '' : 'collapsed'; ?>" href="<?= base_url('home/explore') . '?category='; ?>">
                <i class="bi bi-search"></i>
                <span>Explore</span>
            </a>
        </li><!-- End Explore Nav -->
        <?php if ($this->session->userdata('email')) : ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(2) == 'post' ? '' : 'collapsed'; ?>" href="<?= base_url('post/list') ?>">
                    <i class="bi bi-pencil-square"></i>
                    <span>Posted</span>
                </a>
            </li>
            <!-- End Posted Nav -->

            <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(2) == 'post' ? '' : 'collapsed'; ?>" href="<?= base_url('explore/messages') ?>">
                    <i class="bi bi-chat-dots"></i>
                    <span>Messages</span>
                </a>
            </li>
            <!-- End Messages Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(2) == 'favorit' ? '' : 'collapsed'; ?>" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="">
                    <i class="bi bi-heart"></i>
                    <span>Favorit</span>
                </a>
            </li> -->
            <!-- End Favorit Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(2) == 'bookmark' ? '' : 'collapsed'; ?>" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="">
                    <i class="bi bi-journal-bookmark"></i>
                    <span>Bookmark</span>
                </a>
            </li> -->
            <!-- End Bookmark Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(2) == 'notification' ? '' : 'collapsed'; ?>" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="">
                    <i class="bi bi-bell"></i>
                    <span>Notification</span>
                </a>
            </li> -->
            <!-- End Notification Nav -->
        <?php endif; ?>

        <li class="nav-heading">Pages</li>


        <?php if ($this->session->userdata('email')) : ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(2) == 'user' || $this->uri->segment(2) == 'admin' ? '' : 'collapsed'; ?>" href="<?= base_url($profile); ?>">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </li><!-- End Profile Page Nav -->
        <?php endif; ?>

        <!-- <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(2) == 'contact' ? '' : 'collapsed'; ?>" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li> -->
        <!-- End Contact Page Nav -->

        <?php if ($this->session->userdata('email')) : ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(3) == 'logout' ? '' : 'collapsed'; ?>" href="<?= base_url('auth/logout'); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Logout Page Nav -->
        <?php endif; ?>

        <?php if ($profile == "home") : ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(3) == 'registration' ? '' : 'collapsed'; ?>" href="<?= base_url('auth/registration'); ?>">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(3) == 'login' ? '' : 'collapsed'; ?>" href="<?= base_url('auth'); ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->
        <?php endif; ?>
    </ul>

</aside><!-- End Sidebar-->