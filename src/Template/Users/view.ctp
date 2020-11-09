<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<br /><br /><br />
<div class="row shadow container m-auto mt-5 pt-4">
    <div class="col-3">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
            </li>
            <li><?= $this->Html->link(__('List of users'), ['action' => 'list']) ?> </li>
            <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        </ul>
    </div>
    <div class="col-9">
        <h3><?= h($user->user_id) ?></h3>
        <table class="vertical-table table">
            <tr>
                <th scope="row"><?= __('User Id') ?></th>
                <td><?= $this->Number->format($user->user_id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User Name') ?></th>
                <td><?= h($user->user_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Password') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Lastname') ?></th>
                <td><?= h($user->lastname) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Firstname') ?></th>
                <td><?= h($user->firstname) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Birthday') ?></th>
                <td><?= h($user->birthday) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Country') ?></th>
                <td><?= h($user->country) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Postal') ?></th>
                <td><?= h($user->postal) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Address') ?></th>
                <td><?= h($user->address) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Address1') ?></th>
                <td><?= h($user->address1) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Phone') ?></th>
                <td><?= h($user->phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Phone1') ?></th>
                <td><?= h($user->phone1) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email1') ?></th>
                <td><?= h($user->email1) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Role') ?></th>
                <td><?= h($user->role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Gender') ?></th>
                <td><?= h($user->gender) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Profile_photo') ?></th>
                <td><?= h($user->profile_photo) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= h($user->status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ins User Name') ?></th>
                <td><?= h($user->ins_user_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Upd User Name') ?></th>
                <td><?= h($user->upd_user_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Operation') ?></th>
                <td><?= h($user->operation) ?></td>
            </tr>

            <tr>
                <th scope="row"><?= __('Role') ?></th>
                <td><?= $this->Number->format($user->role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Birthday') ?></th>
                <td><?= h($user->birthday) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ins Date') ?></th>
                <td><?= h($user->ins_date) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Upd Date') ?></th>
                <td><?= h($user->upd_date) ?></td>
            </tr>
        </table>
    </div>
</div>