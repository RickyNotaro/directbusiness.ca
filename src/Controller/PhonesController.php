<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * Phones Controller
 *
 * @property \App\Model\Table\PhonesTable $Phones
 */
class PhonesController extends AppController
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
            'contain' => ['PhoneTypes']
        ];
        $phones = $this->paginate($this->Phones);

        $this->set(compact('phones'));
        $this->set('_serialize', ['phones']);
    }

    /**
     * View method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $phone = $this->Phones->get($id, [
            'contain' => ['PhoneTypes', 'Candidates']
        ]);

        $this->set('phone', $phone);
        $this->set('_serialize', ['phone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $phone = $this->Phones->newEntity();
        if ($this->request->is('post')) {
            $phone = $this->Phones->patchEntity($phone, $this->request->data);
            if ($this->Phones->save($phone)) {
                $this->Flash->success(__('The phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The phone could not be saved. Please, try again.'));
            }
        }
        $phoneTypes = $this->Phones->PhoneTypes->find('list', ['limit' => 200]);
        $candidate = $this->Phones->Candidates->find('list')->where(['user_id' => $this->request->session()->read('Auth.User')['id']]);
        $this->set(compact('phone', 'phoneTypes', 'candidate'));
        $this->set('_serialize', ['phone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $phone = $this->Phones->get($id, [
            'contain' => ['Candidates']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $phone = $this->Phones->patchEntity($phone, $this->request->data);
            if ($this->Phones->save($phone)) {
                $this->Flash->success(__('The phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The phone could not be saved. Please, try again.'));
            }
        }
        $phoneTypes = $this->Phones->PhoneTypes->find('list', ['limit' => 200]);
        $candidate = $this->Phones->Candidates->find('list')->where(['user_id' => $this->request->session()->read('Auth.User')['id']]);
        $this->set(compact('phone', 'phoneTypes', 'candidate'));
        $this->set('_serialize', ['phone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $phone = $this->Phones->get($id);
        if ($this->Phones->delete($phone)) {
            $this->Flash->success(__('The phone has been deleted.'));
        } else {
            $this->Flash->error(__('The phone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
