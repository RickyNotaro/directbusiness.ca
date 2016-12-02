<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Cvs'), ['action' => 'index']) ?></li>
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
    <li><?= $this->Html->link(__('List Cv Visibilities'), ['controller' => 'CvVisibilities', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv Visibility'), ['controller' => 'CvVisibilities', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Cvs'), ['action' => 'index']) ?></li>
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
    <li><?= $this->Html->link(__('List Cv Visibilities'), ['controller' => 'CvVisibilities', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cv Visibility'), ['controller' => 'CvVisibilities', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cvs Language Levels Languages'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Cvs Language Levels Language'), ['controller' => 'CvsLanguageLevelsLanguages', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Candidates'), ['controller' => 'Candidates', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Candidate'), ['controller' => 'Candidates', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Skill Cards'), ['controller' => 'SkillCards', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Skill Card'), ['controller' => 'SkillCards', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Working Licences'), ['controller' => 'WorkingLicences', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Working Licence'), ['controller' => 'WorkingLicences', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($cv); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Cv']) ?></legend>
    <?php
    echo $this->Form->input('cvName');
    echo $this->Form->input('position_sought');
    echo $this->Form->input('minimum_wage');
    echo $this->Form->input('maximum_wage');
    echo $this->Form->input('position_location');
    echo $this->Form->input('current_employer');
    echo $this->Form->input('ready_to_relocate');
    echo $this->Form->input('start_date');
    echo $this->Form->input('career_level_id', ['options' => $careerLevels]);
    echo $this->Form->input('employment_status_id', ['options' => $employmentStatuses]);
    echo $this->Form->input('activity_area_id', ['options' => $activityAreas]);
    echo $this->Form->input('profession_id', ['options' => $professions]);
    echo $this->Form->input('education_level_id', ['options' => $educationLevels]);
    echo $this->Form->input('ready_to_travel_id', ['options' => $readyToTravels]);
    echo $this->Form->input('can_work_for_id', ['options' => $canWorkFors]);
    
    echo $this->Form->input('cv_visibility_id', ['options' => $cvVisibilities]);
    echo $this->Form->hidden('views');
    //echo $this->Form->input('file_id', ['options' => $files]);
    echo $this->Form->input('skill_cards._ids', ['options' => $skillCards]);
    echo $this->Form->input('working_licences._ids', ['options' => $workingLicences]);
    echo "<hr>";
    echo "<h2>CV Language Level</h2>";
    //echo $this->Form->input('cv_id', ['options' => $cvs]);
    echo $this->Form->input('language_level_id', ['options' => $languageLevels]);
    echo $this->Form->input('langage_id', ['options' => $languages]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
