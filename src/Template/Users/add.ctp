<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="mt-5">
</div>

<div class="row  container m-auto">
    <div class="mt-5">
        <div class="heading"><?= __('Actions') ?></div>
        <i class="bx bx-chevron-right"></i><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?>
    </div>

    <div class="table-responsive mt-3">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?php
            echo $this->Form->control('user_name');
            echo $this->Form->control('password');
            echo $this->Form->control('lastname');
            echo $this->Form->control('firstname');
            echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('country');
            echo $this->Form->control('postal');
            echo $this->Form->control('address');
            echo $this->Form->control('address1');
            echo $this->Form->control('phone');
            echo $this->Form->control('phone1');
            echo $this->Form->control('email');
            echo $this->Form->control('email1');
            echo $this->Form->control('role');
            echo $this->Form->control('gender');
            echo $this->Form->control('profile_photo');
            echo $this->Form->control('status');
            // echo $this->Form->control('ins_date', ['empty' => true]);
            // echo $this->Form->control('ins_user_name');
            // echo $this->Form->control('upd_date', ['empty' => true]);
            // echo $this->Form->control('upd_user_name');
            echo $this->Form->control('operation');
        ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>