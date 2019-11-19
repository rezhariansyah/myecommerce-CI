<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card card-register">
                <div class="card-header">
                    Registration Form
                </div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']); ?>
                    <div class="form-group">
                        <label for="">Name</label>
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('name') ?>
                    </div>
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Enter your active email address', 'required' => true]) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'enter your password at least 8 characters', 'required' => true]) ?>
                        <?= form_error('password') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Confirm password</label>
                        <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'input the same password', 'required' => true]) ?>
                        <?= form_error('password_confirmation') ?>
                    </div>
                    <input type="submit" class="btn btn-info rounded-pill float-right" value="Register">
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>