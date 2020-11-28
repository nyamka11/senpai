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
                        <!-- <a href="<?= $this->Url->build(array('controller'=>'Advertisement','action'=>'add')) ?>" class="btn btn-success btn-lg p-4 w-100">
                            <i class="vc_btn3-icon fa fa-plus"></i>
                            <strong>ЭНД ДАРЖ ЗАРАА ОРУУЛААРАЙ</strong>
                        </a> -->
                    </fieldset>
                    <!-- <?= $this->Form->button(__('+ Зар байршуулах'),['class'=>'btn btn-success btn-lg']) ?>
                    <?= $this->Form->end() ?> -->
                </div>
            </div>
            <?= $this->element('rightWindow') ?> 
        </div>
    </div>
</section>
