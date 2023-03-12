<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="pagetitle">
                <?php
                // ambil data role_id kita dari data akun yg kita login kan sekarang
                $role_id = $this->session->userdata('role_id');
                // fetch data database dari table user_menu
                $role = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
                // var_dump($role); //test
                ?>
                <h1><?= $judul; ?> | <?= $role['role']; ?></h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">User</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('post/edit'); ?>" class="active">Edit</a></li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <div class="col-lg-3"> <!-- General Form Elements -->
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg text-center">
                            <h5 class="card-title pb-0 text-center">Profile Picture</h5>
                            <hr class="divider">
                            <img src="<?= base_url('assets/img/post/') . $user_post['post_thumb']; ?>" class="card-img-top rounded" alt="profile">
                            <label for="thumb" class="btn btn-primary mt-3 border border-primary rounded-4 px-3">Change Thumbnail</label>
                            <a href="<?= base_url('post/remove_thumb/') . $user_post['id']; ?>" class="btn btn-secondary mt-3 border border-primary rounded-4 px-3">Remove Thumbnail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9"> <!-- General Form Elements -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title pb-0 text-center">Posted Data Edit Form</h5>
                        <hr class="divider">

                        <?php echo form_open_multipart('post/push_edit/' . $user_post['id']); ?><!-- pengganti method="post" enctype="multipart/form-data" -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Title Post</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id" name="post_title" value="<?= $user_post['post_title']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="about" class="col-sm-3 col-form-label">Post Description</label>
                            <div class="col-sm-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">More Descriptions</h5>

                                        <!-- TinyMCE Editor -->
                                        <textarea class="tinymce-editor" name="post_desc">
                                            <?= $user_post['post_desc']; ?>
                                        </textarea><!-- End TinyMCE Editor -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-3 col-form-label">Thumbnail Picture</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="thumb" name="post_thumb" value="<?= base_url('assets/img/post/') . $user_post['post_thumb']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                                <select class="form-control selectric" name="post_category">
                                    <option <?= $user_post['post_category'] == 'Business' ? 'selected' : ''; ?>>Business</option>
                                    <option <?= $user_post['post_category'] == 'Music' ? 'selected' : ''; ?>>Music</option>
                                    <option <?= $user_post['post_category'] == 'Art' ? 'selected' : ''; ?>>Art</option>
                                    <option <?= $user_post['post_category'] == 'Web' ? 'selected' : ''; ?>>Web</option>
                                    <option <?= $user_post['post_category'] == 'Gaming' ? 'selected' : ''; ?>>Gaming</option>
                                    <option <?= $user_post['post_category'] == 'Digital Marketing' ? 'selected' : ''; ?>>Digital Marketing</option>
                                    <option <?= $user_post['post_category'] == 'Programming & Tech' ? 'selected' : ''; ?>>Programming & Tech</option>
                                    <option <?= $user_post['post_category'] == 'Graphics & Design' ? 'selected' : ''; ?>>Graphics & Design</option>
                                    <option <?= $user_post['post_category'] == 'Video Animation' ? 'selected' : ''; ?>>Video & Animation</option>
                                    <option <?= $user_post['post_category'] == 'Writing & Translation' ? 'selected' : ''; ?>>Writing & Translation</option>
                                    <option <?= $user_post['post_category'] == 'AI Service' ? 'selected' : ''; ?>>AI Service</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Date Posted</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id" name="date_posted" value="<?= date('d F Y', $user_post['date_posted']); ?> | <?= date('G:i', $user_post['date_posted']); ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tags</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id" name="post_tags" value="<?= $user_post['post_tags']; ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Day of Work</label>
                            <div class="col-sm-12 col-md-2">
                                <input type="text" class="form-control" name="post_days" autocomplete="off" value="<?= $user_post['post_days']; ?>">
                            </div>
                            <div class="col-sm-12 col-md-2 d-flex align-items-center fw-bold">Days</div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pricing</label>
                            <div class="col-sm-12 col-md-2">
                                <input type="text" class="form-control" name="post_pricing" autocomplete="off" value="<?= $user_post['post_pricing']; ?>">
                            </div>
                            <div class="col-sm-12 col-md-2 d-flex align-items-center fw-bold">$ (dollar)</div>
                        </div>

                        <div class="row mb-3 pt-3">
                            <div class="col-lg text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?= base_url('post/list') ?>" class="btn btn-secondary">Cencel</a>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div><!-- End General Form Elements -->



        </div>
    </section>
</main>