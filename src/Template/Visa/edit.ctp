<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visa $visa
 */
?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row container m-auto mt-5 mb-5">
    <div class="col-12 mb-5 mt-5">
        <div class="row mb-5 pb-5">
            <div class="col">
                <h3 class="float-left"><?=h("Визний мэдээлэл засах")?></h3>
            </div>
            <div class="col">
                <?= $this->Html->link(__('Жагсаалтаар харах'), ['action' => 'list'], ['class'=>'btn btn-info float-right mt-3']) ?>
            </div>
        </div>
        <?= $this->Form->create($visa) ?>
        <fieldset>
            <label for="category">Нэр</label>
            <input type="text" id="type" name="type" value="<?= $visa->type ?>" class="w-100 form-control mb-4" />
            <div id="summernote" class="mt-10"></div>
            <?php  echo $this->Form->input('body',  array('type'=>'text','class'=>"w-100 form-control mb-4 d-none", "label"=>false)); ?>
        </fieldset>
        <br />
        <?= $this->Form->button(__('Хадаглах'),['class'=>'btn btn-success w-25 form-control-lg']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<br/><br/>

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

        let dataCode = $("#body").val();
        $('#summernote').summernote("code", dataCode);
    });
</script>
