<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $activityArea->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $activityArea->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Activity Areas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Enterprises'), ['controller' => 'Enterprises', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Enterprise'), ['controller' => 'Enterprises', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $activityArea->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $activityArea->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Activity Areas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Enterprises'), ['controller' => 'Enterprises', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Enterprise'), ['controller' => 'Enterprises', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($activityArea); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Activity Area']) ?></legend>
    <?php
    echo $this->Form->input('activityArea');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
