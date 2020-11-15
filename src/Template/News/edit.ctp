<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row container m-auto mt-5 mb-5 pb-5">
    <div class="col-12 mb-5 mt-5">
        <div class="row">
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
                    'class'=>"w-100 form-control mb-4",
                    'style'=>"height:33px"
                ));

                echo $this->Form->input('body',  array('type'=>'text','class'=>"w-100 form-control mb-4 d-none", "label"=>false));
            ?>
            <label>Мэдээний зураг</label>
            <div class="row">
                <div class="col-12">
                <?php
                    $isPictureAru = $news->newsImg == "" ? false : true;
                ?>
                    <div id="picNone" <?php echo ($news->newsImg != "") ? "style='display:none;'" : ""; ?> ></div>
                    <img id="image" name="image" <?php echo ($news->newsImg == "") ? "style='display:none;'" : ""; ?> src=<?= $news->newsImg ?> />
                    
                </div>
                <div class="col-12">
                    <a id="pictureAdd" class="btn btn-primary text-light mt-3">Зураг оруулах</a>
                    <a id="pictureCancel" class="btn btn-secondary text-light mt-3">Цуцлах</a>
                    <input type="text" id="newsImg" name="newsImg" class="w-100 form-control d-none" />
                    <input class="fileBtn d-none" type="file" />
                </div>
            </div>
            <br/>
            <div id="summernote"></div>
        </fieldset>
        <br />
        <?= $this->Form->button(__('Save'),['class'=>'btn btn-success newsAdd']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<script>
    $(function() {
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
                    console.log("datadd");
                    let dataCode = $('#summernote').summernote('code');
                    $('#body').val(dataCode);
                    let imgStr = $('.note-editable img:first').attr('src');
                    $("#editForm #image").val(imgStr);
                }
            }
        });

        let dataCode = $("#body").val();
        $('#summernote').summernote("code", dataCode);
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
    }
</style>