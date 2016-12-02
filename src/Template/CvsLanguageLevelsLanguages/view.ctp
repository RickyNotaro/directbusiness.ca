<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Cvs Language Levels Language'), ['action' => 'edit', $cvsLanguageLevelsLanguage->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cvs Language Levels Language'), ['action' => 'delete', $cvsLanguageLevelsLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsLanguageLevelsLanguage->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['action' => 'add']) ?> </li>
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
<li><?= $this->Html->link(__('Edit Cvs Language Levels Language'), ['action' => 'edit', $cvsLanguageLevelsLanguage->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cvs Language Levels Language'), ['action' => 'delete', $cvsLanguageLevelsLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsLanguageLevelsLanguage->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['action' => 'add']) ?> </li>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($cvsLanguageLevelsLanguage->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Cv') ?></td>
            <td><?= $cvsLanguageLevelsLanguage->has('cv') ? $this->Html->link($cvsLanguageLevelsLanguage->cv->id, ['controller' => 'Cvs', 'action' => 'view', $cvsLanguageLevelsLanguage->cv->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Language Level') ?></td>
            <td><?= $cvsLanguageLevelsLanguage->has('language_level') ? $this->Html->link($cvsLanguageLevelsLanguage->language_level->id, ['controller' => 'LanguageLevels', 'action' => 'view', $cvsLanguageLevelsLanguage->language_level->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Language') ?></td>
            <td><?= $cvsLanguageLevelsLanguage->has('language') ? $this->Html->link($cvsLanguageLevelsLanguage->language->id, ['controller' => 'Languages', 'action' => 'view', $cvsLanguageLevelsLanguage->language->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($cvsLanguageLevelsLanguage->id) ?></td>
        </tr>
    </table>
</div>

