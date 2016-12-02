<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Cvs Working Licence'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List WorkingLicences'), ['controller' => 'WorkingLicences', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('cv_id'); ?></th>
            <th><?= $this->Paginator->sort('working_licence_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cvsWorkingLicences as $cvsWorkingLicence): ?>
        <tr>
            <td><?= $this->Number->format($cvsWorkingLicence->id) ?></td>
            <td>
                <?= $cvsWorkingLicence->has('cv') ? $this->Html->link($cvsWorkingLicence->cv->id, ['controller' => 'Cvs', 'action' => 'view', $cvsWorkingLicence->cv->id]) : '' ?>
            </td>
            <td>
                <?= $cvsWorkingLicence->has('working_licence') ? $this->Html->link($cvsWorkingLicence->working_licence->id, ['controller' => 'WorkingLicences', 'action' => 'view', $cvsWorkingLicence->working_licence->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $cvsWorkingLicence->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $cvsWorkingLicence->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $cvsWorkingLicence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsWorkingLicence->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
