<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card card-login">
                <div class="card-header">
                    Login Form
                </div>
                <div class="card-body">
                    <?= form_open('login', ['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Enter your email address', 'required' => true]) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'enter your password', 'required' => true]) ?>
                        <?= form_error('password') ?>
                    </div>
                    <input type="submit" class="btn btn-info rounded-pill float-right" value="Login">
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>