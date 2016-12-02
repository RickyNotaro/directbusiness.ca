<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List LanguageLevels'), ['controller' => 'LanguageLevels', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Language Level'), ['controller' => 'LanguageLevels', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('cv_id'); ?></th>
            <th><?= $this->Paginator->sort('language_level_id'); ?></th>
            <th><?= $this->Paginator->sort('langage_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cvsLanguageLevelsLanguages as $cvsLanguageLevelsLanguage): ?>
        <tr>
            <td><?= $this->Number->format($cvsLanguageLevelsLanguage->id) ?></td>
            <td>
                <?= $cvsLanguageLevelsLanguage->has('cv') ? $this->Html->link($cvsLanguageLevelsLanguage->cv->cvName, ['controller' => 'Cvs', 'action' => 'view', $cvsLanguageLevelsLanguage->cv->id]) : '' ?>
            </td>
            <td>
                <?= $cvsLanguageLevelsLanguage->has('language_level') ? $this->Html->link($cvsLanguageLevelsLanguage->language_level->languageLevel, ['controller' => 'LanguageLevels', 'action' => 'view', $cvsLanguageLevelsLanguage->language_level->id]) : '' ?>
            </td>
            <td>
                <?= $cvsLanguageLevelsLanguage->has('language') ? $this->Html->link($cvsLanguageLevelsLanguage->language->languageName, ['controller' => 'Languages', 'action' => 'view', $cvsLanguageLevelsLanguage->language->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $cvsLanguageLevelsLanguage->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $cvsLanguageLevelsLanguage->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $cvsLanguageLevelsLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsLanguageLevelsLanguage->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
