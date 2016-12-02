<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Cv'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CareerLevels'), ['controller' => 'CareerLevels', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Career Level'), ['controller' => 'CareerLevels', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List EmploymentStatuses'), ['controller' => 'EmploymentStatuses', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Employment Status'), ['controller' => 'EmploymentStatuses', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List ActivityAreas'), ['controller' => 'ActivityAreas', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Professions'), ['controller' => 'Professions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Profession'), ['controller' => 'Professions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List EducationLevels'), ['controller' => 'EducationLevels', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Education Level'), ['controller' => 'EducationLevels', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List ReadyToTravels'), ['controller' => 'ReadyToTravels', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Ready To Travel'), ['controller' => 'ReadyToTravels', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CanWorkFors'), ['controller' => 'CanWorkFors', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Can Work For'), ['controller' => 'CanWorkFors', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CvVisibilities'), ['controller' => 'CvVisibilities', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cv Visibility'), ['controller' => 'CvVisibilities', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List CvsLanguageLevelsLanguages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SkillCards'), ['controller' => 'SkillCards', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List WorkingLicences'), ['controller' => 'WorkingLicences', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('cvName'); ?></th>
            <th><?= $this->Paginator->sort('position_sought'); ?></th>
            <th><?= $this->Paginator->sort('minimum_wage'); ?></th>
            <th><?= $this->Paginator->sort('maximum_wage'); ?></th>
            <th><?= $this->Paginator->sort('position_location'); ?></th>
            <th><?= $this->Paginator->sort('current_employer'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cvs as $cv): ?>
        <tr>
            <td><?= $this->Number->format($cv->id) ?></td>
            <td><?= h($cv->cvName) ?></td>
            <td><?= h($cv->position_sought) ?></td>
            <td><?= $this->Number->format($cv->minimum_wage) ?></td>
            <td><?= $this->Number->format($cv->maximum_wage) ?></td>
            <td><?= h($cv->position_location) ?></td>
            <td><?= h($cv->current_employer) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $cv->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $cv->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $cv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cv->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
