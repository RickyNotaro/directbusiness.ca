<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Apply'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CoverLetters'), ['controller' => 'CoverLetters', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('file_id'); ?></th>
            <th><?= $this->Paginator->sort('cv_id'); ?></th>
            <th><?= $this->Paginator->sort('job_id'); ?></th>
            <th><?= $this->Paginator->sort('candidate_id'); ?></th>
            <th><?= $this->Paginator->sort('cover_letter_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($applys as $apply): ?>
        <tr>
            <td><?= $this->Number->format($apply->id) ?></td>
            <td>
                <?= $apply->has('file') ? $this->Html->link($apply->file->fileName, ['controller' => 'Files', 'action' => 'view', $apply->file->id]) : '' ?>
            </td>
            <td>
                <?= $apply->has('cv') ? $this->Html->link($apply->cv->cvName, ['controller' => 'Cvs', 'action' => 'view', $apply->cv->id]) : '' ?>
            </td>
            <td>
                <?= $apply->has('job') ? $this->Html->link($apply->job->title, ['controller' => 'Jobs', 'action' => 'view', $apply->job->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($apply->candidate_id) ?></td>
            <td>
                <?= $apply->has('cover_letter') ? $this->Html->link($apply->cover_letter->title, ['controller' => 'CoverLetters', 'action' => 'view', $apply->cover_letter->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $apply->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $apply->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $apply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $apply->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
