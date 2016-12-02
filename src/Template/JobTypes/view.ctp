<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Job Type'), ['action' => 'edit', $jobType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Job Type'), ['action' => 'delete', $jobType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Job Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Job Type'), ['action' => 'edit', $jobType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Job Type'), ['action' => 'delete', $jobType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Job Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($jobType->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('JobType') ?></td>
            <td><?= h($jobType->jobType) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($jobType->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Jobs') ?></h3>
    </div>
    <?php if (!empty($jobType->jobs)): ?>
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
            <?php foreach ($jobType->jobs as $jobs): ?>
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
