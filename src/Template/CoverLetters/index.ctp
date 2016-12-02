<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Cover Letter'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CoverLetterModels'), ['controller' => 'CoverLetterModels', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cover Letter Model'), ['controller' => 'CoverLetterModels', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('coverLetterName'); ?></th>
            <th><?= $this->Paginator->sort('title'); ?></th>
            <th><?= $this->Paginator->sort('cover_letter_model_id'); ?></th>
            <th><?= $this->Paginator->sort('candidate_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($coverLetters as $coverLetter): ?>
        <tr>
            <td><?= h($coverLetter->coverLetterName) ?></td>
            <td><?= h($coverLetter->title) ?></td>
            <td>
                <?= $coverLetter->has('cover_letter_model') ? $this->Html->link($coverLetter->cover_letter_model->coverLetterModelName, ['controller' => 'CoverLetterModels', 'action' => 'view', $coverLetter->cover_letter_model->id]) : '' ?>
            </td>
            <td>
                <?= $coverLetter->has('candidate') ? $this->Html->link($coverLetter->candidate->first_name . " " .$coverLetter->candidate->last_name, ['controller' => 'Candidates', 'action' => 'view', $coverLetter->candidate->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $coverLetter->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $coverLetter->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $coverLetter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetter->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
