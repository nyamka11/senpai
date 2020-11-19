<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row pb-5 mb-5 mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 pb-5 mb-5">
        <?= $this->Flash->render() ?>
        <div class="card">
                <div class="card-body p-5">
                <h3 class="m-0">Нэвтрэх</h3>
                <div class="d-flex justify-content-center mt-1">
                    <?= $this->Html->image("svg/undraw_Login_re_4vu2.svg",['width' => '250','class'=>'mb-1']) ?>
                </div>
                <br/>
                <?php echo $this->Form->create() ?>
                <div class="form-group">
                    <?php echo $this->Form->input('username',['class'=>'form-control']) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('password',['class'=>'form-control']) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Html->link('Нууц үгээ мартсан?',['action'=>'forgotpassword']); ?>
                </div>
                <?php
                    echo $this->Form->button('Нэвтрэх',['class'=>'btn btn-success mr-3']);
                    echo $this->Html->link('Бүртгүүлэх',['action'=>'register'],['class'=>'btn btn-primary']); 
                    echo $this->Form->end();
                ?>
                 <div class="text-center social-btn mt-30">
                    <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                    <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
                    <a href="#" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>