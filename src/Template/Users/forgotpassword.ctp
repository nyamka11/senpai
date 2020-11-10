<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row pb-5 mb-5 mt-5 pt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 pb-5 pt-5 mb-5">
        <?= $this->Flash->render() ?>
        <div class="card">
            <h3 class="card-header m-0">Нүүц үгээ мартсан</h3>
            <div class="card-body">
                <?php echo $this->Form->create() ?>
                <div class="form-group">
                    <?php echo $this->Form->input('email',['class'=>'form-control']) ?>
                </div>
                <?php
                    echo $this->Form->button('Шинэ нууц үг авах',['class'=>'btn btn-success mr-3']);
                    echo $this->Html->link('Нэвтрэх цонхруу очих',['action'=>'login'],['class'=>'btn btn-primary']);
                    echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>