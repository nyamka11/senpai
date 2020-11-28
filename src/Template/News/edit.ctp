<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<?= $this->Html->script('summernote.min.js') ?>
<?= $this->Html->script('croppie.min.js') ?>
<?= $this->Html->css('croppie.css') ?>
<br/>
<div class="row container m-auto mt-5 mb-5 pb-4 bg-white rounded">
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
                echo $this->Form->input('title',  array('type'=>'text','label' => "Гарчиг",'class'=>"w-100 form-control mb-4 form-control-lg"));
                echo $this->Form->input('placeoforigin',  array('type'=>'text','label' => "Эх сурвалж",'class'=>"w-100 form-control mb-4 form-control-lg"));

                $itemsValue="";
                $cotegoryItems=['Улс төр','Нийгэм','Спорт','Эрүүл мэнд','Нийтлэл','Боловсрол','Дэлхийд','Түүх','Танин мэдэхүй'];
                foreach($cotegoryItems as $item)  {
                    $selected = ($news->category == $item) ? 'selected' : '';
                    $itemsValue .=  '<option value="'.$item.'"  '.$selected.'>'.$item.'</option>';
                }

                echo 
                '<label for="category">Хамаарах бүлэг</label>
                <select name="category" id="category" class="w-100 form-control mb-5 form-control-lg" style="height:35px;">
                    '.$itemsValue.'
                </select>';

                echo $this->Form->input('body',  array('type'=>'text','class'=>"w-100 form-control mb-4 d-none", "label"=>false));
            ?>
            <label>Мэдээний нүүрний зураг</label><br/><br/>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div id="picNone" style=<?= $news->newsImg == "" ? "display:block;" : "display:none;" ?> ></div>
                    <img class="img-thumbnail" style=<?= $news->newsImg == "" ? 'display:none;' : 'display:block;' ?> alt="..." src=<?= $news->newsImg ?> />
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a id="pictureAdd" class="btn btn-primary text-light mt-3">Зураг оруулах</a>
                    <a id="pictureCancel" class="btn btn-secondary text-light mt-3 ml-3">Цуцлах</a>
                    <input type="file" id="newsImg" class="w-100 form-control d-none" accept="image/*" />
                    <input type="text" id="news-image" name="newsImg" class="d-none" value=<?= $news->newsImg ?> />
                </div>
            </div>
            <br/>
            <div id="summernote"></div>
        </fieldset>
        <br />
        <?= $this->Form->button(__('Save'),['class'=>'btn btn-success newsAdd w-25 btn-lg']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<br/>

<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Профайл зураг оруулах</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br/>
                        <div id="image_demo" class="m-auto" style=""></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success crop_image">Зургийг тайрч, оруулах</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Цонхыг хаах</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        var cropImgSett = {
            width: 0,
            height: 0
        };

        function destroyImg()  {
            $('.img-thumbnail').attr('src','').hide();
            $("#picNone").show()
            $("#news-image").val("");
        };

        let isFirst = false;
        $("#category").on('change',function(e)  {
            if(!isFirst) isFirst = true;
            else  destroyImg();
            
            switch($(this).val())  {
                case "Дэлхийд":
                    cropImgSett.width = 730;
                    cropImgSett.height = 572;
                    break;
                case "Нийгэм":
                    cropImgSett.width = 730;
                    cropImgSett.height = 577;
                    break;
                case "Спорт":
                    cropImgSett.width = 730;
                    cropImgSett.height = 577;
                    break;
                case "Эрүүл мэнд":
                    cropImgSett.width = 820;
                    cropImgSett.height = 316;
                    break;
                case "Нийтлэл":
                    cropImgSett.width = 730;
                    cropImgSett.height = 577;
                    break;
                case "Боловсрол":
                    cropImgSett.width = 730;
                    cropImgSett.height = 577;
                    break;
                case "Түүх":
                    cropImgSett.width = 730;
                    cropImgSett.height = 577;
                    break;
                case "Улс төр":
                    cropImgSett.width = 730;
                    cropImgSett.height = 577;
                    break;
                default:
                // code block
            };

            $("#picNone").html("<div class='ml-5'><h2>"+cropImgSett.width+"x"+cropImgSett.height+"</h2></div>")
            $(".modal-dialog").css("max-width", cropImgSett.width + 200).width(cropImgSett.width + 200);
            $(".modal-content").width(cropImgSett.width + 200);
            $('.img-thumbnail').width(cropImgSett.width).height(cropImgSett.height);

            $('#image_demo').croppie('destroy');
            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                    width: cropImgSett.width,
                    height: cropImgSett.height,
                    type: 'square'
                },
                boundary: {
                    width: cropImgSett.width + 100,
                    height: cropImgSett.height + 100
                }
            });

            $('#picNone').animate({ 
                height: cropImgSett.height,
                width: cropImgSett.width
            });
        }).change();

        $('#pictureAdd').click(function()  {
            $('#newsImg').val("").click();
        });

        $('#pictureCancel').click(function()  {
            destroyImg();
        });

        $('#newsImg').on('change', function()  {
            var reader = new FileReader();
            reader.onload = function(event)  {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function()  {
                console.log('jQuery bind complete');
            });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event)  {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response)  {
                $('.img-thumbnail').show().attr('src',response);
                $("#news-image").val(response);
                $('.close').click();
                $("#picNone").hide();
            });
        });

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
        background:url(<?= $this->Url->image('svg/undraw_images_aef7.svg')?>) no-repeat center center; 
        background-size: 70% 40%;
        border:2px dashed gray; 
        border-radius: 4px;
    }
    #image  {
        border: 1px dashed gray;
        display:none; 
    }
</style>