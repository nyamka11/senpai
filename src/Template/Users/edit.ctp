<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js" integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg==" crossorigin="anonymous" />

<div class="row container m-auto mt-5 pt-4">
    <div class="col-sm-12 mb-5 p-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <?php
                            $photoUrl = "https://history.ucr.edu/sites/g/files/rcwecm1916/files/styles/form_preview/public/blank-profile-picture-png.png?itok=MQ-iPuNG";
                            if($user->profile_photo != "")  {
                                $photoUrl = $user->profile_photo;
                            }
                        ?>
                        <img src=<?= $photoUrl ?> style="width:200px" alt="..." class="img-thumbnail">
                        <input type="file" name="upload_image" id="upload_image" class="d-none" accept="image/*" /><br/>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-2">
                        <button id="addPhoto" class="btn btn-primary">Зураг шинэчлэх</button>
                        <button id="deletePhoto" class="btn btn-secondary ml-1">Устгах</button>
                    </div>
                </div>
                    <?= $this->Form->create($user) ?>
                    <?php
                        echo $this->Form->control('username', ['class' => 'form-control']);
                        // echo $this->Form->control('password', ['class' => 'form-control']);
                        echo $this->Form->control('lastname', ['class' => 'form-control']);
                        echo $this->Form->control('firstname', ['class' => 'form-control']);
                        echo $this->Form->control('birthday', ['empty' => true]);
                        echo $this->Form->control('country', ['class' => 'form-control']);
                        echo $this->Form->control('postal', ['class' => 'form-control']);
                        echo $this->Form->control('address', ['class' => 'form-control']);
                        echo $this->Form->control('phone', ['class' => 'form-control']);
                        echo $this->Form->control('email', ['class' => 'form-control']);
                        // echo $this->Form->control('gender', ['class' => 'form-control']);
                        echo $this->Form->control('profile_photo', ['class' => 'form-control upi d-none', 'type'=>'text', 'label' => false]);
                    ?> 
                <?= $this->Form->button(__('Save'),['class'=>'btn btn-success mt-3']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>



<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Upload & Crop Image</h4>
            </div>
            <div class="modal-body">
            <div class="row">
        <div class="col-md-8 text-center">
            <div id="image_demo" style="width:350px; margin-top:30px"></div>
        </div>
        <div class="col-md-4" style="padding-top:30px;">
            <br />
            <br />
            <br/>
            <button class="btn btn-success crop_image">Crop & Upload Image</button>
        </div>
        </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
 $(function()  {

    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width:200,
            height:200,
            type:'square' //circle
        },
        boundary:{
        width:300,
        height:300
        }
    });

    $('#addPhoto').click(function()  {
        $('#upload_image').click();
    });

    $('#deletePhoto').click(function()  {
        $(".upi").val("");
        $('.img-thumbnail').attr('src',"https://history.ucr.edu/sites/g/files/rcwecm1916/files/styles/form_preview/public/blank-profile-picture-png.png?itok=MQ-iPuNG");
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
            // $.ajax({
            //     url:"upload.php",
            //     type: "POST",
            //     data:{"image": response},
            //     success:function(data)  {
            //         $('#uploadimageModal').modal('hide');
            //         $('#uploaded_image').html(data);
            //     }
            // });
        })
    });

    $('select').css({
        height: 30,
        marginTop: 10,
        marginLeft: 5
    });
 });
</script>