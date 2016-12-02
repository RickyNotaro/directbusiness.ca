<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $file->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $file->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($file); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['File']) ?></legend>
    <?php
    echo $this->Form->input('fileName');
    echo $this->Form->input('path');
    echo $this->Form->input('candidate_id');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
