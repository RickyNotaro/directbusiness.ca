<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Address'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List StateProvinces'), ['controller' => 'StateProvinces', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('number'); ?></th>
            <th><?= $this->Paginator->sort('street'); ?></th>
            <th><?= $this->Paginator->sort('apartment'); ?></th>
            <th><?= $this->Paginator->sort('city'); ?></th>
            <th><?= $this->Paginator->sort('postalCode'); ?></th>
            <th><?= $this->Paginator->sort('state_province_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($addresses as $address): ?>
        <tr>
            <td><?= $this->Number->format($address->id) ?></td>
            <td><?= h($address->number) ?></td>
            <td><?= h($address->street) ?></td>
            <td><?= h($address->apartment) ?></td>
            <td><?= h($address->city) ?></td>
            <td><?= h($address->postalCode) ?></td>
            <td>
                <?= $address->has('state_province') ? $this->Html->link($address->state_province->stateProvince, ['controller' => 'StateProvinces', 'action' => 'view', $address->state_province->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $address->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $address->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
