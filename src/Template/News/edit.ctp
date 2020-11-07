<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row container m-auto mt-5 pt-5 mb-5 pb-5">
    <div class="col-12 mb-5 pt-5 mt-5">
        <div class="row mt-5">
            <div class="col">
                <h1 class="float-left">Мэдээ засах цонх</h1>
            </div>
            <div class="col pt-4">
                <?= $this->Form->postLink( 'Устгах',
                    ['action' => 'delete', $news->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?'), 'class'=> 'btn btn-danger float-right']
                )?>
                <?= $this->Html->link(__('View news list'), ['action' => 'list'], ['class'=>'btn btn-info float-right mr-2']) ?>
            </div>
        </div>
        <br /><br />
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
                
                echo $this->Form->input('summary',  array('type'=>'textarea','label' => "Товч утга",'class'=>"w-100 form-control mb-4"));
                echo $this->Form->input('body',  array('type'=>'text','class'=>"w-100 form-control mb-4 d-none"));
            ?>
            <div id="summernote"></div>
        </fieldset>
        <br />
        <?= $this->Form->button(__('Save'),['class'=>'btn btn-success newsAdd']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<script>
$(function() {
    $('#summernote').summernote("code", $("#body").val());


});
</script>