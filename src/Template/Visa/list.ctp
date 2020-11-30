<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visa[]|\Cake\Collection\CollectionInterface $visa
 */
?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<?= $this->Html->script('summernote.min.js') ?>
<br/>
<div class="row container m-auto mt-5 mb-5 bg-white rounded">
    <div class="col-12 pt-5">
        <h1 class="float-left mt-4">Визний мэдээлэл</h1>
        <?= $this->Html->link(__('Нэмэх'), ['action' => 'add'], ['class'=>'btn btn-info float-right mb-4']) ?>
        <table cellpadding="0" cellspacing="0" class="table w-100">
            <thead class="bg-light">
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
                        <a href="<?= $this->Url->build(array('action'=>'view', $visa->id)) ?>">
                            <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Харах">
                                <i class="fa fa-eye"></i>
                            </button>
                        </a>
                        <a href="<?= $this->Url->build(array('action'=>'edit', $visa->id)) ?>">
                            <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Засах">
                                <i class="fa fa-wrench"></i>
                            </button>
                        </a>
                        <?=
                            $this->Form->postLink(
                                '<button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Устгах">
                                    <i class="fa fa-trash"></i>
                                </button>',
                                array('action'   => 'delete', $visa->id),
                                array(
                                    'class'    => 'tip',
                                    'escape'   => false,
                                    'confirm'  => 'Are you sure you want to delete # {0}?'
                                )
                            );
                        ?>
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
<br/>

<script>
  
</script>