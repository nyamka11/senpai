<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>

<br/><br/><br/><br/>

<div class="row container m-auto mt-5 pt-4">
    <div class="col-12 mb-5">
        <div class="row">
            <div class="col">
                <h1 class="float-left">Мэдээ нэмэх</h1>
            </div>
            <div class="col">
                <?= $this->Html->link(__('Мэдээний жагсаалт харах'), ['action' => 'list'], ['class'=>'btn btn-info float-right mb-4']) ?>
            </div>
        </div>
        <?= $this->Form->create($news) ?>
        <fieldset>
            <?php
                echo $this->Form->input('title',  array('type'=>'text','label' => "Гарчиг",'class'=>"w-100 form-control mb-4"));
                echo $this->Form->input('placeoforigin',  array('type'=>'text','label' => "Эх сурвалж",'class'=>"w-100 form-control mb-4"));
                echo $this->Form->input('category', array(
                    'type'=>'select',
                    'label'=>'Бүлэг',
                    'options'=>array(
                        "Улс төр"=>"Улс төр",
                        "Нийгэм"=>"Нийгэм",
                        "Спорт"=>"Спорт",
                        "Эрүүл мэнд"=>"Эрүүл мэнд",
                        "Тойм"=>"Тойм",
                        "Нийтлэл"=>"Нийтлэл",
                        "Боловсрол"=>"Боловсрол",
                        "Дэлхийд"=>"Дэлхийд",
                        "Түүх"=>"Түүх",
                        "Танин мэдэхүй"=>"Танин мэдэхүй"
                    ),
                    'class'=>"w-100 form-control mb-4"
                    // 'empty'=>'Choose'
                    // 'value'=>2
                ));
                echo $this->Form->input('body',  array('type'=>'text','class'=>"w-100 form-control mb-4 d-none"));
            ?>
            <div id="summernote"></div>
        </fieldset>
        <br/>
        <?= $this->Form->button(__('Нэмэх'),['class'=>'btn btn-success newsAdd']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>





