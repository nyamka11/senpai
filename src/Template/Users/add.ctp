<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row  container m-auto mt-5 pt-4 mb-5">
    <div class="col-sm-12 shadow mb-5 p-5">
        <div class="row">
            <div class="col">
                <h3 class="float-left mt-4">Add new User</h3>
            </div>
            <div class="col">
                <?= $this->Html->link(__('List of users'), ['action' => 'index'], ['class'=>'btn btn-info float-right']) ?>
                <?= $this->Html->link(__('Sign in'), ['action' => 'signin'], ['class'=>'btn btn-info float-right mr-2']) ?>
            </div>
        </div>
        <div class="table-responsive w-100">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <!-- <legend class="w-auto"><?= __('Add User') ?></legend> -->
                <div class="row">
                    <div class="form-group col-sm-3">
                        <?php echo $this->Form->control('lastname', ['class' => 'form-control']);  ?>
                    </div>
                    <div class="form-group col-sm-3">
                        <?php echo $this->Form->control('firstname', ['class' => 'form-control']);  ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <?php echo $this->Form->control('user_name', ['class' => 'form-control']);  ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <?php echo $this->Form->control('password', ['class' => 'form-control']);  ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <?php echo $this->Form->input('birthday', 
                        ['type' => 'text','class'=> 'form-control sp_datepicker','label' => 'Birthday']);
                        ?>
                    </div>
                </div>


                <?php
                echo $this->Form->control('country', ['class' => 'form-control']);
                echo $this->Form->control('postal', ['class' => 'form-control']);
                echo $this->Form->control('address', ['class' => 'form-control']);
                echo $this->Form->control('address1', ['class' => 'form-control']);
                echo $this->Form->control('phone', ['class' => 'form-control']);
                echo $this->Form->control('phone1', ['class' => 'form-control']);
                echo $this->Form->control('email', ['class' => 'form-control']);
                echo $this->Form->control('email1', ['class' => 'form-control']);
                echo $this->Form->control('role', ['class' => 'form-control']);
                echo $this->Form->control('gender', ['class' => 'form-control']);
                echo $this->Form->control('profile_photo');
                echo $this->Form->control('status', ['class' => 'form-control']);
                echo $this->Form->control('operation', ['class' => 'form-control']);

                ?>
            </fieldset>
            <div class="col-sm-12">
                <div class="form-section">
                    <div class="form-group mt-3 ">
                        <button type="submit" class="btn btn-primary btn-block btn-lg text-serif "
                            data-heap="register-submit-button" data-e2e="submit">Create your account</button>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<!-- Datepiker -->
<script>
$('.sp_datepicker').attr('type', 'date', {
    format: "yyyy/mm/dd"
});
</script>