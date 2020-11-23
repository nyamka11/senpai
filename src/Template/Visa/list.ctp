<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visa[]|\Cake\Collection\CollectionInterface $visa
 */
?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<br/><br/>

<div class="row container m-auto mt-5 mb-5">
    <div class="col-12 mb-5">
        <h3 class="float-left mt-4">Визний мэдээлэл</h3>
        <?= $this->Html->link(__('Нэмэх'), ['action' => 'add'], ['class'=>'btn btn-info float-right mb-4']) ?>
        <table cellpadding="0" cellspacing="0" class="table w-100">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('createDate') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('updateDate') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visa as $visa): ?>
                <tr>
                    <td><?= $this->Number->format($visa->id) ?></td>
                    <td><?= h($visa->type) ?></td>
                    <td><?= h($visa->createDate) ?></td>
                    <td><?= h($visa->updateDate) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visa->id],['class'=>'btn btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visa->id],['class'=>'btn btn-dark']) ?>
                        <?= $this->Form->postLink( 'Устгах',
                            ['action' => 'delete', $visa->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?'), 'class'=> 'btn btn-danger']
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
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>

    </div>
</div>
