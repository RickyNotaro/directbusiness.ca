<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $careerLevel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $careerLevel->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Career Levels'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $careerLevel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $careerLevel->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Career Levels'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($careerLevel); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Career Level']) ?></legend>
    <?php
    echo $this->Form->input('careerLevel');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
