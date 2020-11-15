<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row container m-auto mt-5 mb-5">
    <div class="col-12 mb-5 mt-5">
        <div class="row mb-5 pb-5">
            <div class="col">
                <h3 class="float-left"><?=h("Шинэ мэдээ нэмэх")?></h3>
            </div>
            <div class="col">
                <?= $this->Html->link(__('View news list'), ['action' => 'list'], ['class'=>'btn btn-info float-right mt-3']) ?>
            </div>
        </div>
        <?= $this->Form->create($news) ?>
        <fieldset>
            <?php
                echo $this->Form->input('title',  array('type'=>'text','label' => "Гарчиг",'class'=>"w-100 form-control mb-5 form-control-lg"));
                echo $this->Form->input('placeoforigin',  array('type'=>'text','label' => "Эх сурвалж",'class'=>"w-100 form-control mb-5 form-control-lg"));
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
                    'class'=>"w-100 form-control mb-5 form-control-lg",
                    'style'=>"height:33px"
                ));
            ?>
            <input type="text" id="body" name="body" class="w-100 form-control mb-4 d-none" />
            <label>Мэдээний зураг</label>
            <div class="row">
                <div class="col-12">
                    <div id="picNone"></div>
                    <img id="image" name="image" />
                </div>
                <div class="col-12">
                    <a id="pictureAdd" class="btn btn-primary text-light mt-3">Зураг оруулах</a>
                    <a id="pictureCancel" class="btn btn-secondary text-light mt-3">Цуцлах</a>
                    <input type="text" id="newsImg" name="newsImg" class="w-100 form-control d-none" />
                    <input class="fileBtn d-none" type="file" />
                </div>
            </div>
            <br/>
            <div id="summernote" class="mt-10"></div>
        </fieldset>
        <br />
        <?= $this->Form->button(__('Мэдээ нийтлэх'),['class'=>'btn btn-success newsAdd form-control-lg']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<br/><br/>

<script>
    $(document).ready(function()  {
        $("#pictureAdd").click(function()  {
            $(".fileBtn").click();
        });

        $("#pictureCancel").click(function()  {
            $('#newsImg').val("");
            $('#image').attr('src',"").hide();
            $("#picNone").show();
            $(".fileBtn").val("");
        });

        $(":file").change(function()  {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });

        function imageIsLoaded(e)  {
            $("#picNone").hide();
            $('#image').attr('src', e.target.result).show();
            $('#newsImg').val(e.target.result);
        };

        $('#summernote').summernote({
            tabsize: 2,
            height: 1000,
            callbacks: {
                onBlur: function()  {
                    let dataCode = $('#summernote').summernote('code');
                    $('#body').val(dataCode);
                }
            }
        });
    });
</script>

<style>
    #picNone  {
        background:#cacaca url(<?= $this->Url->image('image-solid.svg')?>) no-repeat center center; 
        height:300px; 
        border:1px dashed gray; 
        border-radius: 7px;
    }

    #image  {
        border: 1px dashed gray;
        display:none; 
    }
</style>