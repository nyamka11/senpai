<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>

<br/><br/><br/><br/>
<div class="row container m-auto mt-5 pt-4">
    <div class="col-12 shadow mb-5 p-5">
        <div class="row">
            <div class="col">
                <h1 class="float-left">Мэдээ нэмэх цонх</h1>
            </div>
            <div class="col">
                <?= $this->Html->link(__('Мэдээний жагсаалт харах'), ['action' => 'index'], ['class'=>'btn btn-info float-right mb-4']) ?>
            </div>
        </div>
        <?= $this->Form->create($news) ?>
        <fieldset>
            <?php
                echo $this->Form->input('title',  array('type'=>'text','label' => "Гарчиг",'class'=>"w-100 form-control mb-4"));
                echo $this->Form->input('body',  array('type'=>'textarea','label' => "Их бие",'class'=>"w-100 form-control mb-4"));
                echo $this->Form->input('category',  array('type'=>'text','label' => "Хамаарах бүлэг",'class'=>"w-100 form-control mb-4"));
            ?>
        </fieldset>
        <?= $this->Form->button(__('Нэмэх'),['class'=>'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>