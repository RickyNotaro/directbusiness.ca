<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Cvs Working Licence'), ['action' => 'edit', $cvsWorkingLicence->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cvs Working Licence'), ['action' => 'delete', $cvsWorkingLicence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsWorkingLicence->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs Working Licences'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Working Licence'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Cvs Working Licence'), ['action' => 'edit', $cvsWorkingLicence->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cvs Working Licence'), ['action' => 'delete', $cvsWorkingLicence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsWorkingLicence->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs Working Licences'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Working Licence'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($cvsWorkingLicence->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Cv') ?></td>
            <td><?= $cvsWorkingLicence->has('cv') ? $this->Html->link($cvsWorkingLicence->cv->id, ['controller' => 'Cvs', 'action' => 'view', $cvsWorkingLicence->cv->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Working Licence') ?></td>
            <td><?= $cvsWorkingLicence->has('working_licence') ? $this->Html->link($cvsWorkingLicence->working_licence->id, ['controller' => 'WorkingLicences', 'action' => 'view', $cvsWorkingLicence->working_licence->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($cvsWorkingLicence->id) ?></td>
        </tr>
    </table>
</div>

