<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * CandidatesPhones Controller
 *
 * @property \App\Model\Table\CandidatesPhonesTable $CandidatesPhones
 */
class CandidatesPhonesController extends AppController
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
            'contain' => ['Phones', 'Candidates']
        ];
        $candidatesPhones = $this->paginate($this->CandidatesPhones);

        $this->set(compact('candidatesPhones'));
        $this->set('_serialize', ['candidatesPhones']);
    }

    /**
     * View method
     *
     * @param string|null $id Candidates Phone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $candidatesPhone = $this->CandidatesPhones->get($id, [
            'contain' => ['Phones', 'Candidates']
        ]);

        $this->set('candidatesPhone', $candidatesPhone);
        $this->set('_serialize', ['candidatesPhone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $candidatesPhone = $this->CandidatesPhones->newEntity();
        if ($this->request->is('post')) {
            $candidatesPhone = $this->CandidatesPhones->patchEntity($candidatesPhone, $this->request->data);
            if ($this->CandidatesPhones->save($candidatesPhone)) {
                $this->Flash->success(__('The candidates phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The candidates phone could not be saved. Please, try again.'));
            }
        }
        $phones = $this->CandidatesPhones->Phones->find('list', ['limit' => 200]);
        $candidate = $this->CandidatesPhones->Candidates->find('list')->where(['user_id' => $this->request->session()->read('Auth.User')['id']]);
        $this->set(compact('candidatesPhone', 'phones', 'candidate'));
        $this->set('_serialize', ['candidatesPhone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Candidates Phone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $candidatesPhone = $this->CandidatesPhones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $candidatesPhone = $this->CandidatesPhones->patchEntity($candidatesPhone, $this->request->data);
            if ($this->CandidatesPhones->save($candidatesPhone)) {
                $this->Flash->success(__('The candidates phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The candidates phone could not be saved. Please, try again.'));
            }
        }
        $phones = $this->CandidatesPhones->Phones->find('list', ['limit' => 200]);
        $candidate = $this->CandidatesPhones->Candidates->find('list')->where(['user_id' => $this->request->session()->read('Auth.User')['id']]);
        $this->set(compact('candidatesPhone', 'phones', 'candidate'));
        $this->set('_serialize', ['candidatesPhone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Candidates Phone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $candidatesPhone = $this->CandidatesPhones->get($id);
        if ($this->CandidatesPhones->delete($candidatesPhone)) {
            $this->Flash->success(__('The candidates phone has been deleted.'));
        } else {
            $this->Flash->error(__('The candidates phone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
