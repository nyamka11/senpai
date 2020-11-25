<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row pb-5 mb-5 mt-5 pt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 pb-5">
        <?= $this->Flash->render() ?>
        <div class="card">
            <div class="card-body p-5">
                <h3 class="m-0">Бүртгүүлэх цонх</h3>
                <div class="d-flex justify-content-center mt-30" style="max-height:200px">
                    <?= $this->Html->image("svg/undraw_secure_login_pdn4.svg",['width' => '200','class'=>'mb-1']) ?>
                </div>
                <?php echo $this->Form->create() ?>
                <div class="form-group">
                    <?php echo $this->Form->input('username',['class'=>'form-control','required']) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('email',['class'=>'form-control','required']) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('password',['class'=>'form-control','required']) ?>
                </div>
                <?php
                    echo $this->Form->button('Бүртгүүлэх',['class'=>'btn btn-success mr-3']);
                    echo $this->Html->link('Буцах',['action'=>'login'],['class'=>'btn btn-primary']);
                    echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>