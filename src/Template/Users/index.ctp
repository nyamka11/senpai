<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<br /><br /><br /><br />
<div class="row container shadow m-auto mt-5 pt-4 mb-5">
    <div class="col-12">
        <h1 class="float-left mt-4">Хэрэглэгчийн жагсаалт</h1>
        <?= $this->Html->link(__('+ Хэрэглэгч нэмэх'), ['action' => 'add'], ['class'=>'btn btn-info mt-5 float-right mb-4']) ?>
        <table cellpadding="0" cellspacing="0" class="border w-100 table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('user_name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
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
                    <td><?= h($user->operation) ?></td>
                    <td class="actions w-25">
                        <?= $this->Html->link(__('Харах'), ['action' => 'view', $user->user_id],['class'=>'btn btn-outline-info']) ?>
                        <?= $this->Html->link(__('Засах'), ['action' => 'edit', $user->user_id],['class'=>'btn btn-outline-dark']) ?>
                        <?= $this->Form->postLink( 'Устгах',
                            ['action' => 'delete', $user->user_id],
                            ['confirm' => __('Are you sure you want to delete # {0}?'), 'class'=> 'btn btn-outline-danger']
                        ) ?>
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