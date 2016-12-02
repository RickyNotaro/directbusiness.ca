<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $coverLetterModel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetterModel->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cover Letter Models'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $coverLetterModel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetterModel->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cover Letter Models'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($coverLetterModel); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Cover Letter Model']) ?></legend>
    <?php
    echo $this->Form->input('coverLetterModelName');
    echo $this->Form->input('TEXT');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
