<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="files form large-9 medium-8 columns content">
    <h1>Upload File</h1>
    <div class="content">
        <style type="text/css">
            input[type=file] {
                height: 50px;
            }

            button[type=submit] {
                height: 50px;
            }
        </style>
        
        <div class="upload-frm">
        <?php echo $this->Form->create($uploadData, ['type' => 'file', 'onsubmit' => 'return isImage()']); ?>
            <?php echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control custom-file-input']); ?>
            <?php echo '<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />'; ?>
            <?php echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'form-control btn btn-default']); ?>
            
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>