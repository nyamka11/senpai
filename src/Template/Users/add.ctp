<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="mt-5">
</div>

<div class="row  container m-auto">
    <div class="col-sm-12 pad-right full-height">
        <div class="mt-5">
            <div class="heading"><?= __('Actions') ?></div>
            <i class="bx bx-chevron-right"></i>
            <?= $this->Html->link(__('List Users'), ['action' => 'index']) ?>
        </div>

        <div class="table-responsive mt-3">
            <?= $this->Form->create($user) ?>
            <fieldset class="border p-2">
                <legend class="w-auto"><?= __('Add User') ?></legend>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?php echo $this->Form->control('user_name', ['class' => 'form-control']);  ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?php echo $this->Form->control('password', ['class' => 'form-control']);  ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?php echo $this->Form->control('lastname', ['class' => 'form-control']);  ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?php echo $this->Form->control('firstname', ['class' => 'form-control']);  ?>
                    </div>
                </div>
                <?php

            echo $this->Form->control('birthday', ['class' => 'picker']);
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