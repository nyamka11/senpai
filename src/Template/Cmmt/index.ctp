<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cmmt[]|\Cake\Collection\CollectionInterface $cmmt
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cmmt'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cmmt index large-9 medium-8 columns content">
    <h3><?= __('Cmmt') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemid_') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modulName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('authorName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commentBody') ?></th>
                <th scope="col"><?= $this->Paginator->sort('createDate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cmmt as $cmmt): ?>
            <tr>
                <td><?= $this->Number->format($cmmt->id) ?></td>
                <td><?= h($cmmt->itemid_) ?></td>
                <td><?= h($cmmt->modulName) ?></td>
                <td><?= h($cmmt->authorName) ?></td>
                <td><?= h($cmmt->commentBody) ?></td>
                <td><?= h($cmmt->createDate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cmmt->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cmmt->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cmmt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cmmt->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
