<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $cvVisibility->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvVisibility->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cv Visibilities'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $cvVisibility->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvVisibility->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cv Visibilities'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($cvVisibility); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Cv Visibility']) ?></legend>
    <?php
    echo $this->Form->input('visibilityName');
    echo $this->Form->input('description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
