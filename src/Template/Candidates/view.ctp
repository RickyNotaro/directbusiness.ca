<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Candidate'), ['action' => 'edit', $candidate->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Candidate'), ['action' => 'delete', $candidate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidate->id)]) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Candidate'), ['action' => 'edit', $candidate->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Candidate'), ['action' => 'delete', $candidate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidate->id)]) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cover Letters'), ['controller' => 'CoverLetters', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cover Letter'), ['controller' => 'CoverLetters', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($candidate->first_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('First Name') ?></td>
            <td><?= h($candidate->first_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Last Name') ?></td>
            <td><?= h($candidate->last_name) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $candidate->has('user') ? $this->Html->link($candidate->user->username, ['controller' => 'Users', 'action' => 'view', $candidate->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($candidate->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Views') ?></td>
            <td><?= $this->Number->format($candidate->views) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Addresses') ?></h3>
    </div>
    <?php if (!empty($candidate->addresses)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Number') ?></th>
                <th><?= __('Street') ?></th>
                <th><?= __('Apartment') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('PostalCode') ?></th>
                <th><?= __('State Province Id') ?></th>
                <th><?= __('Candidate Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($candidate->addresses as $addresses): ?>
                <tr>
                    <td><?= h($addresses->id) ?></td>
                    <td><?= h($addresses->number) ?></td>
                    <td><?= h($addresses->street) ?></td>
                    <td><?= h($addresses->apartment) ?></td>
                    <td><?= h($addresses->city) ?></td>
                    <td><?= h($addresses->postalCode) ?></td>
                    <td><?= h($addresses->state_province_id) ?></td>
                    <td><?= h($addresses->candidate_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Addresses', 'action' => 'view', $addresses->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Addresses', 'action' => 'edit', $addresses->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Addresses</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Applys') ?></h3>
    </div>
    <?php if (!empty($candidate->applys)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('File Id') ?></th>
                <th><?= __('Cv Id') ?></th>
                <th><?= __('Job Id') ?></th>
                <th><?= __('Candidate Id') ?></th>
                <th><?= __('Cover Letter Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($candidate->applys as $applys): ?>
                <tr>
                    <td><?= h($applys->id) ?></td>
                    <td><?= h($applys->file_id) ?></td>
                    <td><?= h($applys->cv_id) ?></td>
                    <td><?= h($applys->job_id) ?></td>
                    <td><?= h($applys->candidate_id) ?></td>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related CoverLetters') ?></h3>
    </div>
    <?php if (!empty($candidate->cover_letters)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('CoverLetterName') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('TEXT') ?></th>
                <th><?= __('Cover Letter Model Id') ?></th>
                <th><?= __('Candidate Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($candidate->cover_letters as $coverLetters): ?>
                <tr>
                    <td><?= h($coverLetters->id) ?></td>
                    <td><?= h($coverLetters->coverLetterName) ?></td>
                    <td><?= h($coverLetters->title) ?></td>
                    <td><?= h($coverLetters->TEXT) ?></td>
                    <td><?= h($coverLetters->cover_letter_model_id) ?></td>
                    <td><?= h($coverLetters->candidate_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'CoverLetters', 'action' => 'view', $coverLetters->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'CoverLetters', 'action' => 'edit', $coverLetters->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'CoverLetters', 'action' => 'delete', $coverLetters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coverLetters->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CoverLetters</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Cvs') ?></h3>
    </div>
    <?php if (!empty($candidate->cvs)): ?>
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
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($candidate->cvs as $cvs): ?>
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
        <h3 class="panel-title"><?= __('Related Files') ?></h3>
    </div>
    <?php if (!empty($candidate->files)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('FileName') ?></th>
                <th><?= __('Path') ?></th>
                <th><?= __('Candidate Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($candidate->files as $files): ?>
                <tr>
                    <td><?= h($files->id) ?></td>
                    <td><?= h($files->fileName) ?></td>
                    <td><?= h($files->path) ?></td>
                    <td><?= h($files->candidate_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Files', 'action' => 'view', $files->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Files', 'action' => 'edit', $files->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Files', 'action' => 'delete', $files->id], ['confirm' => __('Are you sure you want to delete # {0}?', $files->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Files</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Phones') ?></h3>
    </div>
    <?php if (!empty($candidate->phones)): ?>
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
            <?php foreach ($candidate->phones as $phones): ?>
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
