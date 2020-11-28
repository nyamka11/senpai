<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
<br/>
<div class="row container border m-auto mt-5 mb-5 pt-5 pb-5 bg-white rounded">
    <?php
            $photoUrl = $this->Url->image('noneProfile.png');
            if($user->profile_photo != "")  {
                $photoUrl = $user->profile_photo;
            }
        ?>

    <div class="col-md-3 col-sm-12 d-flex justify-content-center" style="border-right:1px dashed #cacaca">
        <div class="text-center">
            <img src=<?= $photoUrl ?> style="height:200px; border-radius: 50%" class="img-thumbnail"  alt="...">
            <br/><br/>
            <span><b><?= h($user->lastname) !="" ? h($user->lastname) : "[?]" ?> <?= h($user->firstname) ?></b></span><br>
            <span class="text-muted"><?= h($user->email) ?></span></br>
            <span><?= h($user->username) ?></span>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 pl-5">
        <h3>Хэрэглэгчийн</h3>
        <br/>
        <span class="text-muted"><?= __('User Name') ?></span>
        <p><?= h($user->username) !="" ? h($user->username) : "[?]" ?></p>

        <div class="row">
            <div class="col-6">
                <span class="text-muted"><?= __('Lastname') ?></span>
                <p><?= h($user->firstname) !="" ? h($user->firstname) : "[?]" ?></p>
               
            </div>
            <div class="col-6">
                <span class="text-muted"><?= __('Firstname') ?></span>
                <p><?= h($user->lastname) !="" ? h($user->lastname) : "[?]" ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <span class="text-muted"><?= __('Birthday') ?></span>
                <p><?= h($user->birthday) !="" ? h($user->birthday) : "[?]"  ?></p>
            </div>
            <div class="col-6">
                <span class="text-muted"><?= __('Gender') ?></span>
                <p><?php 
                    $gender =array(""=>"[?]","M"=>"Эр","F"=>"Эм","I"=>"Бусад");
                    echo $gender[$user->gender];
                ?></p>
            </div>
        </div>

        <span class="text-muted"><?= __('Country') ?></span>
        <p><?= h($user->country) !="" ? h($user->country) : "[?]" ?></p>
        <span class="text-muted"><?= __('Postal') ?></span>
        <p><?= h($user->postal) !="" ? h($user->postal) : "[?]"  ?></p>
        <span class="text-muted"><?= __('Address') ?></span>
        <p><?= h($user->address) !="" ? h($user->address) : "[?]" ?></p>
        <span class="text-muted"><?= __('Phone') ?></span>
        <p><?= h($user->phone) !="" ? h($user->phone) : "[?]" ?></p>
        <span class="text-muted"><?= __('Email') ?></span>
        <p><?= h($user->email) !="" ? h($user->email) : "[?]" ?></p>
        <br/><br/>
        <div class="d-flex justify-content-center">
            <?= $this->Html->link(__('Хувийн мэдээллээ шинэчлэх'), ['action' => 'edit', $user->user_id],['class'=>'btn btn-info']) ?>
        </div>
        <br/>
    </div>
    <div style="border-left:1px dashed #cacaca" class="col-md-3 col-sm-12 pl-5">
        <h3>Системийн</h3><br/>
        <span class="text-muted"><?= __('Системийн хандалт') ?></span>
        <!-- <p><?= h($user->role) ?></p> -->
        <p>Super Admin</p>
        <span class="text-muted"><?= __('Анх бүртгэгдсэн онгоо') ?></span>
        <p><?= h($user->ins_date) ?></p>
        <span class="text-muted"><?= __('Мэдээлэл шинэчилсэн онгоо') ?></span>
        <p><?= h($user->upd_date) !="" ? h($user->upd_date) : "[?]" ?></p>

    </div>
</div>
<br/>