<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<!-- <?= $this->Html->css('summernote.min.css') ?> -->
<?= $this->Html->script('summernote.min.js') ?>
<?= $this->Html->script('croppie.min.js') ?>
<?= $this->Html->css('croppie.css') ?>
<br/>
<div class="row container m-auto mt-5 mb-5 bg-white rounded">
    <div class="col-12 mb-5 mt-5">
        <div class="row mb-5 pb-5">
            <div class="col">
                <h1 class="float-left"><?=h("Шинэ мэдээ нэмэх")?></h1>
            </div>
            <div class="col">
                <?= $this->Html->link(__('View news list'), ['action' => 'list'], ['class'=>'btn btn-info float-right mt-3 btn-lg']) ?>
            </div>
        </div>
        <?= $this->Form->create($news) ?>
        <fieldset>
            <?php
                echo $this->Form->input('title',  array('type'=>'text','label' => ['text' => 'Гарчиг', 'class' => ''],'class'=>"w-100 form-control mb-5 form-control-lg"));
                echo $this->Form->input('placeoforigin',  array('type'=>'text','label' => ['text' => 'Эх сурвалж', 'class' => ''],'class'=>"w-100 form-control mb-5 form-control-lg"));
            ?>
            <label for="category" >Хамаарах бүлэг</label>
            <select name="category" id="category" class="w-100 form-control mb-5 form-control-lg" style="height:35px;">
                <option value="Улс төр">Улс төр</option>
                <option value="Нийгэм">Нийгэм</option>
                <option value="Спорт">Спорт</option>
                <option value="Эрүүл мэнд">Эрүүл мэнд</option>
                <option value="Нийтлэл">Нийтлэл</option>
                <option value="Боловсрол">Боловсрол</option>
                <option value="Дэлхийд">Дэлхийд</option>
                <option value="Түүх">Түүх</option>
                <option value="Танин мэдэхүй">Танин мэдэхүй</option>
            </select>
            <input type="text" id="body" name="body" class="w-100 form-control mb-4 d-none" />
            <label>Мэдээний нүүрний зураг</label><br/><br/>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div id="picNone"></div>
                    <img alt="..." class="img-thumbnail d-none">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a id="pictureAdd" class="btn btn-primary text-light mt-3 btn-lg">Зураг оруулах</a>
                    <a id="pictureCancel" class="btn btn-secondary text-light mt-3 ml-3 btn-lg">Цуцлах</a>
                    <input type="file" id="newsImg" class="w-100 form-control d-none" accept="image/*" />
                    <input type="text" id="news-image" name="newsImg" class="d-none" />
                </div>
            </div>
            <br/>
            <label>Мэдээний их бие</label>
            <div id="summernote" class="mt-10"></div>
        </fieldset>
        <br />
        <?= $this->Form->button(__('Мэдээ оруулах'),['class'=>'btn btn-success newsAdd form-control-lg btn-lg w-25']) ?>
        <?= $this->Form->end() ?>
        <br/>
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
                <button class="btn btn-success crop_image btn-lg">Зургийг тайрч, оруулах</button>
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Цонхыг хаах</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function()  {
        var cropImgSett = {
            width: 0,
            height: 0
        };

        function destroyImg()  {
            $('.img-thumbnail').removeAttr('src').addClass('d-none');
            $("#picNone").show();
            $("#news-image").val("");
        };

        $("#category").change(function()  {
            destroyImg();
            
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

            $("#picNone").html("<div class='ml-5 mt-5'><h1>"+cropImgSett.width+"x"+cropImgSett.height+"</h1></div>")
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
                $('.img-thumbnail').attr('src',response).removeClass('d-none');
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
                    let dataCode = $('#summernote').summernote('code');
                    $('#body').val(dataCode);
                }
            }
        });
    });
</script>

<style>
    #picNone  {
        background:url(<?= $this->Url->image('svg/undraw_images_aef7.svg')?>) no-repeat center center; 
        background-size: 70% 40%;
        border:2px dashed gray; 
        border-radius: 4px;
    }
</style>