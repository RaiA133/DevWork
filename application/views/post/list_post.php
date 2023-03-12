<main id="main" class="main">

    <div class="pagetitle">
        <div class="row">
            <div class="col-lg-11">
                <h1>Explore</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="<?= base_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item "><a href="<?= base_url('home/explore') . '?category='; ?>" class="active">Explore</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-1">
                <a type="button" class="btn btn-danger btn-lg" href="<?= base_url('home/explore?category='); ?>">Close</a>
            </div>
        </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card" style="overflow: auto;">

                <!-- Table list post -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-bold">#</th>
                            <th scope="col" class="fw-bold">Post Thumbnail</th>
                            <th scope="col" class="fw-bold">Tittle Post</th>
                            <th scope="col" class="fw-bold">Post Description</th>
                            <th scope="col" class="fw-bold">Category</th>
                            <th scope="col" class="fw-bold">Tags</th>
                            <th scope="col" class="fw-bold">Days Of Work</th>
                            <th scope="col" class="fw-bold">Pricing</th>
                            <th scope="col" class="fw-bold">Date Posted</th>
                            <th scope="col" class="fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // get data from user_post where unique_id = unique_id session
                        $this->db->order_by('id', 'desc');
                        $postUser = $this->db->get_where('user_post', ['unique_id' => $this->session->userdata('unique_id')])->result_array();
                        ?>
                        <?php $no = 1; ?>
                        <?php foreach ($postUser as $list_post_data) : ?>
                            <tr>
                                <th scope="row"><?= $no; ?></th>
                                <td>
                                    <img width="120" src="<?= base_url('assets/img/post/') . $list_post_data['post_thumb']; ?>" alt="Post Thumbnail" title="Post Thumbnail">
                                </td>
                                <td>
                                    <div style="width: 200px;">
                                        <?= $list_post_data['post_title']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div style="width: 500px;">
                                        <?= $list_post_data['post_desc']; ?>
                                    </div>
                                </td>
                                <td><?= $list_post_data['post_category']; ?></td>
                                <td><?= $list_post_data['post_tags']; ?></td>
                                <td><?= $list_post_data['post_days']; ?></td>
                                <td><?= $list_post_data['post_pricing']; ?></td>
                                <td><?= date('d F Y', $list_post_data['date_posted']); ?> | <?= date('G:i', $list_post_data['date_posted']); ?></td>
                                <td style="width: 100px;">
                                    <div class="col-lg-12 px-3 text-center" style="width: 100px;">
                                        <div class="col-lg-6 pb-2">
                                            <a href="<?= base_url('post/edit/') . $list_post_data['id']; ?>" type="button" class="btn rounded-pill bg-712CF9-btn text-light mr-3 px-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="<?= base_url('post/delete_post/') . $list_post_data['id']; ?>" type="button" class="btn btn-danger rounded-pill text-light px-3" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="return confirm('Are You Sure ?');">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <!-- End Table list post -->
        </div>
    </section>

</main>