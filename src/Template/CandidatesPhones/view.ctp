<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Candidates Phone'), ['action' => 'edit', $candidatesPhone->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Candidates Phone'), ['action' => 'delete', $candidatesPhone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidatesPhone->id)]) ?> </li>
<li><?= $this->Html->link(__('List Candidates Phones'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidates Phone'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Candidates Phone'), ['action' => 'edit', $candidatesPhone->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Candidates Phone'), ['action' => 'delete', $candidatesPhone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidatesPhone->id)]) ?> </li>
<li><?= $this->Html->link(__('List Candidates Phones'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidates Phone'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($candidatesPhone->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Phone') ?></td>
            <td><?= $candidatesPhone->has('phone') ? $this->Html->link($candidatesPhone->phone->id, ['controller' => 'Phones', 'action' => 'view', $candidatesPhone->phone->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Candidate') ?></td>
            <td><?= $candidatesPhone->has('candidate') ? $this->Html->link($candidatesPhone->candidate->id, ['controller' => 'Candidates', 'action' => 'view', $candidatesPhone->candidate->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($candidatesPhone->id) ?></td>
        </tr>
    </table>
</div>

