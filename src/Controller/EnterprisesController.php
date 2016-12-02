<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * Enterprises Controller
 *
 * @property \App\Model\Table\EnterprisesTable $Enterprises
 */
class EnterprisesController extends AppController
{
	
	
	public function isAuthorized($user)
	{
		if (in_array($this->request->action, ['edit', 'delete'])) {
			$entrepriseId = (int)$this->request->params['pass'][0];
			if ($this->Enterprises->isOwnedBy($entrepriseId, $user['id'])) {
				return true;
			}
		}
		return parent::isAuthorized($user);
	}
	
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
        $this->paginate = [
            'contain' => ['ActivityAreas', 'Users']
        ];
        $enterprises = $this->paginate($this->Enterprises);

        $this->set(compact('enterprises'));
        $this->set('_serialize', ['enterprises']);
    }

    /**
     * View method
     *
     * @param string|null $id Enterprise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enterprise = $this->Enterprises->get($id, [
            'contain' => ['ActivityAreas', 'Users', 'Jobs']
        ]);

        $this->set('enterprise', $enterprise);
        $this->set('_serialize', ['enterprise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	$userid = $this->request->session()->read('Auth.User')['id'];
        $enterprise = $this->Enterprises->newEntity();
        if ($this->request->is('post')) {
            $enterprise = $this->Enterprises->patchEntity($enterprise, $this->request->data);
            $enterprise->user_id = $userid;
            if ($this->Enterprises->save($enterprise)) {
                $this->Flash->success(__('The enterprise has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The enterprise could not be saved. Please, try again.'));
            }
        }
        $user = array($this->request->session()->read('Auth.User')['id'] => $this->request->session()->read('Auth.User')['username']);
        $activityAreas = $this->Enterprises->ActivityAreas->find('list', ['limit' => 200]);
        $this->set(compact('enterprise', 'activityAreas', 'user'));
        $this->set('_serialize', ['enterprise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Enterprise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enterprise = $this->Enterprises->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enterprise = $this->Enterprises->patchEntity($enterprise, $this->request->data);
            if ($this->Enterprises->save($enterprise)) {
                $this->Flash->success(__('The enterprise has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The enterprise could not be saved. Please, try again.'));
            }
        }
        $activityAreas = $this->Enterprises->ActivityAreas->find('list', ['limit' => 200]);
        $user = array($this->request->session()->read('Auth.User')['id'] => $this->request->session()->read('Auth.User')['username']);
        $this->set(compact('enterprise', 'activityAreas', 'user'));
        $this->set('_serialize', ['enterprise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Enterprise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enterprise = $this->Enterprises->get($id);
        if ($this->Enterprises->delete($enterprise)) {
            $this->Flash->success(__('The enterprise has been deleted.'));
        } else {
            $this->Flash->error(__('The enterprise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
