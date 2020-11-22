<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cmmt $cmmt
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cmmt'), ['action' => 'edit', $cmmt->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cmmt'), ['action' => 'delete', $cmmt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cmmt->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cmmt'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cmmt'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cmmt view large-9 medium-8 columns content">
    <h3><?= h($cmmt->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Itemid ') ?></th>
            <td><?= h($cmmt->itemid_) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ModulName') ?></th>
            <td><?= h($cmmt->modulName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AuthorName') ?></th>
            <td><?= h($cmmt->authorName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CommentBody') ?></th>
            <td><?= h($cmmt->commentBody) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cmmt->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CreateDate') ?></th>
            <td><?= h($cmmt->createDate) ?></td>
        </tr>
    </table>
</div>
