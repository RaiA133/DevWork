<main id="main" class="main">

    <div class="pagetitle">
        <h1>Post</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>" class="active">Post</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>" class="active"></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-body">
                <h2 class="section-title">Create New Post</h2>
                <p class="section-lead">
                    On this page you can create a new post and fill in all fields.
                </p>

                <!-- <form action="<?= base_url('post/create'); ?>" method="post" enctype="multipart/form-data"> -->
                <?php echo form_open_multipart('post/create'); ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Your Post</h4>
                            </div>
                            <div class="card-body mt-3">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ask Somethings</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="post_title" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="post_category">
                                            <option>Business</option>
                                            <option>Music</option>
                                            <option>Art</option>
                                            <option>Web</option>
                                            <option>Gaming</option>
                                            <option>Digital Marketing</option>
                                            <option>Programming and Tech</option>
                                            <option>Graphics and Design</option>
                                            <option>Video and Animation</option>
                                            <option>Writing and Translation</option>
                                            <option>AI Service</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="about" class="col-sm-3 col-form-label">Post Description</label>
                                    <div class="col-sm-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">More Descriptions</h5>

                                                <!-- TinyMCE Editor -->
                                                <textarea class="tinymce-editor" name="post_desc">
                                                    <p>This is Description Box</p>
                                                    <p>Describe in detail <strong>your needs</strong></p>
                                                </textarea><!-- End TinyMCE Editor -->

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-group row mb-4">
                                    <label for="post_thumb" class="col-sm-3 col-form-label">Thumbnail</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="post_thumb" name="post_thumb">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="post_tags">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Day of Work</label>
                                    <div class="col-sm-12 col-md-2">
                                        <input type="text" class="form-control" name="post_days">
                                    </div>
                                    <div class="col-sm-12 col-md-2 d-flex align-items-center fw-bold">Days</div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pricing</label>
                                    <div class="col-sm-12 col-md-2">
                                        <input type="text" class="form-control" name="post_pricing">
                                    </div>
                                    <div class="col-sm-12 col-md-2 d-flex align-items-center fw-bold">$ (dollar)</div>
                                </div>
                                <!-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric">
                                            <option>Publish</option>
                                            <option>Draft</option>
                                            <option>Pending</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Create Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </form>

            </div>
        </section>
    </div>

</main><!-- End #main -->