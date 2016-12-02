<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Language Levels'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Language Levels'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($languageLevel); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Language Level']) ?></legend>
    <?php
    echo $this->Form->input('languageLevel');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
