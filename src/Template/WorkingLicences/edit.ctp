<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $workingLicence->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $workingLicence->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Working Licences'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $workingLicence->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $workingLicence->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Working Licences'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($workingLicence); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Working Licence']) ?></legend>
    <?php
    echo $this->Form->input('workingLicence');
    echo $this->Form->input('cvs._ids', ['options' => $cvs]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
