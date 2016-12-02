<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Cover Letter Model'), ['action' => 'edit', $coverLetterModel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cover Letter Model'), ['action' => 'delete', $coverLetterModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetterModel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cover Letter Models'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter Model'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Cover Letter Model'), ['action' => 'edit', $coverLetterModel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cover Letter Model'), ['action' => 'delete', $coverLetterModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetterModel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cover Letter Models'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter Model'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($coverLetterModel->coverLetterModelName) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('CoverLetterModelName') ?></td>
            <td><?= h($coverLetterModel->coverLetterModelName) ?></td>
        </tr>
        <tr>
            <td><?= __('TEXT') ?></td>
            <td><?= $this->Text->autoParagraph(h($coverLetterModel->TEXT)); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related CoverLetters') ?></h3>
    </div>
    <?php if (!empty($coverLetterModel->cover_letters)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('CoverLetterName') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('TEXT') ?></th>
                <th><?= __('Cover Letter Model Id') ?></th>
                <th><?= __('Candidate Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($coverLetterModel->cover_letters as $coverLetters): ?>
                <tr>
                    <td><?= h($coverLetters->coverLetterName) ?></td>
                    <td><?= h($coverLetters->title) ?></td>
                    <td><?= h($coverLetters->TEXT) ?></td>
                    <td><?= h($coverLetters->cover_letter_model_id) ?></td>
                    <td><?= h($coverLetters->candidate_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'CoverLetters', 'action' => 'view', $coverLetters->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'CoverLetters', 'action' => 'edit', $coverLetters->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'CoverLetters', 'action' => 'delete', $coverLetters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetters->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CoverLetters</p>
    <?php endif; ?>
</div>
