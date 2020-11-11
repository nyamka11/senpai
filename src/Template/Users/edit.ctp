<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row container m-auto mt-5 pt-4">
    <div class="col-sm-12 mb-5 p-5">
        <div class="row">
            <div class="col-12">
                <?= $this->Form->create($user) ?>
                    <legend class="w-auto"') ?></legend>
                    <?php
                        echo $this->Form->control('username', ['class' => 'form-control']);
                        // echo $this->Form->control('password', ['class' => 'form-control']);
                        echo $this->Form->control('lastname', ['class' => 'form-control']);
                        echo $this->Form->control('firstname', ['class' => 'form-control']);
                        echo $this->Form->control('birthday', ['empty' => true]);
                        echo $this->Form->control('country', ['class' => 'form-control']);
                        echo $this->Form->control('postal', ['class' => 'form-control']);
                        echo $this->Form->control('address', ['class' => 'form-control']);
                        echo $this->Form->control('phone', ['class' => 'form-control']);
                        echo $this->Form->control('email', ['class' => 'form-control']);
                        // echo $this->Form->control('gender', ['class' => 'form-control']);
                        echo $this->Form->control('status', ['class' => 'form-control']);
                    ?>
                <?= $this->Form->button(__('Save'),['class'=>'btn btn-success mt-3']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<script>
 $(function()  {
    $('select').css({
        height: 30,
        marginTop: 10,
        marginLeft: 5
    })
 });
</script>