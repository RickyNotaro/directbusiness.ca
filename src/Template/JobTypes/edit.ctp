<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $jobType->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $jobType->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Job Types'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $jobType->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $jobType->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Job Types'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($jobType); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Job Type']) ?></legend>
    <?php
    echo $this->Form->input('jobType');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
