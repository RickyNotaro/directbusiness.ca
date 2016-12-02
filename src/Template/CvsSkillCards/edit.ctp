<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $cvsSkillCard->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvsSkillCard->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cvs Skill Cards'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $cvsSkillCard->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $cvsSkillCard->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cvs Skill Cards'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($cvsSkillCard); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Cvs Skill Card']) ?></legend>
    <?php
    echo $this->Form->input('cv_id', ['options' => $cvs]);
    echo $this->Form->input('skill_card_id', ['options' => $skillCards]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
