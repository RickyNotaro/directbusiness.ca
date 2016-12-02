<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * Cvs Controller
 *
 * @property \App\Model\Table\CvsTable $Cvs
 */
class CvsController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		if ($this->request->session()->read('Auth.User')['role_id'] == Role::ROLE_ADMIN ||
				$this->request->session()->read('Auth.User')['role_id'] == Role::ROLE_CANDIDATE) {
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
		$this->paginate = [
				'contain' => ['CareerLevels', 'EmploymentStatuses', 'ActivityAreas', 'Professions', 'EducationLevels', 'ReadyToTravels', 'CanWorkFors', 'CvVisibilities']
		];
		$cvs = $this->paginate($this->Cvs);

		$this->set(compact('cvs'));
		$this->set('_serialize', ['cvs']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Cv id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$cv = $this->Cvs->get($id, [
				'contain' => ['CareerLevels', 'EmploymentStatuses', 'ActivityAreas', 'Professions', 'EducationLevels', 'ReadyToTravels', 'CanWorkFors', 'CvVisibilities', 'Candidates', 'SkillCards', 'WorkingLicences', 'Applys', 'CvsLanguageLevelsLanguages']
		]);

		$this->set('cv', $cv);
		$this->set('_serialize', ['cv']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$candidateid = $this->Cvs->Candidates->find('all')->where(['user_id' => $this->request->session()->read('Auth.User')['id']])->toArray()[0]['id'];
		$cvLanguageLevels = $this->Cvs->CvsLanguageLevelsLanguages->newEntity();
		$cv = $this->Cvs->newEntity();
		if ($this->request->is('post')) {
			$cv = $this->Cvs->patchEntity($cv, $this->request->data);
			$cv->candidate_id = $candidateid;
			if ($this->Cvs->save($cv)) {
				$cvLanguageLevels->cv_id = $cv->id;
				$cvLanguageLevels->language_level_id = $this->request->data['language_level_id'];
				$cvLanguageLevels->langage_id = $this->request->data['langage_id'];
				if ($this->Cvs->CvsLanguageLevelsLanguages->save($cvLanguageLevels)) {
					$this->Flash->success(__('The cv has been saved.'));
					return $this->redirect(['action' => 'index']);
				}
			} else {
				$this->Flash->error(__('The cv could not be saved. Please, try again.'));
			}
		}
		$careerLevels = $this->Cvs->CareerLevels->find('list', ['limit' => 200]);
		$employmentStatuses = $this->Cvs->EmploymentStatuses->find('list', ['limit' => 200]);
		$activityAreas = $this->Cvs->ActivityAreas->find('list', ['limit' => 200]);
		$professions = $this->Cvs->Professions->find('list', ['limit' => 200]);
		$educationLevels = $this->Cvs->EducationLevels->find('list', ['limit' => 200]);
		$readyToTravels = $this->Cvs->ReadyToTravels->find('list', ['limit' => 200]);
		$canWorkFors = $this->Cvs->CanWorkFors->find('list', ['limit' => 200]);
		$cvVisibilities = $this->Cvs->CvVisibilities->find('list', ['limit' => 200]);
		$skillCards = $this->Cvs->SkillCards->find('list', ['limit' => 200]);
		$workingLicences = $this->Cvs->WorkingLicences->find('list', ['limit' => 200]);
		$languageLevels = $this->Cvs->CvsLanguageLevelsLanguages->LanguageLevels->find('list', ['limit' => 200]);
		$languages = $this->Cvs->CvsLanguageLevelsLanguages->Languages->find('list', ['limit' => 200]);
		$this->set(compact('cv', 'careerLevels', 'languageLevels', 'languages', 'employmentStatuses', 'activityAreas', 'professions', 'educationLevels', 'readyToTravels', 'canWorkFors', 'cvVisibilities', 'skillCards', 'workingLicences'));
		$this->set('_serialize', ['cv']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Cv id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$cv = $this->Cvs->get($id, [
				'contain' => ['Candidates', 'SkillCards', 'WorkingLicences']
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$cv = $this->Cvs->patchEntity($cv, $this->request->data);
			if ($this->Cvs->save($cv)) {
				$this->Flash->success(__('The cv has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The cv could not be saved. Please, try again.'));
			}
		}
		$careerLevels = $this->Cvs->CareerLevels->find('list', ['limit' => 200]);
		$employmentStatuses = $this->Cvs->EmploymentStatuses->find('list', ['limit' => 200]);
		$activityAreas = $this->Cvs->ActivityAreas->find('list', ['limit' => 200]);
		$professions = $this->Cvs->Professions->find('list', ['limit' => 200]);
		$educationLevels = $this->Cvs->EducationLevels->find('list', ['limit' => 200]);
		$readyToTravels = $this->Cvs->ReadyToTravels->find('list', ['limit' => 200]);
		$canWorkFors = $this->Cvs->CanWorkFors->find('list', ['limit' => 200]);
		$cvVisibilities = $this->Cvs->CvVisibilities->find('list', ['limit' => 200]);
		$candidate = $this->CoverLetters->Candidates->find('list')->where(['user_id' => $this->request->session()->read('Auth.User')['id']]);
		$skillCards = $this->Cvs->SkillCards->find('list', ['limit' => 200]);
		$workingLicences = $this->Cvs->WorkingLicences->find('list', ['limit' => 200]);
		$this->set(compact('cv', 'careerLevels', 'employmentStatuses', 'activityAreas', 'professions', 'educationLevels', 'readyToTravels', 'canWorkFors', 'cvVisibilities', 'candidate', 'skillCards', 'workingLicences'));
		$this->set('_serialize', ['cv']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Cv id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$cv = $this->Cvs->get($id);
		if ($this->Cvs->delete($cv)) {
			$this->Flash->success(__('The cv has been deleted.'));
		} else {
			$this->Flash->error(__('The cv could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
