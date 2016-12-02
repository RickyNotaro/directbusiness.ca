<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Cv'), ['action' => 'edit', $cv->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cv'), ['action' => 'delete', $cv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cv->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Career Levels'), ['controller' => 'CareerLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Career Level'), ['controller' => 'CareerLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Employment Statuses'), ['controller' => 'EmploymentStatuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Employment Status'), ['controller' => 'EmploymentStatuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Activity Areas'), ['controller' => 'ActivityAreas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Professions'), ['controller' => 'Professions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Profession'), ['controller' => 'Professions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Education Levels'), ['controller' => 'EducationLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Education Level'), ['controller' => 'EducationLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Ready To Travels'), ['controller' => 'ReadyToTravels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Ready To Travel'), ['controller' => 'ReadyToTravels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Can Work Fors'), ['controller' => 'CanWorkFors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Can Work For'), ['controller' => 'CanWorkFors', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cv Visibilities'), ['controller' => 'CvVisibilities', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv Visibility'), ['controller' => 'CvVisibilities', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Cv'), ['action' => 'edit', $cv->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Cv'), ['action' => 'delete', $cv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cv->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cvs'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Career Levels'), ['controller' => 'CareerLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Career Level'), ['controller' => 'CareerLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Employment Statuses'), ['controller' => 'EmploymentStatuses', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Employment Status'), ['controller' => 'EmploymentStatuses', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Activity Areas'), ['controller' => 'ActivityAreas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Professions'), ['controller' => 'Professions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Profession'), ['controller' => 'Professions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Education Levels'), ['controller' => 'EducationLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Education Level'), ['controller' => 'EducationLevels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Ready To Travels'), ['controller' => 'ReadyToTravels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Ready To Travel'), ['controller' => 'ReadyToTravels', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Can Work Fors'), ['controller' => 'CanWorkFors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Can Work For'), ['controller' => 'CanWorkFors', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cv Visibilities'), ['controller' => 'CvVisibilities', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cv Visibility'), ['controller' => 'CvVisibilities', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($cv->cvName) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('CvName') ?></td>
            <td><?= h($cv->cvName) ?></td>
        </tr>
        <tr>
            <td><?= __('Position Sought') ?></td>
            <td><?= h($cv->position_sought) ?></td>
        </tr>
        <tr>
            <td><?= __('Position Location') ?></td>
            <td><?= h($cv->position_location) ?></td>
        </tr>
        <tr>
            <td><?= __('Current Employer') ?></td>
            <td><?= h($cv->current_employer) ?></td>
        </tr>
        <tr>
            <td><?= __('Career Level') ?></td>
            <td><?= $cv->has('career_level') ? $this->Html->link($cv->career_level->careerLevel, ['controller' => 'CareerLevels', 'action' => 'view', $cv->career_level->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Employment Status') ?></td>
            <td><?= $cv->has('employment_status') ? $this->Html->link($cv->employment_status->employmentStatus, ['controller' => 'EmploymentStatuses', 'action' => 'view', $cv->employment_status->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Activity Area') ?></td>
            <td><?= $cv->has('activity_area') ? $this->Html->link($cv->activity_area->activityArea, ['controller' => 'ActivityAreas', 'action' => 'view', $cv->activity_area->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Profession') ?></td>
            <td><?= $cv->has('profession') ? $this->Html->link($cv->profession->professionName, ['controller' => 'Professions', 'action' => 'view', $cv->profession->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Education Level') ?></td>
            <td><?= $cv->has('education_level') ? $this->Html->link($cv->education_level->educationLevel, ['controller' => 'EducationLevels', 'action' => 'view', $cv->education_level->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Ready To Travel') ?></td>
            <td><?= $cv->has('ready_to_travel') ? $this->Html->link($cv->ready_to_travel->description, ['controller' => 'ReadyToTravels', 'action' => 'view', $cv->ready_to_travel->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Can Work For') ?></td>
            <td><?= $cv->has('can_work_for') ? $this->Html->link($cv->can_work_for->description, ['controller' => 'CanWorkFors', 'action' => 'view', $cv->can_work_for->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Candidate') ?></td>
            <td><?= $cv->has('candidate') ? $this->Html->link($cv->candidate->first_name, ['controller' => 'Candidates', 'action' => 'view', $cv->candidate->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Cv Visibility') ?></td>
            <td><?= $cv->has('cv_visibility') ? $this->Html->link($cv->cv_visibility->visibilityName, ['controller' => 'CvVisibilities', 'action' => 'view', $cv->cv_visibility->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($cv->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Minimum Wage') ?></td>
            <td><?= $this->Number->format($cv->minimum_wage) ?></td>
        </tr>
        <tr>
            <td><?= __('Maximum Wage') ?></td>
            <td><?= $this->Number->format($cv->maximum_wage) ?></td>
        </tr>
        <tr>
            <td><?= __('Views') ?></td>
            <td><?= $this->Number->format($cv->views) ?></td>
        </tr>
        <tr>
            <td><?= __('Start Date') ?></td>
            <td><?= h($cv->start_date) ?></td>
        </tr>
        <tr>
            <td><?= __('Ready To Relocate') ?></td>
            <td><?= $cv->ready_to_relocate ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Applys') ?></h3>
    </div>
    <?php if (!empty($cv->applys)): ?>
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
            <?php foreach ($cv->applys as $applys): ?>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related CvsLanguageLevelsLanguages') ?></h3>
    </div>
    <?php if (!empty($cv->cvs_language_levels_languages)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cv Id') ?></th>
                <th><?= __('Language Level Id') ?></th>
                <th><?= __('Langage Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cv->cvs_language_levels_languages as $cvsLanguageLevelsLanguages): ?>
                <tr>
                    <td><?= h($cvsLanguageLevelsLanguages->id) ?></td>
                    <td><?= h($cvsLanguageLevelsLanguages->cv_id) ?></td>
                    <td><?= h($cvsLanguageLevelsLanguages->language_level_id) ?></td>
                    <td><?= h($cvsLanguageLevelsLanguages->langage_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'view', $cvsLanguageLevelsLanguages->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'edit', $cvsLanguageLevelsLanguages->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'delete', $cvsLanguageLevelsLanguages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvsLanguageLevelsLanguages->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CvsLanguageLevelsLanguages</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related SkillCards') ?></h3>
    </div>
    <?php if (!empty($cv->skill_cards)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('SkillCard') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cv->skill_cards as $skillCards): ?>
                <tr>
                    <td><?= h($skillCards->id) ?></td>
                    <td><?= h($skillCards->skillCard) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'SkillCards', 'action' => 'view', $skillCards->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'SkillCards', 'action' => 'edit', $skillCards->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'SkillCards', 'action' => 'delete', $skillCards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skillCards->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related SkillCards</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related WorkingLicences') ?></h3>
    </div>
    <?php if (!empty($cv->working_licences)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('WorkingLicence') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cv->working_licences as $workingLicences): ?>
                <tr>
                    <td><?= h($workingLicences->id) ?></td>
                    <td><?= h($workingLicences->workingLicence) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'WorkingLicences', 'action' => 'view', $workingLicences->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'WorkingLicences', 'action' => 'edit', $workingLicences->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'WorkingLicences', 'action' => 'delete', $workingLicences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workingLicences->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related WorkingLicences</p>
    <?php endif; ?>
</div>
