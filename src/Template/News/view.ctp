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
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= $news->date ?></a></li>
                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?= $news->read_count ?></a></li>
                        <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>20</a></li>
                    </ul>
                    <br/>
                    <?= html_entity_decode($news->body, ENT_QUOTES, 'UTF-8') ?>
                    <div class="comments-area"><br/>
                        <h2 class="title-semibold-dark size-xl border-bottom mb-40 pb-20">Сэтгэгдэл (10)</h2>
                        <ul>
                            <li>
                                <?php 
                                    $counter = 0;
                                    foreach($news->cmmt as $comment): 
                                    $counter++;
                                ?>
                                    <div class="media media-none-xs">
                                        <div class="media-body comments-content media-margin30">
                                            <h3 class="title-semibold-dark">
                                                <a href="#"><?= $comment->authorName ?> ,<span> <?= $comment->createDate ?></span></a>
                                            </h3>
                                            <p><?= $comment->commentBody ?></p>
                                        </div>
                                    </div>
                                    <div id="feedBack" commentId=<?= $comment->id ?> class="ml-5 overflow-hidden">
                                        <div id="like" class="float-left"><cnt><?= $comment->likeCnt > 0 ? $comment->likeCnt : 0 ?></cnt>&nbsp;<i class="fa fa-thumbs-up"></i></div>
                                        <div id="unlike" class="float-left ml-5"><i class="fa fa-thumbs-down"></i>&nbsp;<cnt><?= $comment->unlikeCnt > 0 ? $comment->unlikeCnt : 0  ?></cnt></div>
                                        <div id="replay" class="float-left ml-5"><i class="fa fa-share"></i><small>&nbsp;&nbsp;Хариулах</small></div>
                                    </div>
                                    <?php echo count($news->cmmt) != $counter ? "<hr/>" : "" ?>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="leave-comments">
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

<style>
    .fa-thumbs-up, .fa-thumbs-down, .fa-share {
        color: gray;
    }
    .fa-thumbs-up:hover, .fa-thumbs-down:hover ,#replay:hover{
        cursor: pointer;
        font-size:17px;
        transition: all 1s ease-out;
        color: black;
    }
</style>

<script>
    $(function()  {

        $("#feedBack #like").click(function()  {
            let cnt = parseInt($("cnt",this).text()) + 1;
            $("cnt",this).text(cnt);
            let commentId = parseInt($(this).parent().attr("commentId"));
            ajaxFeedBack("&type=like&count="+cnt,commentId);
        });

        $("#feedBack #unlike").click(function()  {
            let cnt = parseInt($("cnt",this).text()) + 1;
            $("cnt",this).text(cnt);
            let commentId = parseInt($(this).parent().attr("commentId"));
            ajaxFeedBack("&type=unlike&count="+cnt,commentId);
        });

        function ajaxFeedBack(data,id)  {
            $.ajax({
                type: "GET",
                url: "/news/feedback/"+id,
                data: data,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                },
                success : function(response){
                    console.log(response);
                },
                error: function(e) {
                    console.log(e.responseText);
                }
            });
        }
    });
</script>
