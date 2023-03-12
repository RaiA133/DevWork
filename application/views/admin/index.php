<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="pagetitle">
                <h1><?= $judul; ?> | Admin Page</h1>
                <p>Data Registration Member</p>
            </div><!-- End Page Title -->

            <?php
            // query data dimana semua data user yg memiliki role_id = 2 (member) akan di query
            $queryMember = $this->db->get_where('user', ['role_id' => 2])->result_array();
            // var_dump($queryMember);
            ?>

            <?php foreach ($queryMember as $data) : ?>
                <div class="col-lg-4">
                    <div class="card" style="width: 21rem;">
                        <img src="<?= base_url('assets/img/profile/') . $data['image']; ?>" class="card-img-top" alt="profile">
                        <div class="card-body">
                            <hr class="divider">
                            <h5 class="card-title py-0"><?= $data['id']; ?> | <?= $data['name']; ?> | User</h5>
                            <hr class="divider">
                            <div class="social-links mt-2 text-center">
                                <a target="_blank" href="<?= $data['github_link']; ?>" class="github mx-1"><i class="bi bi-github"></i></a>
                                <a target="_blank" href="<?= $data['fb_link']; ?>" class="facebook mx-1"><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href="<?= $data['ig_link']; ?>" class="instagram mx-1"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>User Code : : </b>MU00<?= $data['id']; ?></li>
                            <li class="list-group-item"><b>Username : </b><?= $data['username']; ?></li>
                            <li class="list-group-item"><b>Email : </b><?= $data['email']; ?></li>
                            <li class="list-group-item"><b>Place/Birth : </b><?= $data['tempat_lahir']; ?> | <?= $data['tgl_lahir']; ?></li>
                            <li class="list-group-item"><b>User Since : </b><?= date('d F Y', $data['date_created']); ?></li>
                        </ul>
                        <div class="row mx-auto my-4">
                            <div class="col">
                                <a href="<?= base_url('admin/hapus/') . $data['id']; ?>"><button type="submit" class="btn btn-danger px-4" onclick="return confirm('Are You Sure ?');">Hapus</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</main><!-- End #main -->