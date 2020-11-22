<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cmmt $cmmt
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cmmt->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cmmt->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cmmt'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cmmt form large-9 medium-8 columns content">
    <?= $this->Form->create($cmmt) ?>
    <fieldset>
        <legend><?= __('Edit Cmmt') ?></legend>
        <?php
            echo $this->Form->control('itemid_');
            echo $this->Form->control('modulName');
            echo $this->Form->control('authorName');
            echo $this->Form->control('commentBody');
            echo $this->Form->control('createDate', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
