<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $cvsLanguageLevelsLanguage->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvsLanguageLevelsLanguage->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Language Levels'), ['controller' => 'LanguageLevels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Language Level'), ['controller' => 'LanguageLevels', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $cvsLanguageLevelsLanguage->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvsLanguageLevelsLanguage->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Language Levels'), ['controller' => 'LanguageLevels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Language Level'), ['controller' => 'LanguageLevels', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($cvsLanguageLevelsLanguage); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Cvs Language Levels Language']) ?></legend>
    <?php
    echo $this->Form->input('cv_id', ['options' => $cvs]);
    echo $this->Form->input('language_level_id', ['options' => $languageLevels]);
    echo $this->Form->input('langage_id', ['options' => $languages]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
