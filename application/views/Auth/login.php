<style>
    .my-atropos {
        border-radius: 20px;
        /* width: 300px;
		height: fit-content; */
        width: 970px;
        /* ukuran pembukus gambar */
        height: 590px;

    }

    .login {
        position: absolute;
        padding: 20px;
        width: fit-content;
        height: fit-content;
        border-radius: 20px;
        background: white;
        border: 0px solid red;
        margin-top: 30px;
        margin-left: 360px;
    }

    .container {
        width: fit-content;
        border: 0px solid red;
        position: grid;
        place-content: center;
        padding-top: 70px;
    }

    img {
        width: 1050px;
        /* ukuran gambar */
        position: absolute;
        margin-left: -25px;
    }

    .atropos-inner {
        border-radius: 20px;
    }

    .allert-form {
        margin-top: -22px;
        margin-left: 5px;
        position: absolute;
        font-size: 12px;
    }



    @media only screen and (max-width: 1200px) {
        .my-atropos {
            width: 880px;
        }


        .pesan {
            margin-left: 280px;
        }

        .login {
            margin-left: 320px;
        }
    }

    @media only screen and (max-width: 992px) {
        .my-atropos {
            width: 650px;
        }

        .pesan {
            margin-left: 160px;
        }

        .login {
            margin-left: 200px;
        }
    }

    @media only screen and (max-width: 768px) {
        .my-atropos {
            width: 470px;
        }

        .pesan {
            margin-left: 70px;
        }

        .login {
            margin-left: 110px;
        }
    }

    @media only screen and (max-width: 520px) {
        .my-atropos {
            width: 330px;
        }

        .pesan {
            margin-left: 2px;
        }

        .login {
            margin-left: 40px;
        }
    }

    @media only screen and (max-width: 375px) {
        .my-atropos {
            width: 300px;
            height: 535px;
        }

        .pesan {
            margin-left: -10px;
        }

        .login {
            margin-left: 25px;
        }
    }
</style>
<!-- main Atropos container (required), add your custom class here -->
<div class="container">
    <div class="login-reg-btn text-center">
        <a type="button" class="btn btn-secondary btn-lg btn-ungu" style="color: #712CF9; background: #f0f0f0;" href="<?= base_url('home'); ?>">Home</a>
        <a type="button" class="btn btn-bd-primary btn-lg btn-ungu" href="<?= base_url('auth/registration'); ?>">Register</a>
    </div>
    <div class="bg-gradient-to-b from-primary to-primary-dark -mt-16 border-b-2 border-primary">
        <div class="max-w-screen-lg mx-auto pt-32 pb-16 px-4 md:px-8 lg:px-16">
            <div class="atropos my-atropos atropos-header w-full atropos-rotate-touch-scroll-y atropos-rotate-touch col-lg-7">
                <span class="atropos-scale" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                    <span class="atropos-rotate" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                        <span class="atropos-inner">
                            <img class="atropos-header-spacer" src="<?= base_url(); ?>assets/img/auth/atropos-bg.svg" alt="stars">
                            <img data-atropos-offset="-4.5" src="<?= base_url(); ?>assets/img/auth/atropos-bg.svg" alt="stars" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                            <img data-atropos-offset="-2.5" src="<?= base_url(); ?>assets/img/auth/atropos-mountains.svg" alt="mountains" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                            <img data-atropos-offset="0" src="<?= base_url(); ?>assets/img/auth/atropos-forest-back.svg" alt="forest" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                            <img data-atropos-offset="2" src="<?= base_url(); ?>assets/img/auth/atropos-forest-mid.svg" alt="forest" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                            <img data-atropos-offset="4" src="<?= base_url(); ?>assets/img/auth/atropos-forest-front.svg" alt="forest" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                            <div data-atropos-offset="6" class="atropos-header-button-wrap" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                <div data-atropos-offset="6" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">

                                    <!-- LOGIN FORM -->
                                    <div class="login z-99">

                                        <!-- Pills navs -->
                                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <div class="nav-link px-5" id="tab-login">Login</div>
                                            </li>
                                        </ul>
                                        <!-- Pills navs -->

                                        <!-- Pills content -->
                                        <div class=" tab-content">
                                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                                <form action="<?= base_url('auth'); ?>" method="post">
                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" required oninvalid="this.setCustomValidity('Email Harus Diisi atau Email Salah')" oninput="this.setCustomValidity('')" value="<?= set_value('loginEmail'); ?>" />
                                                        <label class="form-label" for="loginEmail">Email</label>
                                                    </div>
                                                    <div class="alert-form"><?= form_error('loginEmail', '<small class="allert-form text-danger mt-n6">', '</small>'); ?></div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" required oninvalid="this.setCustomValidity('Password Harus Diisi')" oninput="this.setCustomValidity('')" />
                                                        <label class="form-label" for="loginPassword">Password</label>
                                                    </div>
                                                    <div class="alert-form"><?= form_error('loginPassword', '<small class="allert-form text-danger mt-n6">', '</small>'); ?></div>

                                                    <!-- 2 column grid layout -->
                                                    <div class="row mb-4">
                                                        <div class="col-lg d-flex justify-content-center" style="font-size: 12px;">
                                                            <!-- Simple link -->
                                                            Don't have an account?&nbsp<a href="<?= base_url('auth/registration'); ?>">Create One</a>
                                                        </div>
                                                    </div>

                                                    <!-- Submit button -->
                                                    <button type="submit" class="btn btn-bd-primary btn-block mb-4 btn-ungu" name="loginSubmit">Sign in</button>

                                                </form>
                                            </div>
                                        </div>
                                        <!-- Pills content -->
                                    </div>
                                    <!-- end LOGIN FORM -->
                                    <div class="pesan position-absolute"><?= $this->session->flashdata('message'); ?></div>
                                </div>
                        </span>
                        <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                    </span>
                </span>
            </div>
        </div>
    </div>