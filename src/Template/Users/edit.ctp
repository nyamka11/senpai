<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<br /><br /><br />
<div class="row container m-auto mt-5 pt-4">
    <div class="col-sm-12 shadow mb-5 p-5">
        <div class="row">
            <div class="col">
                <h3 class="float-left mt-4">Edit User info</h3>
            </div>
            <div class="col">
                <?= $this->Form->postLink(__('Delete'),['action' => 'delete', $user->user_id]
                                                      ,['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class'=>'btn btn-danger float-right']) ?>
                <?= $this->Html->link(__('List of users'),['action' => 'index'], ['class'=>'btn btn-info float-right mr-2']) ?>
            </div>

            <div class="table-responsive mt-3">
                <?= $this->Form->create($user) ?>
                <fieldset class="border p-2">
                    <legend class="w-auto"><?= __('Edit User') ?></legend>
                    <?php
                echo $this->Form->control('user_name', ['class' => 'form-control']);
                echo $this->Form->control('password', ['class' => 'form-control']);
                echo $this->Form->control('lastname', ['class' => 'form-control']);
                echo $this->Form->control('firstname', ['class' => 'form-control']);
                echo $this->Form->control('birthday', ['empty' => true]);
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
                                data-heap="register-submit-button" data-e2e="submit">Edit your account</button>
                        </div>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>