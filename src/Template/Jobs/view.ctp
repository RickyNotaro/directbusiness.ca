<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Activity Areas'), ['controller' => 'ActivityAreas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Professions'), ['controller' => 'Professions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Profession'), ['controller' => 'Professions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Employment Statuses'), ['controller' => 'EmploymentStatuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Employment Status'), ['controller' => 'EmploymentStatuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Education Levels'), ['controller' => 'EducationLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Education Level'), ['controller' => 'EducationLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Skill Levels'), ['controller' => 'SkillLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Skill Level'), ['controller' => 'SkillLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Job Types'), ['controller' => 'JobTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job Type'), ['controller' => 'JobTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Enterprises'), ['controller' => 'Enterprises', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Enterprise'), ['controller' => 'Enterprises', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Activity Areas'), ['controller' => 'ActivityAreas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Professions'), ['controller' => 'Professions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Profession'), ['controller' => 'Professions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Employment Statuses'), ['controller' => 'EmploymentStatuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Employment Status'), ['controller' => 'EmploymentStatuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Education Levels'), ['controller' => 'EducationLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Education Level'), ['controller' => 'EducationLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Skill Levels'), ['controller' => 'SkillLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Skill Level'), ['controller' => 'SkillLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Job Types'), ['controller' => 'JobTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job Type'), ['controller' => 'JobTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Enterprises'), ['controller' => 'Enterprises', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Enterprise'), ['controller' => 'Enterprises', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div>
	<?= $this->Html->link("Apply", ['controller' => 'applys', 'action' => 'add', $job->id], ['class' => "btn btn-default"]) ?>
</div>
<br>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($job->title) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Title') ?></td>
            <td><?= h($job->title) ?></td>
        </tr>
        <tr>
            <td><?= __('Activity Area') ?></td>
            <td><?= $job->has('activity_area') ? $this->Html->link($job->activity_area->activityArea, ['controller' => 'ActivityAreas', 'action' => 'view', $job->activity_area->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Profession') ?></td>
            <td><?= $job->has('profession') ? $this->Html->link($job->profession->professionName, ['controller' => 'Professions', 'action' => 'view', $job->profession->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Employment Status') ?></td>
            <td><?= $job->has('employment_status') ? $this->Html->link($job->employment_status->employmentStatus, ['controller' => 'EmploymentStatuses', 'action' => 'view', $job->employment_status->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Status') ?></td>
            <td><?= $job->has('status') ? $this->Html->link($job->status->statusName, ['controller' => 'Statuses', 'action' => 'view', $job->status->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Education Level') ?></td>
            <td><?= $job->has('education_level') ? $this->Html->link($job->education_level->educationLevel, ['controller' => 'EducationLevels', 'action' => 'view', $job->education_level->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Skill Level') ?></td>
            <td><?= $job->has('skill_level') ? $this->Html->link($job->skill_level->skillLevel, ['controller' => 'SkillLevels', 'action' => 'view', $job->skill_level->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Job Type') ?></td>
            <td><?= $job->has('job_type') ? $this->Html->link($job->job_type->jobType, ['controller' => 'JobTypes', 'action' => 'view', $job->job_type->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Enterprise') ?></td>
            <td><?= $job->has('enterprise') ? $this->Html->link($job->enterprise->enterpriseName, ['controller' => 'Enterprises', 'action' => 'view', $job->enterprise->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Start Date') ?></td>
            <td><?= h($job->start_date) ?></td>
        </tr>
        <tr>
            <td><?= __('Start Date Publication') ?></td>
            <td><?= h($job->start_date_publication) ?></td>
        </tr>
        <tr>
            <td><?= __('End Date Publication') ?></td>
            <td><?= h($job->end_date_publication) ?></td>
        </tr>
        <tr>
            <td><?= __('Created Date') ?></td>
            <td><?= h($job->created_date) ?></td>
        </tr>
        <tr>
            <td><?= __('Description') ?></td>
            <td><?= $this->Text->autoParagraph(h($job->description)); ?></td>
        </tr>
        <tr>
            <td><?= __('Responsibility') ?></td>
            <td><?= $this->Text->autoParagraph(h($job->responsibility)); ?></td>
        </tr>
        <tr>
            <td><?= __('Aptitude') ?></td>
            <td><?= $this->Text->autoParagraph(h($job->aptitude)); ?></td>
        </tr>
        <tr>
            <td><?= __('Requirement') ?></td>
            <td><?= $this->Text->autoParagraph(h($job->requirement)); ?></td>
        </tr>
        <tr>
            <td><?= __('Asset') ?></td>
            <td><?= $this->Text->autoParagraph(h($job->asset)); ?></td>
        </tr>
        <tr>
            <td><?= __('Note') ?></td>
            <td><?= $this->Text->autoParagraph(h($job->note)); ?></td>
        </tr>
    </table>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Applys') ?></h3>
    </div>
    <?php if (!empty($job->applys)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cv Id') ?></th>
                <th><?= __('Job Id') ?></th>
                <th><?= __('Cover Letter Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($job->applys as $applys): ?>
                <tr>
                    <td><?= h($applys->id) ?></td>
                    <td><?= h($applys->cv_id) ?></td>
                    <td><?= h($applys->job_id) ?></td>
                    <td><?= h($applys->cover_letter_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Applys', 'action' => 'view', $applys->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Applys', 'action' => 'edit', $applys->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Applys', 'action' => 'delete', $applys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applys->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Applys</p>
    <?php endif; ?>
</div>
