<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Activity Area'), ['action' => 'edit', $activityArea->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Activity Area'), ['action' => 'delete', $activityArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activityArea->id)]) ?> </li>
<li><?= $this->Html->link(__('List Activity Areas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Activity Area'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Enterprises'), ['controller' => 'Enterprises', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Enterprise'), ['controller' => 'Enterprises', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Activity Area'), ['action' => 'edit', $activityArea->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Activity Area'), ['action' => 'delete', $activityArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activityArea->id)]) ?> </li>
<li><?= $this->Html->link(__('List Activity Areas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Activity Area'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Enterprises'), ['controller' => 'Enterprises', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Enterprise'), ['controller' => 'Enterprises', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($activityArea->activityArea) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('ActivityArea') ?></td>
            <td><?= h($activityArea->activityArea) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Cvs') ?></h3>
    </div>
    <?php if (!empty($activityArea->cvs)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('CvName') ?></th>
                <th><?= __('Position Sought') ?></th>
                <th><?= __('Minimum Wage') ?></th>
                <th><?= __('Maximum Wage') ?></th>
                <th><?= __('Position Location') ?></th>
                <th><?= __('Current Employer') ?></th>
                <th><?= __('Ready To Relocate') ?></th>
                <th><?= __('Start Date') ?></th>
                <th><?= __('Career Level Id') ?></th>
                <th><?= __('Employment Status Id') ?></th>
                <th><?= __('Activity Area Id') ?></th>
                <th><?= __('Profession Id') ?></th>
                <th><?= __('Education Level Id') ?></th>
                <th><?= __('Ready To Travel Id') ?></th>
                <th><?= __('Can Work For Id') ?></th>
                <th><?= __('Candidate Id') ?></th>
                <th><?= __('Cv Visibility Id') ?></th>
                <th><?= __('Views') ?></th>
                <th><?= __('File Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($activityArea->cvs as $cvs): ?>
                <tr>
                    <td><?= h($cvs->cvName) ?></td>
                    <td><?= h($cvs->position_sought) ?></td>
                    <td><?= h($cvs->minimum_wage) ?></td>
                    <td><?= h($cvs->maximum_wage) ?></td>
                    <td><?= h($cvs->position_location) ?></td>
                    <td><?= h($cvs->current_employer) ?></td>
                    <td><?= h($cvs->ready_to_relocate) ?></td>
                    <td><?= h($cvs->start_date) ?></td>
                    <td><?= h($cvs->career_level_id) ?></td>
                    <td><?= h($cvs->employment_status_id) ?></td>
                    <td><?= h($cvs->activity_area_id) ?></td>
                    <td><?= h($cvs->profession_id) ?></td>
                    <td><?= h($cvs->education_level_id) ?></td>
                    <td><?= h($cvs->ready_to_travel_id) ?></td>
                    <td><?= h($cvs->can_work_for_id) ?></td>
                    <td><?= h($cvs->candidate_id) ?></td>
                    <td><?= h($cvs->cv_visibility_id) ?></td>
                    <td><?= h($cvs->views) ?></td>
                    <td><?= h($cvs->file_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Cvs', 'action' => 'view', $cvs->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Cvs', 'action' => 'edit', $cvs->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Cvs', 'action' => 'delete', $cvs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvs->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Cvs</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Enterprises') ?></h3>
    </div>
    <?php if (!empty($activityArea->enterprises)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('EnterpriseName') ?></th>
                <th><?= __('History') ?></th>
                <th><?= __('Domain') ?></th>
                <th><?= __('Culture') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Activity Area Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($activityArea->enterprises as $enterprises): ?>
                <tr>
                    <td><?= h($enterprises->id) ?></td>
                    <td><?= h($enterprises->enterpriseName) ?></td>
                    <td><?= h($enterprises->history) ?></td>
                    <td><?= h($enterprises->domain) ?></td>
                    <td><?= h($enterprises->culture) ?></td>
                    <td><?= h($enterprises->description) ?></td>
                    <td><?= h($enterprises->activity_area_id) ?></td>
                    <td><?= h($enterprises->user_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Enterprises', 'action' => 'view', $enterprises->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Enterprises', 'action' => 'edit', $enterprises->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Enterprises', 'action' => 'delete', $enterprises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enterprises->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Enterprises</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Jobs') ?></h3>
    </div>
    <?php if (!empty($activityArea->jobs)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Responsibility') ?></th>
                <th><?= __('Aptitude') ?></th>
                <th><?= __('Requirement') ?></th>
                <th><?= __('Asset') ?></th>
                <th><?= __('Note') ?></th>
                <th><?= __('Start Date') ?></th>
                <th><?= __('Activity Area Id') ?></th>
                <th><?= __('Profession Id') ?></th>
                <th><?= __('Employment Status Id') ?></th>
                <th><?= __('Start Date Publication') ?></th>
                <th><?= __('End Date Publication') ?></th>
                <th><?= __('Created Date') ?></th>
                <th><?= __('Status Id') ?></th>
                <th><?= __('Education Level Id') ?></th>
                <th><?= __('Skill Level Id') ?></th>
                <th><?= __('Job Type Id') ?></th>
                <th><?= __('Enterprise Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($activityArea->jobs as $jobs): ?>
                <tr>
                    <td><?= h($jobs->id) ?></td>
                    <td><?= h($jobs->title) ?></td>
                    <td><?= h($jobs->description) ?></td>
                    <td><?= h($jobs->responsibility) ?></td>
                    <td><?= h($jobs->aptitude) ?></td>
                    <td><?= h($jobs->requirement) ?></td>
                    <td><?= h($jobs->asset) ?></td>
                    <td><?= h($jobs->note) ?></td>
                    <td><?= h($jobs->start_date) ?></td>
                    <td><?= h($jobs->activity_area_id) ?></td>
                    <td><?= h($jobs->profession_id) ?></td>
                    <td><?= h($jobs->employment_status_id) ?></td>
                    <td><?= h($jobs->start_date_publication) ?></td>
                    <td><?= h($jobs->end_date_publication) ?></td>
                    <td><?= h($jobs->created_date) ?></td>
                    <td><?= h($jobs->status_id) ?></td>
                    <td><?= h($jobs->education_level_id) ?></td>
                    <td><?= h($jobs->skill_level_id) ?></td>
                    <td><?= h($jobs->job_type_id) ?></td>
                    <td><?= h($jobs->enterprise_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Jobs', 'action' => 'view', $jobs->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Jobs', 'action' => 'edit', $jobs->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Jobs', 'action' => 'delete', $jobs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobs->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Jobs</p>
    <?php endif; ?>
</div>
