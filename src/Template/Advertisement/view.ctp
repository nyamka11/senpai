<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertisement $advertisement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Advertisement'), ['action' => 'edit', $advertisement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Advertisement'), ['action' => 'delete', $advertisement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Advertisement'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advertisement'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="advertisement view large-9 medium-8 columns content">
    <h3><?= h($advertisement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($advertisement->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($advertisement->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($advertisement->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AdsBody') ?></th>
            <td><?= h($advertisement->adsBody) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($advertisement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CreateDate') ?></th>
            <td><?= h($advertisement->createDate) ?></td>
        </tr>
    </table>
</div>
