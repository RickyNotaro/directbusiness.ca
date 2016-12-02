<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Cover Letters'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cover Letter Models'), ['controller' => 'CoverLetterModels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cover Letter Model'), ['controller' => 'CoverLetterModels', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Cover Letters'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cover Letter Models'), ['controller' => 'CoverLetterModels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cover Letter Model'), ['controller' => 'CoverLetterModels', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>

<?= $this->Form->hidden('textModel', ['value' => $coverLetterOneText, 'id' => 'text1']) ?>
<?= $this->Form->hidden('textModel', ['value' => $coverLetterTwoText, 'id' => 'text2']) ?>

<?= $this->Form->create($coverLetter); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Cover Letter']) ?></legend>
    <?php
    echo $this->Form->input('coverLetterName');
    echo $this->Form->input('title');
    echo $this->Form->input('cover_letter_model_id', ['options' => $coverLetterModels]);
    echo $this->Form->input('TEXT', ['id' => 'textCover']);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
<script>
$( document ).ready(function() {
	document.getElementById('cover-letter-model-id').addEventListener('change', function() {
		if (this.value == "1")
			$('#textCover').val(text1.value.replace(/<br *\/?>/gi, '\n'));
		else
			$('#textCover').val(text2.value.replace(/<br *\/?>/gi, '\n'));
	});
$('#textCover').html($.parseHTML(decodeURI(text1.value)));
$('#textCover').val(text1.value.replace(/<br *\/?>/gi, '\n'));

function textAreaAdjust(o) {
	o.style.height = "1px";
	o.style.height = (25+o.scrollHeight)+"px";
}

textAreaAdjust(textCover);
});
</script>