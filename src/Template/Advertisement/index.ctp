<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advertisement $advertisement
 */
?>


        
<?= $this->Html->css('select2.min.css') ?>
<?= $this->Html->script('select2.min.js') ?>

<?= $this->element('topAds') ?> 
<!-- News Details Page Area Start Here -->
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
                <div class="news-details-layout1">
                    <fieldset>
                        <a href="<?= $this->Url->build(array('controller'=>'Advertisement','action'=>'add')) ?>" class="btn-ftg-ptp-45 text-center w-100">
                            <i class="vc_btn3-icon fa fa-plus"></i>
                            <strong>ЭНД ДАРЖ ЗАРАА ОРУУЛААРАЙ</strong>
                        </a>
                        <form id="archive-search" class="archive-search-box bg-accent item-shadow-1 mt-3">
                                <div class="row tab-space5">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <span class="select2-search select2-search--dropdown">
                                                <input id="sel2input" class="select2-search__field" placeholder="Нэрээр хайх" type="search">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <div class="ne-custom-select">
                                                <select id="ne-categories" class='select2'>
                                                    <option value="0">Бүх төрлөөр</option>
                                                    <option value="1">Sports</option>
                                                    <option value="2">Politics</option>
                                                    <option value="3">Tech</option>
                                                    <option value="4">Travel</option>
                                                    <option value="5">Fashion</option>
                                                    <option value="6">Business</option>
                                                    <option value="7">Food</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-right">
                                        <button type="submit" class="btn-ftg-ptp-40 disabled mb-5"><i class="fa fa-search"></i> Хайх</button>
                                    </div>
                                </div>
                            </form>
                    </fieldset>
                    <!-- <?= $this->Form->button(__('+ Зар байршуулах'),['class'=>'btn btn-success btn-lg']) ?>
                    <?= $this->Form->end() ?> -->

                    <div class="row">
                        <div class="col-12 mb-5">
                            <ul class="list-unstyled">
                                <?php foreach ($advertisement as $advertisement): ?>
                                    <a href="<?= $this->Url->build(array('controller'=>'Advertisement','action'=>'view', $advertisement['id'])) ?>" >
                                <li class="media mt-3">
                                    <img src="<?= $advertisement->photo !="" ? $advertisement->photo : "/img/news/news171.jpg" ?>" alt="..." class="adImg" style="width:140px;">
                                    <div class="media-body w-100">
                                        <h3 class="mt-0 mb-3"><?= $advertisement->title ?></h3>
                                        <div class="adsBody"><?= $advertisement->adsBody ?></div>
                                        <ul class="post-info-dark mt-2">
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?= (int) $advertisement->read_count ?></a></li>
                                            <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>20</a></li>
                                            <li><a href="#"><i class="fa fa-history"></i><?= $this->global->getTimeAgo($advertisement->createDate) ?></a></li>
                                        </ul>
                                    </div>
                                    
                                </li>
                                <hr>
                                </a>
                                <?php endforeach; ?>
                            </ul>
                            
                            <div class="paginator mt-5">
                                <ul class="pagination">
                                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                    <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next(__('next') . ' >') ?>
                                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                                </ul>
                                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->element('rightWindow') ?> 
        </div>
    </div>
</section>


<style>
    #sel2input  {
        border: 1px solid #dcdcdc;
        outline: 0;
        height: 40px;
        margin: -4px 0px 0px 0px;
        padding: 10px;
        font-size: 17px !important;
        color: gray;
    }

    .select2-selection.select2-selection--single  {
        background-color: white;
    }

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
        line-height: 16px;
        color: #444444;
        max-height: 63px;
        overflow: hidden;
    }
</style>
