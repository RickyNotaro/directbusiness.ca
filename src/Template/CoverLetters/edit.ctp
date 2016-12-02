<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $coverLetter->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetter->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cover Letters'), ['action' => 'index']) ?></li>
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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $coverLetter->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetter->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cover Letters'), ['action' => 'index']) ?></li>
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
<?= $this->Form->create($coverLetter); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Cover Letter']) ?></legend>
    <?php
    echo $this->Form->input('coverLetterName');
    echo $this->Form->input('title');
    echo $this->Form->input('TEXT');
    echo $this->Form->input('cover_letter_model_id', ['options' => $coverLetterModels]);
    echo $this->Form->input('candidate_id', ['options' => $candidate, 'type' => 'hidden']);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
