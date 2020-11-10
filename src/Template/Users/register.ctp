<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row pb-5 mb-5 mt-5 pt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 pb-5">
        <?= $this->Flash->render() ?>
        <div class="card">
            <h3 class="card-header m-0">Бүртгүүлэх цонх</h3>
            <div class="card-body">
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
                    echo $this->Form->button('Бүртгүүлэх',['class'=>'btn btn-primary mr-3']);
                    echo $this->Html->link('Нэвтрэх цонхруу очих',['action'=>'login'],['class'=>'btn btn-success']);
                    echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>