<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Language Level'), ['action' => 'edit', $languageLevel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Language Level'), ['action' => 'delete', $languageLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageLevel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Language Levels'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Language Level'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Language Level'), ['action' => 'edit', $languageLevel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Language Level'), ['action' => 'delete', $languageLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageLevel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Language Levels'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Language Level'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($languageLevel->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('LanguageLevel') ?></td>
            <td><?= h($languageLevel->languageLevel) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($languageLevel->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related CvsLanguageLevelsLanguages') ?></h3>
    </div>
    <?php if (!empty($languageLevel->cvs_language_levels_languages)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cv Id') ?></th>
                <th><?= __('Language Level Id') ?></th>
                <th><?= __('Langage Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($languageLevel->cvs_language_levels_languages as $cvsLanguageLevelsLanguages): ?>
                <tr>
                    <td><?= h($cvsLanguageLevelsLanguages->id) ?></td>
                    <td><?= h($cvsLanguageLevelsLanguages->cv_id) ?></td>
                    <td><?= h($cvsLanguageLevelsLanguages->language_level_id) ?></td>
                    <td><?= h($cvsLanguageLevelsLanguages->langage_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'view', $cvsLanguageLevelsLanguages->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'edit', $cvsLanguageLevelsLanguages->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'delete', $cvsLanguageLevelsLanguages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsLanguageLevelsLanguages->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CvsLanguageLevelsLanguages</p>
    <?php endif; ?>
</div>
