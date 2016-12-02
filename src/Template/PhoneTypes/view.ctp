<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Phone Type'), ['action' => 'edit', $phoneType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Phone Type'), ['action' => 'delete', $phoneType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Phone Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Phone Type'), ['action' => 'edit', $phoneType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Phone Type'), ['action' => 'delete', $phoneType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Phone Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($phoneType->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('PhoneType') ?></td>
            <td><?= h($phoneType->phoneType) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($phoneType->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Phones') ?></h3>
    </div>
    <?php if (!empty($phoneType->phones)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Number') ?></th>
                <th><?= __('Post') ?></th>
                <th><?= __('Phone Type Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($phoneType->phones as $phones): ?>
                <tr>
                    <td><?= h($phones->id) ?></td>
                    <td><?= h($phones->number) ?></td>
                    <td><?= h($phones->post) ?></td>
                    <td><?= h($phones->phone_type_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Phones', 'action' => 'view', $phones->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Phones', 'action' => 'edit', $phones->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Phones', 'action' => 'delete', $phones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phones->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Phones</p>
    <?php endif; ?>
</div>
