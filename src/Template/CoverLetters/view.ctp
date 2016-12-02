<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Cover Letter'), ['action' => 'edit', $coverLetter->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cover Letter'), ['action' => 'delete', $coverLetter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetter->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letter Models'), ['controller' => 'CoverLetterModels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter Model'), ['controller' => 'CoverLetterModels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Cover Letter'), ['action' => 'edit', $coverLetter->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cover Letter'), ['action' => 'delete', $coverLetter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetter->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letter Models'), ['controller' => 'CoverLetterModels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter Model'), ['controller' => 'CoverLetterModels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($coverLetter->title) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('CoverLetterName') ?></td>
            <td><?= h($coverLetter->coverLetterName) ?></td>
        </tr>
        <tr>
            <td><?= __('Title') ?></td>
            <td><?= h($coverLetter->title) ?></td>
        </tr>
        <tr>
            <td><?= __('Cover Letter Model') ?></td>
            <td><?= $coverLetter->has('cover_letter_model') ? $this->Html->link($coverLetter->cover_letter_model->coverLetterModelName, ['controller' => 'CoverLetterModels', 'action' => 'view', $coverLetter->cover_letter_model->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Candidate') ?></td>
            <td><?= $coverLetter->has('candidate') ? $this->Html->link($coverLetter->candidate->first_name . " " .$coverLetter->candidate->last_name, ['controller' => 'Candidates', 'action' => 'view', $coverLetter->candidate->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('TEXT') ?></td>
            <td><?= $this->Text->autoParagraph(h($coverLetter->TEXT)); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Applys') ?></h3>
    </div>
    <?php if (!empty($coverLetter->applys)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cv Id') ?></th>
                <th><?= __('Job Id') ?></th>
                <th><?= __('Cover Letter Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($coverLetter->applys as $applys): ?>
                <tr>
                    <td><?= h($applys->id) ?></td>
                    <td><?= h($applys->cv_id) ?></td>
                    <td><?= h($applys->job_id) ?></td>
                    <td><?= h($applys->cover_letter_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Applys', 'action' => 'view', $applys->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Applys', 'action' => 'edit', $applys->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Applys', 'action' => 'delete', $applys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applys->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Applys</p>
    <?php endif; ?>
</div>
