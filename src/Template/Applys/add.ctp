<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Applys'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Applys'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($apply); ?>

<fieldset>
    <legend><?= __('Add {0}', ['Apply']) ?></legend>
	    <h2 id="label">Use a CV File</h2>
		    <label class="switch" style="">
			  <input type="checkbox" name="switch" id="switch">
			  <div class="slider round"></div>
			</label>
    <?php
    echo $this->Form->input('file_id', ['options' => $files, 'label' => 'CV File']);
    echo $this->Form->input('cv_id', ['options' => $cvs, 'label' => 'CV Online']);
    echo $this->Form->input('job_id', ['options' => $jobs]);
    echo $this->Form->input('cover_letter_id', ['options' => $coverLetters]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
var cvfile = true;
$('#cv-id').fadeOut(.5);
$('label[for="cv-id"]').fadeOut(1);

$( "#switch" ).click(function() {
	$( "#switch" ).attr('disabled','disabled');
        if (cvfile) {
            label.innerHTML = "Use a CV Online";
            $('#file-id').fadeOut(1);
            $('label[for="file-id"]').fadeOut(1, function() {
            	$('#cv-id').fadeIn(250);
                $('label[for="cv-id"]').fadeIn(250);
                $( "#switch" ).removeAttr('disabled');
            });

            
            cvfile = false;
        } else {
            label.innerHTML = "Use a CV File";
            $('#cv-id').fadeOut(1);
            $('label[for="cv-id"]').fadeOut(1, function() {
            	$('#file-id').fadeIn(250);
                $('label[for="file-id"]').fadeIn(250);
                $( "#switch" ).removeAttr('disabled');
            });
            cvfile = true;
        }        
});
</script>