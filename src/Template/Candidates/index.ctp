<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Candidate'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CoverLetters'), ['controller' => 'CoverLetters', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('first_name'); ?></th>
            <th><?= $this->Paginator->sort('last_name'); ?></th>
            <th><?= $this->Paginator->sort('views'); ?></th>
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($candidates as $candidate): ?>
        <tr>
            <td><?= $this->Number->format($candidate->id) ?></td>
            <td><?= h($candidate->first_name) ?></td>
            <td><?= h($candidate->last_name) ?></td>
            <td><?= $this->Number->format($candidate->views) ?></td>
            <td>
                <?= $candidate->has('user') ? $this->Html->link($candidate->user->username, ['controller' => 'Users', 'action' => 'view', $candidate->user->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $candidate->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $candidate->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $candidate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidate->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
