<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<br/>
<div class="row container m-auto mt-5 mb-5 bg-white rounded">
    <div class="col-12 mb-5 mt-5">
        <h1 class="float-left mt-4">Мэдээний жагсаалт</h1>
        <?= $this->Html->link(__('Add news'), ['action' => 'add'], ['class'=>'btn btn-info float-right mb-4']) ?>
        <table cellpadding="0" cellspacing="0" class="table w-100">
            <thead class="bg-light" height="300">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><?= $this->Paginator->sort('Бүлэг') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Гарчиг') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Эх сурвалж') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Хариуцагч') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Онгоо') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $cnt = 0;
                    foreach ($news as $news): 
                ?>
                <tr>
                    <td><?= h(++$cnt) ?></td>
                    <td><?= h($news->category) ?></td>
                    <td>
                        <div class="field"><?= h($news->title) ?></div>
                    </td>
                    <td>
                        <div class="field"><?= h($news->placeoforigin) ?></div>
                    </td>
                    <td><?= h($news->author) ?></td>
                    <td><?= h($news->date) ?></td>
                    <td class="actions w-25">
                        <a href="<?= $this->Url->build(array('action'=>'view', $news->id)) ?>">
                            <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Харах">
                                <i class="fa fa-eye"></i>
                            </button>
                        </a>
                        <a href="<?= $this->Url->build(array('action'=>'edit', $news->id)) ?>">
                            <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Засах">
                                <i class="fa fa-wrench"></i>
                            </button>
                        </a>
                        <?=
                            $this->Form->postLink(
                                '<button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Устгах">
                                    <i class="fa fa-trash"></i>
                                </button>',
                                array('action'   => 'delete', $news->id),
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
<br />