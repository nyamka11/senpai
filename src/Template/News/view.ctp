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

                                    

<!-- Breadcrumb Area Start Here -->
<section class="breadcrumbs-area" style="background-image: url(<?= $this->Url->build('https://davidfrenchoriginals.com/wp-content/uploads/2019/02/central-as-jpg-cleaned-cropped-best-1920x134.jpg') ?>);">
    <div class="container">
        <div class="breadcrumbs-content">
            <h1>Сурталчилгаа байршуулах</h1>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End Here -->
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
                        <li><a href="#"><span>Нийтлэсэн</span> Nyamka</a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= $news->date ?></a></li>
                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>202</a></li>
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
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                <div class="topic-border color-cod-gray mb-5">
                        <div class="topic-box-lg color-cod-gray">Сурталчилгаа</div>
                    </div>
                    <div class="ne-banner-layout1 text-center">
                        <a href="#">
                            <img src=<?= $this->Url->build('https://www.tysonfoodservice.com/sites/default/files/2019-08/TYS-29403-NACS-images-resizes-370x278.jpg') ?>  alt="ad" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-5">
                        <div class="topic-box-lg color-cod-gray">Сүүлд нэмэгдсэн мэдээ</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                            <div class="mt-25 position-relative">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Nature</div>
                                </div>
                                <a href="single-news-1.html" class="mb-10 display-block img-opacity-hover">
                                    <img src=<?= $this->Url->build('img/news/news171.jpg') ?> alt="ad" class="img-fluid m-auto width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art.Rosie TBeauty Habits.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                            <div class="mt-25 position-relative">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Application</div>
                                </div>
                                <a href="single-news-1.html" class="mb-10 display-block img-opacity-hover">
                                    <img src=<?= $this->Url->build('img/news/news172.jpg') ?>  alt="ad" class="img-fluid m-auto width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art.Rosie TBeauty Habits.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                            <div class="mt-25 position-relative">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Life Style</div>
                                </div>
                                <a href="single-news-1.html" class="mb-10 display-block img-opacity-hover">
                                    <img src=<?= $this->Url->build('img/news/news173.jpg') ?>  alt="ad" class="img-fluid m-auto width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art.Rosie TBeauty Habits.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                            <div class="mt-25 position-relative">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Technology</div>
                                </div>
                                <a href="single-news-1.html" class="mb-10 display-block img-opacity-hover">
                                    <img src=<?= $this->Url->build('img/news/news174.jpg') ?>  alt="ad" class="img-fluid m-auto width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art.Rosie TBeauty Habits.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                            <div class="mt-25 position-relative">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Accessories</div>
                                </div>
                                <a href="single-news-1.html" class="mb-10 display-block img-opacity-hover">
                                    <img src=<?= $this->Url->build('img/news/news175.jpg') ?>  alt="ad" class="img-fluid m-auto width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art.Rosie TBeauty Habits.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                            <div class="mt-25 position-relative">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Model</div>
                                </div>
                                <a href="single-news-1.html" class="mb-10 display-block img-opacity-hover">
                                    <img src=<?= $this->Url->build('img/news/news176.jpg') ?>  alt="ad" class="img-fluid m-auto width-100">
                                </a>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="single-news-1.html">Rosie Huntington Whitl Habits Career Art.Rosie TBeauty Habits.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">Newsletter</div>
                    </div>
                    <div class="newsletter-area bg-primary">
                        <h2 class="title-medium-light size-xl pl-30 pr-30">Subscribe to our mailing list to get the new updates!</h2>
                        <img src=<?= $this->Url->build('img/banner/newsletter.png') ?>  alt="newsletter" class="img-fluid m-auto mb-15">
                        <p>Subscribe our newsletter to stay updated</p>
                        <div class="input-group stylish-input-group">
                            <input type="text" placeholder="Enter your mail" class="form-control">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-25">
                        <div class="topic-box-lg color-cod-gray">Tags</div>
                    </div>
                    <ul class="sidebar-tags">
                        <li>
                            <a href="#">Apple</a>
                        </li>
                        <li>
                            <a href="#">Business</a>
                        </li>
                        <li>
                            <a href="#">Architecture</a>
                        </li>
                        <li>
                            <a href="#">Gadgets</a>
                        </li>
                        <li>
                            <a href="#">Software</a>
                        </li>
                        <li>
                            <a href="#">Microsoft</a>
                        </li>
                        <li>
                            <a href="#">Robotic</a>
                        </li>
                        <li>
                            <a href="#">Technology</a>
                        </li>
                        <li>
                            <a href="#">Others</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">Most Reviews</div>
                    </div>
                    <div class="position-relative mb30-list bg-body">
                        <div class="topic-box-top-xs">
                            <div class="topic-box-sm color-cod-gray mb-20">Apple</div>
                        </div>
                        <div class="media">
                            <a class="img-opacity-hover" href="single-news-1.html">
                                <img src=<?= $this->Url->build('img/news/news117.jpg') ?> alt="news" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark mb-none">
                                    <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mb30-list bg-body">
                        <div class="topic-box-top-xs">
                            <div class="topic-box-sm color-cod-gray mb-20">Gadgets</div>
                        </div>
                        <div class="media">
                            <a class="img-opacity-hover" href="single-news-2.html">
                                <img src=<?= $this->Url->build('img/news/news118.jpg') ?> alt="news" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>June 06, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark mb-none">
                                    <a href="single-news-3.html">Can Be Monit roade year with Program.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mb30-list bg-body">
                        <div class="topic-box-top-xs">
                            <div class="topic-box-sm color-cod-gray mb-20">Software</div>
                        </div>
                        <div class="media">
                            <a class="img-opacity-hover" href="single-news-3.html">
                                <img src=<?= $this->Url->build('img/news/news119.jpg') ?> alt="news" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>August 22, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark mb-none">
                                    <a href="single-news-1.html">Can Be Monit roade year with Program.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mb30-list bg-body">
                        <div class="topic-box-top-xs">
                            <div class="topic-box-sm color-cod-gray mb-20">Tech</div>
                        </div>
                        <div class="media">
                            <a class="img-opacity-hover" href="single-news-1.html">
                                <img src=<?= $this->Url->build('img/news/news120.jpg') ?> alt="news" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark mb-none">
                                    <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mb30-list bg-body">
                        <div class="topic-box-top-xs">
                            <div class="topic-box-sm color-cod-gray mb-20">Ipad</div>
                        </div>
                        <div class="media">
                            <a class="img-opacity-hover" href="single-news-1.html">
                                <!-- <img src=<?= $this->Url->build('img/news/news121.jpg') ?>alt="news" class="img-fluid"> -->
                            </a>
                            <div class="media-body">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark mb-none">
                                    <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
