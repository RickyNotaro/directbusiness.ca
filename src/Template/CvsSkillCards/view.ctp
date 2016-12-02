<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Cvs Skill Card'), ['action' => 'edit', $cvsSkillCard->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cvs Skill Card'), ['action' => 'delete', $cvsSkillCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsSkillCard->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs Skill Cards'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Skill Card'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Cvs Skill Card'), ['action' => 'edit', $cvsSkillCard->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cvs Skill Card'), ['action' => 'delete', $cvsSkillCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsSkillCard->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs Skill Cards'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Skill Card'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($cvsSkillCard->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Cv') ?></td>
            <td><?= $cvsSkillCard->has('cv') ? $this->Html->link($cvsSkillCard->cv->id, ['controller' => 'Cvs', 'action' => 'view', $cvsSkillCard->cv->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Skill Card') ?></td>
            <td><?= $cvsSkillCard->has('skill_card') ? $this->Html->link($cvsSkillCard->skill_card->id, ['controller' => 'SkillCards', 'action' => 'view', $cvsSkillCard->skill_card->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($cvsSkillCard->id) ?></td>
        </tr>
    </table>
</div>

