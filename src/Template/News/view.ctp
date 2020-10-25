<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<br/><br/>
<div class="row container m-auto pt-4 mb-5">
    <div class="col-12 p-5">
        <h2><?= h($news->title) ?></h2>
        <small><span class="text-muted">Бүлэг: </span><?= $news->category ?></small><br/>
        <small><span class="text-muted">Огноо: </span><?= $news->date ?></small><br/>
        <small><span class="text-muted">Эх сурвалж: </span>IKON.MN</small><br/><br/>
        <h4 class="catName mt-1">SENPAI.COM</h4>
        <div style="height:5px; background-color:#5fcf80; margin:30px 0px 30px 0px;"></div>
        <img src=<?= $this->Url->image('medee.jpg') ?> class="img-fluid border mb-4" alt="Responsive image">
        <?= $this->Text->autoParagraph(h($news->body)); ?>
    </div>
</div>
<br/><br/>
