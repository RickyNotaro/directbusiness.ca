<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Country Regions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Country Regions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($countryRegion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Country Region']) ?></legend>
    <?php
    echo $this->Form->input('countryRegion');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
