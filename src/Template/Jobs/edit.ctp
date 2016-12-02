<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $job->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $job->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
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
<?= $this->Form->create($job); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Job']) ?></legend>
    <?php
    echo $this->Form->input('title');
    echo $this->Form->input('description');
    echo $this->Form->input('responsibility');
    echo $this->Form->input('aptitude');
    echo $this->Form->input('requirement');
    echo $this->Form->input('asset');
    echo $this->Form->input('note');
    echo $this->Form->input('start_date');
    echo $this->Form->input('activity_area_id', ['options' => $activityAreas]);
    echo $this->Form->input('profession_id', ['options' => $professions]);
    echo $this->Form->input('employment_status_id', ['options' => $employmentStatuses]);
    echo $this->Form->input('start_date_publication');
    echo $this->Form->input('end_date_publication');
    echo $this->Form->input('created_date');
    echo $this->Form->input('status_id', ['options' => $statuses]);
    echo $this->Form->input('education_level_id', ['options' => $educationLevels]);
    echo $this->Form->input('skill_level_id', ['options' => $skillLevels]);
    echo $this->Form->input('job_type_id', ['options' => $jobTypes]);
    echo $this->Form->input('enterprise_id', ['options' => $enterprises]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
