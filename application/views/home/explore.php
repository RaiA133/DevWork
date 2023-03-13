<main id="main" class="main">

    <div class="pagetitle">
        <h1>Explore</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="<?= base_url('home'); ?>">Home</a></li>
                <li class="breadcrumb-item "><a href="<?= base_url('home/explore') . '?category='; ?>" class="active">Explore</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body bg-712CF9 py-5 px-5">
                                <div>
                                    <div class="">
                                        <?php
                                        $data['test'] = $this->db->get_where('user_post', ['email' => $this->session->userdata('email')])->row_array();
                                        // var_dump($data['test']);
                                        // die;
                                        ?>
                                        <?php if ($data['test'] == null) : ?>
                                            <h2 class="text-light">Let's Create Your First <br> Post Now!</h2>
                                        <?php else : ?>
                                            <h2 class="text-light">Let's Create Your Post <br> Again Now!</h2>
                                        <?php endif; ?>
                                        <h2 class="text-light"></h2>
                                    </div>
                                    <div class="mt-3">
                                        <?php
                                        if ($this->session->userdata('email')) {
                                            $post = "post";
                                            $link = "user";
                                            $get_started = "Profile";
                                        } else {
                                            $post = "auth";
                                            $link = "auth/registration";
                                            $get_started = "Get Started";
                                        }
                                        ?>
                                        <a href="<?= base_url($post); ?>" type="button" class="btn btn-light rounded-pill text-712CF9 px-4">Post</a>
                                        <a href="<?= base_url($link); ?>" type="button" class="btn rounded-pill bg-712CF9 text-light px-3"><?= $get_started; ?></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <?php
                    $category = "";
                    ?>

                    <div class="col-12">
                        <div class="row">

                            <ul class="nav nav-tabs nav-tabs-bordered justify-content-end" id="borderedTab" role="tablist">
                                <div class="nav justify-content-start col-5">
                                    <h4 class="mt-1 bold"><strong class="text-712CF9">Trending Now</strong></h4>
                                </div>
                                <li class="nav-item" role="presentation">
                                    <button class="px-0 nav-link text-712CF9 <?= $_GET['category'] == '' ? 'active' : ''; ?>" id="home-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="home" aria-selected="true" data-bs-target="#all">
                                        <a class="category_link" href="<?= base_url('home/explore') . '?category='; ?>">All</a>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="px-0 nav-link text-712CF9 <?= $_GET['category'] == 'Art' ? 'active' : ''; ?>" id="home-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="home" aria-selected="false" data-bs-target="#art">
                                        <a class="category_link" href="<?= base_url('home/explore') . '?category=Art'; ?>">Art</a>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="px-0 nav-link text-712CF9 <?= $_GET['category'] == 'Music' ? 'active' : ''; ?>" id="profile-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="profile" aria-selected="false" data-bs-target="#music">
                                        <a class="category_link" href="<?= base_url('home/explore') . '?category=Music'; ?>">Music</a>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="px-0 nav-link text-712CF9 <?= $_GET['category'] == 'Web' ? 'active' : ''; ?>" id="contact-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="contact" aria-selected="false" data-bs-target="#web">
                                        <a class="category_link" href="<?= base_url('home/explore') . '?category=Web'; ?>">Web</a>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="px-0 nav-link text-712CF9 <?= $_GET['category'] == 'Business' ? 'active' : ''; ?>" id="contact-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="contact" aria-selected="false" data-bs-target="#business" href="<?= base_url('explore') . '?category=Business'; ?>">
                                        <a class="category_link" href="<?= base_url('home/explore') . '?category=Business'; ?>">Business</a>
                                    </button>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-712CF9" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?= base_url('home/explore') . '?category=Gaming'; ?>" data-bs-target="#gaming">Gaming</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('home/explore') . '?category=Digital Marketing'; ?>" data-bs-target="#digital marketing">Digital Marketing</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('home/explore') . '?category=Programming and Tech'; ?>" data-bs-target="#Programming and Tech">Programming and Tech</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('home/explore') . '?category=Graphics and Design'; ?>" data-bs-target="#Graphics and Design">Graphics and Design</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('home/explore') . '?category=Video and Animation'; ?>" data-bs-target="#businVideo and Animationess">Video and Animation</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('home/explore') . '?category=Writing and Translation'; ?>" data-bs-target="#Writing and Translation">Writing and Translation</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('home/explore') . '?category=AI Service'; ?>" data-bs-target="#AI Service">AI Service</a></li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <?php
                    $category = $_GET['category'];
                    if ($category === "") {
                        $this->db->order_by('id', 'desc');
                        $queryUser = $this->db->get('user_post')->result_array(); // all category
                    } else {
                        $this->db->order_by('id', 'desc');
                        $queryUser = $this->db->get_where('user_post', ['post_category' => $category])->result_array(); // certain category
                    }
                    // var_dump($queryUser);
                    // die;
                    ?>

                    <?php $i = 1; ?>
                    <?php foreach ($queryUser as $post_data) : ?>
                        <!-- Card -->
                        <div class="col-xxl-4 col-md-6 mt-4">
                            <div class="card info-card revenue-card">
                                <style>
                                    .red_heart:focus {
                                        color: red;
                                    }
                                </style>


                                <div class=" card-body">
                                    <div class="row col-lg-12 justify-content-center">
                                        <h5 class="card-title col-11" title="nama"><?= $post_data['nama']; ?> <span title="username">| <?= $post_data['username']; ?></span></h5>
                                        <!-- HEART ICON -->
                                        <!-- <div class="filter col-2">
                                            <a class="icon" href="#"><i class="bi bi-heart" id="<?= $i; ?>" onclick="document.getElementById('<?= $i; ?>').style.cssText = 'color:red;';"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-12 row">
                                        <div class="col-lg-6 border-right" style="border-right: 1px solid #899bbd;">
                                            <nav>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="" class="active" title="tags"><?= $post_data['post_tags']; ?></a></li>
                                                </ol>
                                            </nav>
                                        </div>
                                        <div class="col-lg-6">
                                            <nav>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="" class="active" title="category"><?= $post_data['post_category']; ?></a></li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>

                                    <!-- Card with an image on top -->
                                    <div class="card">
                                        <img src="<?= base_url('assets/img/post/') . $post_data['post_thumb']; ?>" class="card-img-top" alt="...">
                                        <div class="card-body bg-712CF9">
                                            <h5 class="card-title text-light"><?= $post_data['post_title']; ?></h5>

                                            <!-- Modal Dialog Scrollable -->
                                            <div class="text-center">
                                                <button style="font-size:12px;" type="button" class="btn btn-light text-712CF9" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable<?= $post_data['id']; ?>" title="Descriptions">
                                                    More Descriptions
                                                </button>

                                                <div class="border mt-3 row">
                                                    <div class="border col-md-6 py-1 text-light" title="Days of work"><?= $post_data['post_days']; ?> Days</div>
                                                    <div class="border col-md-6 py-1 text-light" title="Value"><?= $post_data['post_pricing']; ?> $</div>
                                                </div>

                                            </div>

                                            <div class="modal fade" id="modalDialogScrollable<?= $post_data['id']; ?>" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Descriptions</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <img src="<?= base_url('assets/img/post/') . $post_data['post_thumb']; ?>" class="card-img-top" alt="...">
                                                            </div>
                                                            <?= $post_data['post_desc']; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <?php
                                                            if ($this->session->userdata('email')) {
                                                                $chatOrAuth = base_url('explore/chat') . '?id=' . $post_data['unique_id'];
                                                            } else {
                                                                $chatOrAuth = base_url('auth');
                                                            }
                                                            ?>
                                                            <a href="<?= $chatOrAuth; ?>" type="button" class="btn rounded-pill bg-712CF9-btn text-light px-3">
                                                                <i class="bi bi-chat text-light"> Chat</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End Modal Dialog Scrollable-->

                                            <p class="card-text"></p>
                                        </div>
                                    </div><!-- End Card with an image on top -->

                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="<?= $chatOrAuth; ?>" type="button" class="btn rounded-pill bg-712CF9-btn text-light px-3">
                                            Make Deal
                                        </a>
                                        <a class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-chat text-712CF9"></i>
                                        </a>
                                    </div>

                                    <div class="text-end pt-3 fst-italic" style="font-size: 12px;">
                                        <?= date('d F Y', $post_data['date_posted']); ?> | <?= date('G:i', $post_data['date_posted']); ?>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Card -->
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">

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
                                    <a href="<?= base_url('application/views/chat/php/'); ?>logout.php?logout_id=<?= $chat_data['unique_id']; ?>" class="logout" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a>
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
                            <script src="<?= base_url(); ?>assets/js/users.js"></script>
                        </div>
                </div><!-- End Recent Activity -->
            <?php endif; ?>

            <?php if ($this->session->userdata('email')) : ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row col-sm-12 d-flex justify-content-center">
                            <div class="col-sm-7">
                                <h5 class="card-title">Your Listed Post</h5>
                            </div>
                            <div class="col-sm-5 d-flex align-items-center text-center px-2 justify-content-end">
                                <a href="<?= base_url('post/list'); ?>" type="button" class="btn rounded-pill bg-712CF9-btn text-light text-center px-4" style="font-size:smaller;">See Detail</a>
                            </div>
                        </div>

                        <!-- Table list post -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tittle Post</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date Posted</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 10px;">
                                <?php
                                // get data from user_post where unique_id = unique_id session
                                $this->db->order_by('id', 'desc');
                                $postUser = $this->db->get_where('user_post', ['unique_id' => $this->session->userdata('unique_id')])->result_array();
                                ?>
                                <?php $no = 1; ?>
                                <?php foreach ($postUser as $list_post_data) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td><?= $list_post_data['post_title']; ?></td>
                                        <td><?= $list_post_data['post_category']; ?></td>
                                        <td><?= date('d F Y', $list_post_data['date_posted']); ?> | <?= date('G:i', $list_post_data['date_posted']); ?></td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table list post -->

                    </div>
                </div>
            <?php endif; ?>
            </div><!-- End Right side columns -->

        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are You Sure to Exit Now?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Yes</a>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->