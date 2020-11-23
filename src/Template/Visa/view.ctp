<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visa $visa
 */
?>
<?= $this->element('topAds') ?> 
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
                <div class="news-details-layout1">
                    <?= html_entity_decode($visa->body, ENT_QUOTES, 'UTF-8') ?>

                    
                </div>
            </div>
            <?= $this->element('rightWindow') ?> 
        </div>
    </div>
</section>