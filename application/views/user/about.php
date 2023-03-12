<main id="main" class="main">
    <section class="section">

        <div class="row">
            <div class="col-lg-3"> <!-- General Form Elements -->
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg text-center">
                            <h5 class="card-title pb-0 text-center">Profile Picture</h5>
                            <hr class="divider">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top rounded" alt="profile">
                        </div>
                    </div>
                    <div class="card-body profile-card d-flex flex-column align-items-center">
                        <h4><?= $user['name']; ?></h4>
                        <h5><?= $user['username']; ?></h5>
                        <div class="social-links mt-2">
                            <a target="_blank" href="<?= $user['web_link']; ?>" class="website mx-1" title="Website"><i class="bi bi-info-circle"></i></a>
                            <a target="_blank" href="<?= $user['github_link']; ?>" class="github mx-1" title="Github"><i class="bi bi-github"></i></a>
                            <a target="_blank" href="<?= $user['fb_link']; ?>" class="facebook mx-1" title="Facebook"><i class="bi bi-facebook"></i></a>
                            <a target="_blank" href="<?= $user['ig_link']; ?>" class="instagram mx-1" title="Instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">About</h5>
                        <p class="small fst-italic"><?= $user['about']; ?></p>

                        <h5 class="card-title">Profile Details</h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                            <div class="col-lg-9 col-md-8"><?= $user['name']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Company</div>
                            <div class="col-lg-9 col-md-8"><?= $user['company']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Job</div>
                            <div class="col-lg-9 col-md-8"><?= $user['job']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Country</div>
                            <div class="col-lg-9 col-md-8"><?= $user['country']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">City</div>
                            <div class="col-lg-9 col-md-8"><?= $user['tempat_lahir']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Address</div>
                            <div class="col-lg-9 col-md-8"><?= $user['address']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Phone</div>
                            <div class="col-lg-9 col-md-8"><?= $user['phone']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8"><?= $user['email']; ?></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </section>
</main>