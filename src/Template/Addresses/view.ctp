<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Address'), ['action' => 'edit', $address->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Address'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?> </li>
<li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Address'), ['action' => 'edit', $address->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Address'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?> </li>
<li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($address->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Number') ?></td>
            <td><?= h($address->number) ?></td>
        </tr>
        <tr>
            <td><?= __('Street') ?></td>
            <td><?= h($address->street) ?></td>
        </tr>
        <tr>
            <td><?= __('Apartment') ?></td>
            <td><?= h($address->apartment) ?></td>
        </tr>
        <tr>
            <td><?= __('City') ?></td>
            <td><?= h($address->city) ?></td>
        </tr>
        <tr>
            <td><?= __('PostalCode') ?></td>
            <td><?= h($address->postalCode) ?></td>
        </tr>
        <tr>
            <td><?= __('State Province') ?></td>
            <td><?= $address->has('state_province') ? $this->Html->link($address->state_province->id, ['controller' => 'StateProvinces', 'action' => 'view', $address->state_province->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Candidate') ?></td>
            <td><?= $address->has('candidate') ? $this->Html->link($address->candidate->id, ['controller' => 'Candidates', 'action' => 'view', $address->candidate->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($address->id) ?></td>
        </tr>
    </table>
</div>

