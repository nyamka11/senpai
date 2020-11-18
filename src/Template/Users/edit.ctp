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

<div class="row container m-auto border p-0">
    <div class="col-sm-12 col-md-3 mt-30 mb-30" style="border-right:1px dashed #cacaca">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php
                    $photoUrl = $this->Url->image('noneProfile.png');
                    if($user->profile_photo != "")  {
                        $photoUrl = $user->profile_photo;
                    }
                ?>
                <img src=<?= $photoUrl ?> style="width:200px; border-radius:50%;" alt="..." class="img-thumbnail">
                <input type="file" name="upload_image" id="upload_image" class="d-none" accept="image/*" /><br/>
            </div>
            <div class="col-12 d-flex justify-content-center mt-2">
                <button id="addPhoto" class="btn btn-primary">Зураг шинэчлэх</button>
                <button id="deletePhoto" class="btn btn-secondary ml-1">Устгах</button>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 mt-30 mb-30">
        <h3>Хувийн мэдээлэл засах</h3><br/>
        <?= $this->Form->create($user) ?>
            <?php echo $this->Form->control('username', ['class' => 'form-control mb-15']); ?>
            <div class="row">
                <div class="col-2 pt-2"><br/>
                    <input id="toggle-event" type="checkbox" data-toggle="toggle" />
                </div>
                <div class="col-4">
                    <label for="password">Нууц үг</label>
                    <input type="password" name="password" class="form-control mb-15" id="password" readonly/>
                </div>
                <div class="col-6">
                    <label for="repassword">Нууц үг давтах</label>
                    <input type="password" class="form-control mb-15" id="repassword" readonly/>
                </div>
            </div>
            <div class="row">
                <div class="col-6"><?php echo $this->Form->control('lastname', ['class' => 'form-control mb-15']); ?></div>
                <div class="col-6"><?php echo $this->Form->control('firstname', ['class' => 'form-control mb-15']); ?></div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="birthday">Төрсөн өдөр</label></br>
                    <select name="birthday[year]">
                        <option value="">Он</option>
                        <?php
                            for($i=date('Y')-10; $i>=1930; $i--)  {
                                $selected = $user->birthday->year == $i ? "selected" : "";
                                echo '<option value='.$i.' '.$selected.' >'.$i.'</option>';
                            }
                        ?>
                    </select>
                    <select name="birthday[month]">
                        <option value="">Сар</option>
                        <?php
                            for($i=1; $i<=12; $i++)  {
                                $selected = $user->birthday->month == $i ? "selected" : "";
                                echo '<option value='.$i.' '.$selected.' >'.$i.'-р сар</option>';
                            }
                        ?>
                    </select>
                    <select name="birthday[day]">
                        <option value="">Өдөр</option>
                        <?php
                            for($i=1; $i<=31; $i++)  {
                                $selected = $user->birthday->day == $i ? "selected" : "";
                                echo '<option value='.$i.' '.$selected.' >'.$i.'</option>';
                            }
                        ?>
                    </select>

                </div>
                <div class="col-6">
                    <label for="repassword">Хүйс</label>
                    <select name="gender" class="w-100">
                        <option value=""></option>
                        <?php 
                            $gender =array("M"=>"Эр","F"=>"Эм","I"=>"Бусад");
                            foreach($gender as $key=>$item)  {
                                $selected = $user->gender == $key ? "selected" : "";
                                echo '<option value='.$key.' '.$selected.' >'.$item.'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <?php
                echo $this->Form->control('country', ['class' => 'form-control mb-15']);
                echo $this->Form->control('postal', ['class' => 'form-control mb-15']);
                echo $this->Form->control('address', ['class' => 'form-control mb-15']);
                echo $this->Form->control('phone', ['class' => 'form-control mb-15']);
                echo $this->Form->control('email', ['class' => 'form-control mb-15']);
                echo $this->Form->control('profile_photo', ['class' => 'form-control upi d-none', 'type'=>'text', 'label' => false]);
            ?> 
        <?= $this->Form->button(__('Save'),['class'=>'btn btn-success mt-3']) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="col-sm-12 col-md-3 mt-30 mb-30" style="border-left:1px dashed #cacaca">
        <div class="text-center social-btn">
            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
            <a href="#" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>
			<a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
        </div>
    </div>
</div>

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
                <div id="image_demo" class="m-auto" style="width:305px;"></div>
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
    $(function()  {
        var isPassChange = false;
        $('#toggle-event').change(function() {
            if($(this).prop('checked'))  {
                isPassChange = true;
                $("#password").removeAttr("readonly").attr("name","password");
                $("#repassword").removeAttr("readonly");
            }
            else  {
                isPassChange = false;
                $("#password").attr("readonly",true).val("").removeAttr("name");
                $("#repassword").attr("readonly",true).val("");
            }
        }).change();

        $("form").submit(function(e)  {
            if($("#password").val() != $("#repassword").val() && isPassChange)  {
                alert("Нүүц үг буруу байна!");
                return false;
            }

            if($("#password").val() == "" && $("#repassword").val() == "" && isPassChange)  {
                alert("Нууц үг хоосон байна!");
                return false;
            }
        });

        $('.input.date label').css({width: "100%"});

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width:200,
                height:200,
                type:'circle'
            },
            boundary:{
                width:300,
                height:300
            }
        });

        $('#addPhoto').click(function()  {
            $('#upload_image').val("").click();
        });

        $('#deletePhoto').click(function()  {
            $(".upi").val("");
            $("#upload_image").val("");
            $('.img-thumbnail').attr('src',"<?php echo $this->Url->image('noneProfile.png'); ?>");
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

        console.log($("select[name='birthday[year]']").html());

        $('select').css({
            paddingTop:5,
            paddingLeft: 5,
            paddingBottom: 5,
            paddingRight: 2,
            marginBottom: 15,
            marginRight: 3,
            marginLeft: 0
        });
    });
</script>