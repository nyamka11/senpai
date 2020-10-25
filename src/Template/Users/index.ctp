<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="mt-5">
</div>

<div class="row  container m-auto">
    <div class="mt-5">
        <div class="heading "><?= __('Actions') ?></div>
        <i class="bx bx-chevron-right"></i><?= $this->Html->link(__('New User'), ['action' => 'add']) ?>
    </div>
    <div class="table-responsive mt-3">
        <h3><?= __('Users') ?></h3>
        <table cellpadding="0" cellspacing="0" class="border w-100">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('user_name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('postal') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('address1') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('phone1') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('email1') ?></th> -->
                    <!-- <th scope="col"><?= $this->Paginator->sort('role') ?></th>-->
                    <!-- <th scope="col"><?= $this->Paginator->sort('gender') ?></th>-->
                    <!-- <th scope="col"><?= $this->Paginator->sort('profile_photo') ?></th>-->
                    <!-- <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('ins_date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('ins_user_name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('upd_date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('upd_user_name') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('operation') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr class="border">
                    <td><?= $this->Number->format($user->user_id) ?></td>
                    <td><?= h($user->user_name) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->lastname) ?></td>
                    <td><?= h($user->firstname) ?></td>
                    <td><?= h($user->birthday) ?></td>
                    <td><?= h($user->country) ?></td>
                    <td><?= h($user->postal) ?></td>
                    <td><?= h($user->address) ?></td>
                    <!-- <td><?= h($user->address1) ?></td> -->
                    <td><?= h($user->phone) ?></td>
                    <!-- <td><?= h($user->phone1) ?></td> -->
                    <td><?= h($user->email) ?></td>
                    <!-- <td><?= h($user->email1) ?></td> -->
                    <!-- <td><?= $this->Number->format($user->role) ?></td> -->
                    <!-- <td><?= $this->Number->format($user->gender) ?></td> -->
                    <!-- <td><?= $this->Number->format($user->profile_photo) ?></td> -->
                    <!-- <td><?= h($user->status) ?></td>
                    <td><?= h($user->ins_date) ?></td>
                    <td><?= h($user->ins_user_name) ?></td>
                    <td><?= h($user->upd_date) ?></td>
                    <td><?= h($user->upd_user_name) ?></td> -->
                    <td><?= h($user->operation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
            </p>
        </div>

    </div>
</div>