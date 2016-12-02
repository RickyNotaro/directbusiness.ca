<?php
namespace App\Controller;

use App\Model\Entity\Role;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;


/**
 * Applys Controller
 *
 * @property \App\Model\Table\ApplysTable $Applys
 */
class ApplysController extends AppController
{
	public function isAuthorized($user)
	{
		return parent::isAuthorized($user);
	}

	public function initialize()
	{
		parent::initialize();
		$this->Auth->deny();
		if ($this->request->session()->read('Auth.User')['role_id'] == Role::ROLE_ADMIN) {
			$this->Auth->allow();
		} else if ($this->request->session()->read('Auth.User')['role_id'] == Role::ROLE_CANDIDATE) {
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
				'limit' => 10,
				'contain' => ['Files', 'Cvs', 'Jobs', 'CoverLetters']
		];
		$applys = $this->paginate($this->Applys);

		$this->set(compact('applys'));
		$this->set('_serialize', ['applys']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id Apply id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$apply = $this->Applys->get($id, [
				'contain' => ['Files', 'Cvs', 'Jobs', 'CoverLetters']
		]);

		$this->set('apply', $apply);
		$this->set('_serialize', ['apply']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add($id = null)
	{
		$apply = $this->Applys->newEntity();
		$candidateid = $this->Applys->Candidates->find('all')->where(['user_id' => $this->request->session()->read('Auth.User')['id']])->toArray()[0]['id'];
		$candidate = $this->Applys->Candidates->get($candidateid);
		if ($this->request->is('post')) {
			// Mail section start
			$enterpriseid = ($id != null) ? $this->Applys->Jobs->get($id)->enterprise_id : $this->Applys->Jobs->get($this->request->data['job_id'])->enterprise_id;
			$job = $this->Applys->Jobs->get($this->request->data['job_id']);
			$enterprise = $this->Applys->Jobs->Enterprises->get($enterpriseid);
			$user = $this->Applys->Jobs->Enterprises->Users->get($enterprise->user_id);
			$apply = $this->Applys->patchEntity($apply, $this->request->data);
			$apply->candidate_id = $candidateid; 
			if (isset($this->request->data['switch']))
				$apply->file_id = null;
				else
					$apply->cv_id = null;
					if ($this->Applys->save($apply)) {
						$email = new Email('default');
						$email->to($user->email)
						->emailFormat('html')
						->template('jobs_mail', 'default')
						->viewVars(compact('candidate', 'apply', 'job'))
						->attachments(array(
							array(
								'file' => ROOT . '/webroot/img/logo.png',
								'mimetype' => 'image/png',
								'contentId' => '15'
							),
						))
						->subject("DirectBusiness Notification")
						->send();
						$this->Flash->success(__('The apply has been saved.'));
						return $this->redirect(['action' => 'index']);
					} else {
						 
						$this->Flash->error(__('The apply could not be saved. Please, try again.'));
					}
		}

		$files = $this->Applys->Files->find('list', ['limit' => 200])->where(['candidate_id' => $candidateid]);
		$cvs = $this->Applys->Cvs->find('list', ['limit' => 200])->where(['candidate_id' => $candidateid]);
		$coverLetters = $this->Applys->CoverLetters->find('list', ['limit' => 200])->where(['candidate_id' => $candidateid]);

		if ($id != null) {
			$jobs = $this->Applys->Jobs->find('list', ['limit' => 200])->where(['id' => $id]);
		} else {
			$jobs = $this->Applys->Jobs->find('list', ['limit' => 200]);
		}

		$this->set(compact('apply', 'cvs', 'jobs', 'coverLetters', 'files'));
		$this->set('_serialize', ['apply']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Apply id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$apply = $this->Applys->get($id, [
				'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$apply = $this->Applys->patchEntity($apply, $this->request->data);
			if ($this->Applys->save($apply)) {
				$this->Flash->success(__('The apply has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The apply could not be saved. Please, try again.'));
			}
		}
		$files = $this->Applys->Files->find('list', ['limit' => 200]);
		$cvs = $this->Applys->Cvs->find('list', ['limit' => 200]);
		$jobs = $this->Applys->Jobs->find('list', ['limit' => 200]);
		$coverLetters = $this->Applys->CoverLetters->find('list', ['limit' => 200]);
		$this->set(compact('apply', 'files', 'cvs', 'jobs', 'coverLetters'));
		$this->set('_serialize', ['apply']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Apply id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$apply = $this->Applys->get($id);
		if ($this->Applys->delete($apply)) {
			$this->Flash->success(__('The apply has been deleted.'));
		} else {
			$this->Flash->error(__('The apply could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
