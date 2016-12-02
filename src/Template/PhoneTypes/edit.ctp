<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $phoneType->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Phone Types'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $phoneType->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Phone Types'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($phoneType); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Phone Type']) ?></legend>
    <?php
    echo $this->Form->input('phoneType');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
