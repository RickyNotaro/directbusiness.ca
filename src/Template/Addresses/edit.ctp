<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $address->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $address->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($address); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Address']) ?></legend>
    <?php
    echo $this->Form->input('number');
    echo $this->Form->input('street');
    echo $this->Form->input('apartment');
    echo $this->Form->input('city');
    echo $this->Form->input('postalCode');
    echo $this->Form->input('state_province_id', ['options' => $stateProvinces]);
    echo $this->Form->input('candidate_id', ['options' => $candidate]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
