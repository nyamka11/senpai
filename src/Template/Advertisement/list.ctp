<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertisement[]|\Cake\Collection\CollectionInterface $advertisement
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">


<div class="row container m-auto mt-5 mb-5">
    <div class="col-12 mb-5">
        <h3 class="float-left mt-4">Зарын жагсаалт</h3>
        <?= $this->Html->link(__('Нэмэх'), ['action' => 'add'], ['class'=>'btn btn-info float-right mb-4']) ?>
        <table cellpadding="0" cellspacing="0" class="table w-100">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('adsBody') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('createDate') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($advertisement as $advertisement): ?>
                <tr>
                    <td><?= $this->Number->format($advertisement->id) ?></td>
                    <td><?= h($advertisement->name) ?></td>
                    <td><?= h($advertisement->email) ?></td>
                    <td><?= h($advertisement->phone) ?></td>
                    <td><?= h($advertisement->adsBody) ?></td>
                    <td><?= h($advertisement->createDate) ?></td>
                    <td class="actions w-25">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $advertisement->id],['class'=>'btn btn-outline-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $advertisement->id],['class'=>'btn btn-outline-dark']) ?>
                        <?= $this->Form->postLink( 'Устгах',
                            ['action' => 'delete', $advertisement->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?'), 'class'=> 'btn btn-outline-danger']
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator mb-5">
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
