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
                        <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">User</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('user/edit'); ?>" class="active">Edit</a></li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <div class="col-lg-3"> <!-- General Form Elements -->
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg text-center">
                            <h5 class="card-title pb-0 text-center">Profile Picture</h5>
                            <hr class="divider">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top rounded" alt="profile">
                            <label for="image" class="btn btn-primary mt-3 border border-primary rounded-4 px-3">Change Profile Picture</label>
                            <a href="<?= base_url('user/remove_pp'); ?>" class="btn btn-secondary mt-3 border border-primary rounded-4 px-3">Remove Image</a>
                        </div>
                    </div>
                    <div class="card-body profile-card d-flex flex-column align-items-center">
                        <h4><?= $user['name']; ?></h4>
                        <h5><?= $user['username']; ?></h5>
                        <div class="social-links mt-2">
                            <a target="_blank" href="<?= $user['github_link']; ?>" class="github mx-1"><i class="bi bi-github"></i></a>
                            <a target="_blank" href="<?= $user['fb_link']; ?>" class="facebook mx-1"><i class="bi bi-facebook"></i></a>
                            <a target="_blank" href="<?= $user['ig_link']; ?>" class="instagram mx-1"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9"> <!-- General Form Elements -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title pb-0 text-center">Personal Data Edit Form</h5>
                        <hr class="divider">

                        <?php echo form_open_multipart('user/edit'); ?><!-- pengganti method="post" enctype="multipart/form-data" -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" autocomplete="off">
                                <div class="alert-form"><?= form_error('name', '<small class="allert-form text-danger mt-n6">', '</small>'); ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" autocomplete="off">
                                <div class="alert-form"><?= form_error('username', '<small class="allert-form text-danger mt-n6">', '</small>'); ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">User Code</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="MB00<?= $user['id']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="registerEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="registerEmail" name="registerEmail" value="<?= $user['email']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-3 col-form-label">Profile Picture</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="image" name="image" value="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tgl_lahir" class="col-sm-3 col-form-label">Birthdate</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="github" name="country" value="<?= $user['country']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label" for="tempat_lahir">Born Place / Hometown</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="github" name="address" value="<?= $user['address']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Registration Date</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= date('d F Y', $user['date_created']); ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Registration Time</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control" value="<?= date('G:i', $user['date_created']); ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="about" class="col-sm-3 col-form-label">About You</label>
                            <div class="col-sm-9">
                                <textarea id="about" class="form-control" style="height: 200px" name="about"><?= $user['about']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Company / instance</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="github" name="company" value="<?= $user['company']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Job</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="github" name="job" value="<?= $user['job']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Website Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="website" name="website" value="<?= $user['web_link']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Github Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="github" name="github" value="<?= $user['github_link']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="facebook" class="col-sm-3 col-form-label">Facebook Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $user['fb_link']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="instagram" class="col-sm-3 col-form-label">Instagram Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $user['ig_link']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3 pt-3">
                            <div class="col-lg text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?= base_url('user') ?>" class="btn btn-secondary">Cencel</a>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div><!-- End General Form Elements -->



        </div>
    </section>
</main>