<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $skillLevel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $skillLevel->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Skill Levels'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $skillLevel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $skillLevel->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Skill Levels'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($skillLevel); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Skill Level']) ?></legend>
    <?php
    echo $this->Form->input('skillLevel');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
