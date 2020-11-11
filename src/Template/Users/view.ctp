<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row shadow container m-auto mt-5 mb-5 pt-5 pb-5">
    <!-- <div class="col-3">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
            </li>
            <li><?= $this->Html->link(__('List of users'), ['action' => 'list']) ?> </li>
            <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        </ul>
    </div> -->

    <div class="col-6 mb-5"><h2>User profile</h2></div>
    <div class="col-6"><?= $this->Html->link(__('Хувийн мэдээллээ шинэчлэх'), ['action' => 'edit', $user->user_id],['class'=>'btn btn-primary float-right']) ?> </div>
    <div class="col-12">
        <ul class="list-group">
            <li class="list-group-item pl-4"><img src="https://avatarfiles.alphacoders.com/715/71560.jpg" style="height:200px;" class="img-thumbnail float-left"  alt="..."></li>
            <li class="list-group-item pl-4"><b><?= __('User Name') ?>: </b><?= h($user->username) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Lastname') ?>: </b><?= h($user->lastname) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Firstname') ?>: </b><?= h($user->firstname) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Birthday') ?>: </b><?= h($user->birthday) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Country') ?>: </b><?= h($user->country) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Postal') ?>: </b><?= h($user->Postal) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Address') ?>: </b><?= h($user->address) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Phone') ?>: </b><?= h($user->phone) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Email') ?>: </b><?= h($user->email) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Profile_photo') ?>: </b><?= h($user->profile_photo) ?></li>
            <li class="list-group-item pl-4"><b><?= __('Ins Date') ?>: </b><?= h($user->ins_date) ?></li>
        </ul>
    </div>
</div>