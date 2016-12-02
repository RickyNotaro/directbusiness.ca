<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * Jobs Controller
 *
 * @property \App\Model\Table\JobsTable $Jobs
 */
class JobsController extends AppController
{
	
	public function initialize()
	{
		parent::initialize();
		if ($this->request->session()->read('Auth.User')['role_id'] == Role::ROLE_ADMIN ||
				$this->request->session()->read('Auth.User')['role_id'] == Role::ROLE_ENTERPRISE) {
					$this->Auth->allow(['add']);
				}
	}
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $conditions = "";
        
        $activityAreas = $this->Jobs->ActivityAreas->find('list')->toArray();
        $professions = $this->Jobs->Professions->find('list')->toArray();
        $employmentStatuses = $this->Jobs->EmploymentStatuses->find('list')->toArray();
        $statuses = $this->Jobs->Statuses->find('list')->toArray();
        $educationLevels = $this->Jobs->EducationLevels->find('list')->toArray();
        $skillLevels = $this->Jobs->SkillLevels->find('list')->toArray();
        $jobTypes = $this->Jobs->JobTypes->find('list')->toArray();
        
        array_unshift($activityAreas, "");
        array_unshift($professions, "");
        array_unshift($employmentStatuses, "");
        array_unshift($statuses, "");
        array_unshift($educationLevels, "");
        array_unshift($skillLevels, "");
        array_unshift($jobTypes, "");
        
        $jobs = $this->Jobs->find('all');
        
        if ($this->request->is('post')) {
            foreach ($this->request->data as $key => $value) {
                $jobs = ($value != 0) ? $jobs->where("`Jobs`.`".$key."` = ".$value."") : $jobs;
            }
        }
        
        $this->paginate = [
            'contain' => ['ActivityAreas', 'Professions', 'EmploymentStatuses', 'Statuses', 'EducationLevels', 'SkillLevels', 'JobTypes', 'Enterprises']
        ];
        
        $jobs = $this->paginate($jobs);

        $this->set(compact('jobs', 'activityAreas', 'professions', 'employmentStatuses', 'statuses', 'educationLevels', 'skillLevels', 'jobTypes'));
        $this->set('_serialize', ['jobs']);
    }

    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => ['ActivityAreas', 'Professions', 'EmploymentStatuses', 'Statuses', 'EducationLevels', 'SkillLevels', 'JobTypes', 'Enterprises', 'Applys']
        ]);

        $this->set('job', $job);
        $this->set('_serialize', ['job']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $job = $this->Jobs->newEntity();
        $enterpriseid = $this->Jobs->Enterprises->find('all')->where(['user_id' => $this->request->session()->read('Auth.User')['id']])->toArray()[0]['id'];
        if ($this->request->is('post')) {
            $job = $this->Jobs->patchEntity($job, $this->request->data);
            $job->enterprise_id = $enterpriseid;
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job could not be saved. Please, try again.'));
            }
        }
        $activityAreas = $this->Jobs->ActivityAreas->find('list', ['limit' => 200]);
        $professions = $this->Jobs->Professions->find('list', ['limit' => 200]);
        $employmentStatuses = $this->Jobs->EmploymentStatuses->find('list', ['limit' => 200]);
        $statuses = $this->Jobs->Statuses->find('list', ['limit' => 200]);
        $educationLevels = $this->Jobs->EducationLevels->find('list', ['limit' => 200]);
        $skillLevels = $this->Jobs->SkillLevels->find('list', ['limit' => 200]);
        $jobTypes = $this->Jobs->JobTypes->find('list', ['limit' => 200]);
        $this->set(compact('job', 'activityAreas', 'professions', 'employmentStatuses', 'statuses', 'educationLevels', 'skillLevels', 'jobTypes'));
        $this->set('_serialize', ['job']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Job id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Jobs->patchEntity($job, $this->request->data);
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job could not be saved. Please, try again.'));
            }
        }
        $activityAreas = $this->Jobs->ActivityAreas->find('list', ['limit' => 200]);
        $professions = $this->Jobs->Professions->find('list', ['limit' => 200]);
        $employmentStatuses = $this->Jobs->EmploymentStatuses->find('list', ['limit' => 200]);
        $statuses = $this->Jobs->Statuses->find('list', ['limit' => 200]);
        $educationLevels = $this->Jobs->EducationLevels->find('list', ['limit' => 200]);
        $skillLevels = $this->Jobs->SkillLevels->find('list', ['limit' => 200]);
        $jobTypes = $this->Jobs->JobTypes->find('list', ['limit' => 200]);
        $enterprise = $this->Jobs->Enterprises->find('list', ['limit' => 200])->where(['user_id' => $this->request->session()->read('Auth.User')['id']]);
        $this->set(compact('job', 'activityAreas', 'professions', 'employmentStatuses', 'statuses', 'educationLevels', 'skillLevels', 'jobTypes', 'enterprises'));
        $this->set('_serialize', ['job']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Job id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
