<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Enterprises'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Activity Areas'), ['controller' => 'ActivityAreas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Enterprises'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Activity Areas'), ['controller' => 'ActivityAreas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($enterprise); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Enterprise']) ?></legend>
    <?php
    echo $this->Form->input('enterpriseName');
    echo $this->Form->input('history');
    echo $this->Form->input('domain');
    echo $this->Form->input('culture');
    echo $this->Form->input('description');
    echo $this->Form->input('activity_area_id', ['options' => $activityAreas]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
