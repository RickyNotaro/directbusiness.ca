<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $stateProvince->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $stateProvince->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List State Provinces'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Country Regions'), ['controller' => 'CountryRegions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Country Region'), ['controller' => 'CountryRegions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $stateProvince->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $stateProvince->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List State Provinces'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Country Regions'), ['controller' => 'CountryRegions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Country Region'), ['controller' => 'CountryRegions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($stateProvince); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['State Province']) ?></legend>
    <?php
    echo $this->Form->input('stateProvince');
    echo $this->Form->input('country_region_id', ['options' => $countryRegions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
