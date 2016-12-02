<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New State Province'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CountryRegions'), ['controller' => 'CountryRegions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Country Region'), ['controller' => 'CountryRegions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('stateProvince'); ?></th>
            <th><?= $this->Paginator->sort('country_region_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($stateProvinces as $stateProvince): ?>
        <tr>
            <td><?= $this->Number->format($stateProvince->id) ?></td>
            <td><?= h($stateProvince->stateProvince) ?></td>
            <td>
                <?= $stateProvince->has('country_region') ? $this->Html->link($stateProvince->country_region->id, ['controller' => 'CountryRegions', 'action' => 'view', $stateProvince->country_region->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $stateProvince->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $stateProvince->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $stateProvince->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateProvince->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
