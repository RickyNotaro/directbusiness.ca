<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $phone->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Phones'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Phone Types'), ['controller' => 'PhoneTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Phone Type'), ['controller' => 'PhoneTypes', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $phone->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Phones'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Phone Types'), ['controller' => 'PhoneTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Phone Type'), ['controller' => 'PhoneTypes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($phone); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Phone']) ?></legend>
    <?php
    echo $this->Form->input('number');
    echo $this->Form->input('post');
    echo $this->Form->input('phone_type_id', ['options' => $phoneTypes]);
    echo $this->Form->input('candidate_id', ['options' => $candidate]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
