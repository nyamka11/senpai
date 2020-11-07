<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<br/><br/>
<div class="row container m-auto mt-5 mb-5 pt-5">
    <div class="col-12 pt-5 mt-5 mb-5">
        <h3 class="float-left mt-4">Мэдээний жагсаалт</h3>
        <?= $this->Html->link(__('Add news'), ['action' => 'add'], ['class'=>'btn btn-info float-right mb-4']) ?>
        <table cellpadding="0" cellspacing="0" class="table w-100">
            <thead class="thead-dark">
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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $news->id],['class'=>'btn btn-outline-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id],['class'=>'btn btn-outline-dark']) ?>
                        <?= $this->Form->postLink( 'Устгах',
                            ['action' => 'delete', $news->id],
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
<br />