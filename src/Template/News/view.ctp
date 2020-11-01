<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<br/><br/>
<div class="row container m-auto pt-4 mb-5">
    <?= $this->element('newsVerticalList') ?>
    <div class="col-sm-12 col-md-9 pt-5">
        <h2><?= h($news->title) ?></h2>
        <small><span class="text-muted">Бүлэг: </span><?= $news->category ?></small><br/>
        <small><span class="text-muted">Огноо: </span><?= $news->date ?></small><br/>
        <small><span class="text-muted">Эх сурвалж: </span><?= $news->placeoforigin ?></small><br/><br/>
        <h4 class="catName mt-1">SENPAI.COM</h4>
        <div style="height:5px; background-color:#5fcf80; margin:30px 0px 30px 0px;"></div>
        <div id="newsZone"><?= html_entity_decode($news->body, ENT_QUOTES, 'UTF-8') ?></div>
    </div>

    <div class="col-sm-12 col-md-9 pt-5 m-auto">
      <?= $this->Form->input('commentName',  array('type'=>'text','label' => "Нэр",'class'=>"w-50 form-control mb-4")) ?>
      <?= $this->Form->input('commentText',  array('type'=>'textarea','label' => "Сэтгэгдэл",'class'=>"w-100 form-control mb-4")) ?>
      <button class="btn btn-primary mb-5">Сэтгэгдэл нэмэх</button>
    </div>

    <div class="col-sm-12 col-md-9 pt-5 m-auto">
      <div class="card margin">
        <div class="card-body">
          <small>Name </small><br/>
          <small>5 min ago</small><br/>
          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis. </small><br/>
        </div>
      </div>
    </div>
</div>


<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
<div id="preloader"></div>
