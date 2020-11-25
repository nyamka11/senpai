<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertisement $advertisement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $advertisement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Advertisement'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="advertisement form large-9 medium-8 columns content">
    <?= $this->Form->create($advertisement) ?>
    <fieldset>
        <legend><?= __('Edit Advertisement') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('adsBody');
            echo $this->Form->control('createDate', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
