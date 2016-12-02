<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Country Region'), ['action' => 'edit', $countryRegion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Country Region'), ['action' => 'delete', $countryRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $countryRegion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Country Regions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Country Region'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Country Region'), ['action' => 'edit', $countryRegion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Country Region'), ['action' => 'delete', $countryRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $countryRegion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Country Regions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Country Region'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List State Provinces'), ['controller' => 'StateProvinces', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New State Province'), ['controller' => 'StateProvinces', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($countryRegion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('CountryRegion') ?></td>
            <td><?= h($countryRegion->countryRegion) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($countryRegion->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related StateProvinces') ?></h3>
    </div>
    <?php if (!empty($countryRegion->state_provinces)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('StateProvince') ?></th>
                <th><?= __('Country Region Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($countryRegion->state_provinces as $stateProvinces): ?>
                <tr>
                    <td><?= h($stateProvinces->id) ?></td>
                    <td><?= h($stateProvinces->stateProvince) ?></td>
                    <td><?= h($stateProvinces->country_region_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'StateProvinces', 'action' => 'view', $stateProvinces->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'StateProvinces', 'action' => 'edit', $stateProvinces->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'StateProvinces', 'action' => 'delete', $stateProvinces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateProvinces->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related StateProvinces</p>
    <?php endif; ?>
</div>
