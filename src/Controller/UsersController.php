<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	
	public function initialize()
	{
		parent::initialize();
		$this->Auth->allow(['add']);
	}
	
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    	if ($this->request->session()->read('Auth.User')['role_id'] == Role::ROLE_ADMIN) {
	        $this->paginate = [
	            'contain' => ['Roles', 'Statuses']
	        ];
	        $users = $this->paginate($this->Users);
	
	        $this->set(compact('users'));
	        $this->set('_serialize', ['users']);
    	} else {
        	$this->Flash->warning(__('You cannot view this page'));
        	return $this->redirect(['controller' => 'jobs', 'action' => 'index']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Statuses', 'Candidates', 'Enterprises']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']); 
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $usercheck = $user;
            if ($this->Users->save($user)) {
            	$user = $this->Auth->identify();
            	$this->Auth->setUser($user);
                $this->Flash->success(__('The user has been saved.'));
				if ($usercheck->role_id == "1") {
                	return $this->redirect(['controller' => 'jobs', 'action' => 'index']);
				} else if ($usercheck->role_id == "2") {
					$this->Flash->success(__('You can now add a candidate to your account.'));
					return $this->redirect(['controller' => 'candidates', 'action' => 'add']);
				} else if ($usercheck->role_id == "3") {
					$this->Flash->success(__('You can now add an enterprise to your account.'));
					return $this->redirect(['controller' => 'enterprises', 'action' => 'add']);
				} else {
					return $this->redirect(['controller' => 'jobs', 'action' => 'index']);
				}
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $statuses = $this->Users->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'statuses'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $statuses = $this->Users->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'statuses'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function login()
    {
    	if (empty($this->request->session()->read("Auth.User"))) {
    		if ($this->request->is('post')) {
    			$user = $this->Auth->identify();
    			if ($user) {
    				$this->Auth->setUser($user);
    				return $this->redirect($this->Auth->redirectUrl());
    			}
    			$this->Flash->error(__('Invalid username or password, try again'));
    		}
    	} else {
    		//$this->Flash->warning(__('You are already connected!'));
    		return $this->redirect(['controller' => 'jobs', 'action' => 'index']);
    	}
    }
    
    public function logout()
    {
    	$this->Flash->success(__('You are now disconnected.'));
    	return $this->redirect($this->Auth->logout());
    }
}
