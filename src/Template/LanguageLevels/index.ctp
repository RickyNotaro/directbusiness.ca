<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Language Level'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CvsLanguageLevelsLanguages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('languageLevel'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($languageLevels as $languageLevel): ?>
        <tr>
            <td><?= $this->Number->format($languageLevel->id) ?></td>
            <td><?= h($languageLevel->languageLevel) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $languageLevel->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $languageLevel->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $languageLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageLevel->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
