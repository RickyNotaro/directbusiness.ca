<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Career Level'), ['action' => 'edit', $careerLevel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Career Level'), ['action' => 'delete', $careerLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $careerLevel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Career Levels'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Career Level'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Career Level'), ['action' => 'edit', $careerLevel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Career Level'), ['action' => 'delete', $careerLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $careerLevel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Career Levels'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Career Level'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($careerLevel->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('CareerLevel') ?></td>
            <td><?= h($careerLevel->careerLevel) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($careerLevel->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Cvs') ?></h3>
    </div>
    <?php if (!empty($careerLevel->cvs)): ?>
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
            <?php foreach ($careerLevel->cvs as $cvs): ?>
                <tr>
                    <td><?= h($cvs->id) ?></td>
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
