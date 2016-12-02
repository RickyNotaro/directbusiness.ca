<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Cvs Skill Card'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SkillCards'), ['controller' => 'SkillCards', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('cv_id'); ?></th>
            <th><?= $this->Paginator->sort('skill_card_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cvsSkillCards as $cvsSkillCard): ?>
        <tr>
            <td><?= $this->Number->format($cvsSkillCard->id) ?></td>
            <td>
                <?= $cvsSkillCard->has('cv') ? $this->Html->link($cvsSkillCard->cv->id, ['controller' => 'Cvs', 'action' => 'view', $cvsSkillCard->cv->id]) : '' ?>
            </td>
            <td>
                <?= $cvsSkillCard->has('skill_card') ? $this->Html->link($cvsSkillCard->skill_card->id, ['controller' => 'SkillCards', 'action' => 'view', $cvsSkillCard->skill_card->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $cvsSkillCard->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $cvsSkillCard->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $cvsSkillCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsSkillCard->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
