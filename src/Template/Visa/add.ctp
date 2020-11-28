<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visa $visa
 */
?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<?= $this->Html->script('summernote.min.js') ?>
<br/>
<div class="row container m-auto mt-5 mb-5 bg-white rounded">
    <div class="col-12 mb-5 mt-5">
        <div class="row mb-5 pb-5">
            <div class="col">
                <h1 class="float-left"><?=h("Визний мэдээлэл нэмэх")?></h1>
            </div>
            <div class="col">
                <?= $this->Html->link(__('Жагсаалтаар харах'), ['action' => 'list'], ['class'=>'btn btn-info float-right mt-3']) ?>
            </div>
        </div>
        <?= $this->Form->create($visa) ?>
        <fieldset>
            <label for="category">Нэр</label>
            <input type="text" id="type" name="type" class="w-100 form-control mb-15 form-control-lg" />
            <div id="summernote"></div>
            <input type="text" id="body" name="body" class="w-100 form-control mb-4 d-none" />
        </fieldset>
        <br />
        <?= $this->Form->button(__('Хадаглах'),['class'=>'btn btn-success w-25 form-control-lg']) ?>
        <?= $this->Form->end() ?>
        <br />
    </div>
</div>
<br/>

<script>
    $(function()  {
        $('#summernote').summernote({
            tabsize: 2,
            height: 1000,
            callbacks: {
                onBlur: function()  {
                    let dataCode = $('#summernote').summernote('code');
                    $('#body').val(dataCode);
                }
            }
        });
    });
</script>
