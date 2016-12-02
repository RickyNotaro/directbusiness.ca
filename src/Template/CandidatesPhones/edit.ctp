<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $candidatesPhone->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $candidatesPhone->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Candidates Phones'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $candidatesPhone->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $candidatesPhone->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Candidates Phones'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($candidatesPhone); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Candidates Phone']) ?></legend>
    <?php
    echo $this->Form->input('phone_id', ['options' => $phones]);
    echo $this->Form->input('candidate_id', ['options' => $candidate]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
