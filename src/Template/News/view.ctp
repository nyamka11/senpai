<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */

$newsData = ['Дэлхийд','Эрүүл мэнд'];
foreach($news as $item)  {
    if($item->category == "Дэлхийд")  {
        $newsData['Дэлхийд'] = array($item);
    }

    if($item->category == "Эрүүл мэнд")  {
        $newsData['Эрүүл мэнд'] = array($item);
    }

    if($item->category == "Улс төр")  {
        $newsData['Улс төр'] = array($item);
    }

    if($item->category == "Нийгэм")  {
        $newsData['Нийгэм'] = array($item);
    }
}

function timeAgo($time_ago) {
    $t = explode(" ",$time_ago);
    $y = explode(".",$t[0]);
    $d = explode(":",$t[1]);

    $time_ago = mktime($d[0], $d[1], 0, $y[1], $y[2], $y[0]);
    $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
    $time  = time() - $time_ago;

    switch($time):
    // seconds
    case $time <= 60;
    return 'дөнгөж сая';
    // minutes
    case $time >= 60 && $time < 3600;
    return (round($time/60) == 1) ? '1 минутын өмнө' : round($time/60).' минутын өмнө';
    // hours
    case $time >= 3600 && $time < 86400;
    return (round($time/3600) == 1) ? '1 цагийн өмнө' : round($time/3600).' цагийн өмнө';
    // days
    case $time >= 86400 && $time < 604800;
    return (round($time/86400) == 1) ? '1 өдрийн өмнө' : round($time/86400).' өдрийн өмнө';
    // weeks
    case $time >= 604800 && $time < 2600640;
    return (round($time/604800) == 1) ? '1 хоногийн өмнө' : round($time/604800).' 7 хоногийн өмнө';
    // months
    case $time >= 2600640 && $time < 31207680;
    return (round($time/2600640) == 1) ? '1 сарын өмнө' : round($time/2600640).' сарын өмнө';
    // years
    case $time >= 31207680;
    return (round($time/31207680) == 1) ? '1 жилийн өмнө' : round($time/31207680).' жилийн өмнө' ;

    endswitch;
}
?>

<?= $this->element('topAds') ?> 
<!-- News Details Page Area Start Here -->
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
                <div class="news-details-layout1">
                <h2 class="title-semibold-dark size-c30"><?= $news->title ?></h2>
                    
                    <div class="position-relative mb-30 d-flex justify-content-center">
                        <img src=<?= $news->newsImg == "" ? "img/news/news177.jpg" : $news->newsImg ?> alt="news-details" class="img-fluid">
                        <div class="topic-box-top-sm">
                            <div class="topic-box-sm color-cinnabar mb-20"><?= $news->category ?></div>
                        </div>
                    </div>
                    <ul class="post-info-dark mb-30">
                        <li><a href="#"><span>Нийтлэсэн: </span><?= $news->author_name ?></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= timeAgo($news->date) ?></a></li>
                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?= $news->read_count ?></a></li>
                        <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>20</a></li>
                    </ul>
                    <br/>


                    <?= html_entity_decode($news->body, ENT_QUOTES, 'UTF-8') ?>


                    <div class="comments-area"><br/>
                        <h3 class="title-semibold-dark size-xl border-bottom mb-10 pb-10">Сэтгэгдэл (<?= count($news->cmmt)?>)</h3>
                        <?php foreach($news->cmmt as $comment): ?>
                        <div id="commentBox">
                            <div class="pl-4">
                                <b><?= $comment->authorName ?></b>,
                                <small><?=  timeAgo($comment->createDate) ?></small><br/>
                                <small><?= $comment->commentBody ?></small>
                            </div>
                            <div id="feedBack" commentId=<?= $comment->id ?> class="ml-4 mt-2 overflow-hidden">
                                <div id="like" class="float-left"><cnt><?= $comment->likeCnt > 0 ? $comment->likeCnt : 0 ?></cnt>&nbsp;<i class="fa fa-thumbs-up"></i></div>
                                <div id="unlike" class="float-left ml-5"><i class="fa fa-thumbs-down"></i>&nbsp;<cnt><?= $comment->unlikeCnt > 0 ? $comment->unlikeCnt : 0  ?></cnt></div>
                                <div id="replay" class="float-left ml-5"><i class="fa fa-share"></i><small>&nbsp;&nbsp;Хариулах</small></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="leave-comments mt-50">
                        <h2 class="title-semibold-dark size-xl mb-40">Сэтгэгдэл үлдээх</h2>
                        <?= $this->Form->create($news,['action'=>'commentadd']) ?>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input placeholder="Нэр" name="author_name" class="form-control" type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea placeholder="Сэтгэгдэл" required name="body" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-none">
                                        <?= $this->Form->button(__('Нийтлэх'),['class'=>'btn-ftg-ptp-45']) ?>
    
                                    </div>
                                </div>
                            </div>
                        <?= $this->Form->end() ?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <?= $this->element('rightWindow') ?> 
        </div>
    </div>
</section>
