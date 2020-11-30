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
                                                    <option value="0">Төрөл сонгох</option>
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
</style>
