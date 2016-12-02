<style>
.height tbody tr {
    height: 150px;
}

tbody tr td {
	border-top: 0px !important;
}

input[type="submit"].btn-block {
    width: 50%;
    margin: auto;
}

.filter {
	margin: 5px 5px 0px 5px;
}
</style>
<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Job'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List ActivityAreas'), ['controller' => 'ActivityAreas', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Activity Area'), ['controller' => 'ActivityAreas', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Professions'), ['controller' => 'Professions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Profession'), ['controller' => 'Professions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List EmploymentStatuses'), ['controller' => 'EmploymentStatuses', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Employment Status'), ['controller' => 'EmploymentStatuses', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List EducationLevels'), ['controller' => 'EducationLevels', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Education Level'), ['controller' => 'EducationLevels', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SkillLevels'), ['controller' => 'SkillLevels', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Skill Level'), ['controller' => 'SkillLevels', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List JobTypes'), ['controller' => 'JobTypes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Job Type'), ['controller' => 'JobTypes', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Enterprises'), ['controller' => 'Enterprises', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Enterprise'), ['controller' => 'Enterprises', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Applys'), ['controller' => 'Applys', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Apply'), ['controller' => 'Applys', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>
	<button id="filterBtn" type="button" class="btn btn-primary btn-block">Advanced Search</button>
<div id="filters" style="display: none;">
	<h3><?php echo __("Filter options"); ?></h3>
		<?php echo $this->Form->create(); ?>
		<table id="filter_table" class="table table-striped" cellpadding="0" cellspacing="0">
		    <tbody>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->input('activity_area_id', ['options' => $activityAreas]);
		                ?>
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->input('profession_id', ['options' => $professions]);
		                ?>
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->input('employment_status_id', ['options' => $employmentStatuses]);
		                ?>
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->input('status_id', ['options' => $statuses]);
		                ?>
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->input('education_level_id', ['options' => $educationLevels]);
		                ?>
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->input('skill_level_id', ['options' => $skillLevels]);
		                ?>
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->input('job_type_id', ['options' => $jobTypes]);
		                ?>
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <?php
		                    echo $this->Form->submit(__("Filter the search"),array('class' => 'btn btn-primary btn-block', 'id' => 'filter_submit'));
		                ?>
		            </td>
		        </tr>
		    </tbody>
		</table>
	</div>
<script>
document.addEventListener("DOMContentLoaded", function(event) { 
	$(document).ready(function() {
	     $("#filterBtn").click(function() {
	    	    console.log('element hidden');
	         if($("#filters").is(":visible")){
	           $("#filters").fadeOut();
	        } else {
	           $("#filters").fadeIn();
	        }
	        return false;
	     });

		 var optionFilters =  $('select option:selected');
	     for (var i = 0; i < optionFilters.length; i++) {
		     if (optionFilters[i].innerHTML !== "") {
		    	 var filterBtn = document.createElement('button');
		    	 filterBtn.className = 'filter btn btn-success';
		    	 filterBtn.innerHTML = optionFilters[i].innerHTML;
		    	 filterBtn.addEventListener('click', function() {
		    		 $('select option:contains("'+ this.innerHTML +'")').parent()[0][0].setAttribute('selected', 'selected');
		    		 console.log(this);
		    		 $( "#filter_submit" ).trigger('click');
		    	 });
		    	 document.getElementById('filter-handler').appendChild(filterBtn);
		     }
	     }
	  });
});
</script>
	

<?= $this->Form->end() ?>
</br>
<div id="filter-handler"></div>
<table class="height table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('title'); ?></th>
            <th><?= $this->Paginator->sort('start_date'); ?></th>
            <th><?= $this->Paginator->sort('activity_area_id'); ?></th>
            <th><?= $this->Paginator->sort('profession_id'); ?></th>
            <th><?= $this->Paginator->sort('employment_status_id'); ?></th>
            <th><?= $this->Paginator->sort('start_date_publication'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jobs as $job): ?>
        <tr>
            <td><?= h($job->title) ?></td>
            <td><?= h($job->start_date) ?></td>
            <td>
                <?= $job->has('activity_area') ? $this->Html->link($job->activity_area->activityArea, ['controller' => 'ActivityAreas', 'action' => 'view', $job->activity_area->id]) : '' ?>
            </td>
            <td>
                <?= $job->has('profession') ? $this->Html->link($job->profession->professionName, ['controller' => 'Professions', 'action' => 'view', $job->profession->id]) : '' ?>
            </td>
            <td>
                <?= $job->has('employment_status') ? $this->Html->link($job->employment_status->employmentStatus, ['controller' => 'EmploymentStatuses', 'action' => 'view', $job->employment_status->id]) : '' ?>
            </td>
            <td><?= h($job->start_date_publication) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $job->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $job->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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