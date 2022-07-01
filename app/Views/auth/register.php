<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= route_to('register') ?>" method="post" class="user">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" autocomplete="off" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" autocomplete="off">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block text-light">
                                        <?= lang('Auth.register') ?>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small text-dark" href="<?= route_to('login') ?>">Sudah punya akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="white" fill-opacity="1" d="M0,64L24,80C48,96,96,128,144,149.3C192,171,240,181,288,165.3C336,149,384,107,432,117.3C480,128,528,192,576,181.3C624,171,672,85,720,80C768,75,816,149,864,149.3C912,149,960,75,1008,80C1056,85,1104,171,1152,192C1200,213,1248,171,1296,144C1344,117,1392,107,1416,101.3L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
        </svg>
    </footer>
</footer>
<?= $this->endSection(); ?>