<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertisement $advertisement
 */
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js" integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg==" crossorigin="anonymous" />

<?= $this->element('topAds') ?> 
<!-- News Details Page Area Start Here -->
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
                <div class="news-details-layout1">
                    <h2 class="title-semibold-dark size-c30">Зар оруулах</h2>
                    <?= $this->Form->create($advertisement) ?>
                    <fieldset>
                        <div class="form-group">
                            <label for="name">Нэр<font color="red"> *</font></label>
                            <input type="text" id="name" name="name" class="w-100 form-control form-control-lg" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Мэйл хаяг<font color="red"> *</font></label>
                            <input type="email" id="email" name="email" class="w-100 form-control form-control-lg"required />
                        </div>
                        <div class="form-group">
                            <label for="phone">Утас<font color="red"> *</font></label>
                            <input type="text" id="phone" name="phone" class="w-100 form-control form-control-lg" required />
                        </div>
                        <div class="form-group">
                            <label for="adsBody">Зураг<font color="red"> *</font></label>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <?php
                                        $photoUrl = $this->Url->image('svg/undraw_images_aef7.svg');
                                        // if($user->profile_photo != "")  {
                                        //     $photoUrl = $user->profile_photo;
                                        // }
                                    ?>
                                    <img src=<?= $photoUrl ?> style="width:300px; height:200px; background-size: 70% 40%;" alt="..." class="img-thumbnail">
                                    <input type="file" name="upload_image" id="upload_image" class="d-none" accept="image/*" /><br/>
                                </div>
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button id="addPhoto" class="btn btn-primary btn-lg">Зураг оруулах</button>
                                    <button id="deletePhoto" class="btn btn-secondary ml-1 btn-lg">Устгах</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adsBody">Таны зар<font color="red"> *</font></label>
                            <textarea id="adsBody" name="adsBody" class="w-100 form-control form-control-lg" rows="5" required ></textarea>
                        </div>
                    </fieldset>
                    <?= $this->Form->button(__('+ Зар байршуулах'),['class'=>'btn btn-success btn-lg']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <?= $this->element('rightWindow') ?> 
        </div>
    </div>
</section>

<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Зураг оруулах</h4>
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
                <div class="btn btn-success crop_image">Зургийг тайрч, оруулах</div>
                <div class="btn btn-default" data-dismiss="modal">Цонхыг хаах</div>
            </div>
        </div>
    </div>
</div>

<style>
    .img-thumbnail  {
        background:url(<?= $this->Url->image('svg/undraw_images_aef7.svg')?>) no-repeat center center; 
        background-size: 70% 40%;
        border:2px dashed gray; 
        border-radius: 4px;
    }
</style>

<script>
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width:300,
            height:200
            // type:'circle'
        },
        boundary:{
            width:400,
            height:300
        }
    });

    $('#addPhoto').click(function()  {
        $('#upload_image').val("").click();
    });

    $('#deletePhoto').click(function()  {
        $(".upi").val("");
        $("#upload_image").val("");
        $('.img-thumbnail').attr('src',"<?php echo $this->Url->image('svg/undraw_images_aef7.svg'); ?>");
    });

    $('#upload_image').on('change', function()  {
        var reader = new FileReader();
        reader.onload = function (event) {
        $image_crop.croppie('bind', {
            url: event.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
        }
        reader.readAsDataURL(this.files[0]);
        $('#uploadimageModal').modal('show');
    });

    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(response)  {
            $('.img-thumbnail').attr('src',response);
            $('.close').click();
            $(".upi").val(response);
        })
    });

</script>
