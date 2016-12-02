<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Candidates Phone'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('phone_id'); ?></th>
            <th><?= $this->Paginator->sort('candidate_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($candidatesPhones as $candidatesPhone): ?>
        <tr>
            <td><?= $this->Number->format($candidatesPhone->id) ?></td>
            <td>
                <?= $candidatesPhone->has('phone') ? $this->Html->link($candidatesPhone->phone->number, ['controller' => 'Phones', 'action' => 'view', $candidatesPhone->phone->id]) : '' ?>
            </td>
            <td>
                <?= $candidatesPhone->has('candidate') ? $this->Html->link($candidatesPhone->candidate->first_name, ['controller' => 'Candidates', 'action' => 'view', $candidatesPhone->candidate->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $candidatesPhone->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $candidatesPhone->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $candidatesPhone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidatesPhone->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
