<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $cvsWorkingLicence->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvsWorkingLicence->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cvs Working Licences'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $cvsWorkingLicence->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvsWorkingLicence->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cvs Working Licences'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($cvsWorkingLicence); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Cvs Working Licence']) ?></legend>
    <?php
    echo $this->Form->input('cv_id', ['options' => $cvs]);
    echo $this->Form->input('working_licence_id', ['options' => $workingLicences]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
