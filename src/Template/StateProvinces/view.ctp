<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit State Province'), ['action' => 'edit', $stateProvince->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete State Province'), ['action' => 'delete', $stateProvince->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateProvince->id)]) ?> </li>
<li><?= $this->Html->link(__('List State Provinces'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New State Province'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Country Regions'), ['controller' => 'CountryRegions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Country Region'), ['controller' => 'CountryRegions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit State Province'), ['action' => 'edit', $stateProvince->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete State Province'), ['action' => 'delete', $stateProvince->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateProvince->id)]) ?> </li>
<li><?= $this->Html->link(__('List State Provinces'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New State Province'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Country Regions'), ['controller' => 'CountryRegions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Country Region'), ['controller' => 'CountryRegions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($stateProvince->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('StateProvince') ?></td>
            <td><?= h($stateProvince->stateProvince) ?></td>
        </tr>
        <tr>
            <td><?= __('Country Region') ?></td>
            <td><?= $stateProvince->has('country_region') ? $this->Html->link($stateProvince->country_region->id, ['controller' => 'CountryRegions', 'action' => 'view', $stateProvince->country_region->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($stateProvince->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Addresses') ?></h3>
    </div>
    <?php if (!empty($stateProvince->addresses)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Number') ?></th>
                <th><?= __('Street') ?></th>
                <th><?= __('Apartment') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('PostalCode') ?></th>
                <th><?= __('State Province Id') ?></th>
                <th><?= __('Candidate Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($stateProvince->addresses as $addresses): ?>
                <tr>
                    <td><?= h($addresses->id) ?></td>
                    <td><?= h($addresses->number) ?></td>
                    <td><?= h($addresses->street) ?></td>
                    <td><?= h($addresses->apartment) ?></td>
                    <td><?= h($addresses->city) ?></td>
                    <td><?= h($addresses->postalCode) ?></td>
                    <td><?= h($addresses->state_province_id) ?></td>
                    <td><?= h($addresses->candidate_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Addresses', 'action' => 'view', $addresses->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Addresses', 'action' => 'edit', $addresses->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Addresses</p>
    <?php endif; ?>
</div>
