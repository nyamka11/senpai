<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>

<br/><br/><br/><br/>
<div class="row container m-auto mt-5 pt-4">
    <div class="col-12 shadow mb-5 p-5">
        <div class="row">
            <div class="col">
                <h1 class="float-left">Мэдээ нэмэх цонх</h1>
            </div>
            <div class="col">
                <?= $this->Html->link(__('Мэдээний жагсаалт харах'), ['action' => 'index'], ['class'=>'btn btn-info float-right mb-4']) ?>
            </div>
        </div>
        <?= $this->Form->create($news) ?>
        <fieldset>
            <?php
                echo $this->Form->input('title',  array('type'=>'text','label' => "Гарчиг",'class'=>"w-100 form-control mb-4"));
                echo $this->Form->input('body',  array('type'=>'textarea','label' => "Их бие",'class'=>"w-100 form-control mb-4"));
                echo $this->Form->input('category',  array('type'=>'text','label' => "Хамаарах бүлэг",'class'=>"w-100 form-control mb-4"));
            ?>



<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  </head>
  <body>
    <div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        height: 400,
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });

      var edit = function() {
             $('#summernote').summernote({focus: true});
        };

        var save = function() {
            var markup = $('#summernote').summernote('code');
            $('#summernote').summernote('destroy');
        };
    </script>
  </body>
</html>
        </fieldset>
        <?= $this->Form->button(__('Нэмэх'),['class'=>'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
<button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
<!-- <div class="click2edit">click2edit</div> -->

