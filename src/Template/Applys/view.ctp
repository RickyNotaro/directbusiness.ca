<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Apply'), ['action' => 'edit', $apply->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Apply'), ['action' => 'delete', $apply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $apply->id)]) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Apply'), ['action' => 'edit', $apply->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Apply'), ['action' => 'delete', $apply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $apply->id)]) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($apply->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('File') ?></td>
            <td><?= $apply->has('file') ? $this->Html->link($apply->file->fileName, ['controller' => 'Files', 'action' => 'view', $apply->file->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Cv') ?></td>
            <td><?= $apply->has('cv') ? $this->Html->link($apply->cv->cvName, ['controller' => 'Cvs', 'action' => 'view', $apply->cv->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Job') ?></td>
            <td><?= $apply->has('job') ? $this->Html->link($apply->job->title, ['controller' => 'Jobs', 'action' => 'view', $apply->job->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Cover Letter') ?></td>
            <td><?= $apply->has('cover_letter') ? $this->Html->link($apply->cover_letter->title, ['controller' => 'CoverLetters', 'action' => 'view', $apply->cover_letter->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($apply->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Candidate Id') ?></td>
            <td><?= $this->Number->format($apply->candidate_id) ?></td>
        </tr>
    </table>
</div>

