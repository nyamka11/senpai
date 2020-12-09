<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertisement $advertisement
 */
?>

<?= $this->element('topAds') ?> 
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
                <h1><?=$advertisement->title?></h1>
                <?php  
                    if($advertisement->photo !="" )  {
                        echo "<div class='m-auto'><img src=".$advertisement->photo." /></div>";
                    }
                ?>
                <div class="w-100 rowFooder mt-10 mb-5">
                    <ul class="post-info-dark mt-2">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?= $advertisement->name ?></a></li>
                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?= (int) $advertisement->read_count ?></a></li>
                        <li><a href="#"><i class="fa fa-history"></i><?= $this->global->getTimeAgo($advertisement->createDate) ?></a></li>
                    </ul>
                </div>
                <hr/>
                <p><?=$advertisement->adsBody?></p>
                <br/>
                <div class="comments-area">
                    <h2 class="title-semibold-dark size-xl border-bottom mb-10 pb-10">Сэтгэгдэл (<?= count($advertisement->cmmt)?>)</h2>
                    <?php foreach($advertisement->cmmt as $comment):  ?>
                    <div id="commentBox">
                        <div class="pl-4">
                            <b><font size="2"><?= $comment->authorName ?></font></b>
                            <small class="text-muted">&nbsp;&nbsp;[ <?=  $this->global->getTimeAgo($comment->createDate) ?> ]</small><br/>
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
                    <h2 class="title-semibold-dark size-xl mb-20">Сэтгэгдэл үлдээх</h2>
                    <?= $this->Form->create($advertisement,['action'=>'commentadd', "class"=> "commnetForm"]) ?>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input placeholder="Нэр" name="author_name" class="form-control" type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div id="lengthCtr"><cnt>0</cnt>/255</div>
                                    <textarea placeholder="Сэтгэгдэл" required name="body" class="commentTextarea textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-none">
                                    <?= $this->Form->button(__('Нийтлэх'),['class'=>'commentPost btn-ftg-ptp-45']) ?>

                                </div>
                            </div>
                        </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <?= $this->element('rightWindow') ?> 
        </div>
    </div>
</section>

<style>
    .media:hover  {
        background-color:#f8f9fa;;
        cursor:pointer;
    }
    .adImg  {
        border:1px solid #cacaca;
    }
    ul.post-info-dark li a  {
        color: #464646;
        font-size: 13px;
    }
    .adsBody {
        font-size: 13px;
        line-height: 15px;
        color: #444444;
        max-height: 63px;
        overflow: hidden;
    }
</style>
