<?php
namespace App\Controller;

use App\Model\Entity\Role;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * Candidates Controller
 *
 * @property \App\Model\Table\CandidatesTable $Candidates
 */
class CandidatesController extends AppController
{
	public function isAuthorized($user)
	{
		return parent::isAuthorized($user);
	}
	
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
            'contain' => ['Users']
        ];
        $candidates = $this->paginate($this->Candidates);

        $this->set(compact('candidates'));
        $this->set('_serialize', ['candidates']);
    }

    /**
     * View method
     *
     * @param string|null $id Candidate id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $candidate = $this->Candidates->get($id, [
            'contain' => ['Users', 'Phones', 'Addresses', 'CoverLetters', 'Cvs', 'Files', 'Applys']
        ]);
        
        $candidate->views++;
        $status = $this->Candidates->save($candidate);
        
        $this->set('candidate', $candidate);
        $this->set('_serialize', ['candidate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	$userid = $this->request->session()->read('Auth.User')['id'];
    	$candidate = $this->Candidates->newEntity();
    	$phone = $this->Candidates->Phones->newEntity();
    	$candidatePhoneTable = TableRegistry::get('CandidatesPhones');
    	$candidatePhone = $candidatePhoneTable->newEntity();
    
    	$addressTable = TableRegistry::get('Addresses');
    	$address = $addressTable->newEntity();
    
    	if ($this->request->is('post')) {
    		//debug($this->request->data);
    		$candidate->first_name = $this->request->data['first_name'];
    		$candidate->last_name = $this->request->data['last_name'];
    		$candidate->views = $this->request->data['views'];
    		$candidate->user_id = $userid;
    
    		$phone->number = $this->request->data['number'];
    		$phone->post = $this->request->data['post'];
    		$phone->phone_type_id = $this->request->data['phone_type_id'];
    
    		if ($this->Candidates->save($candidate) && $this->Candidates->Phones->save($phone)) {
    			$candidatePhone->phone_id = $phone->id;
    			$candidatePhone->candidate_id = $candidate->id;
    
    			$address->number = $this->request->data['number_address'];
    			$address->street = $this->request->data['street'];
    			$address->apartment = $this->request->data['apartment'];
    			$address->city = $this->request->data['city'];
    			$address->postalCode = $this->request->data['postalCode'];
    			$address->state_province_id = $this->request->data['state_province_id'];
    			$address->candidate_id = $candidate->id;
    			if ($candidatePhoneTable->save($candidatePhone)) {
    				if ($addressTable->save($address)) {
    					$this->Flash->success(__('The candidate has been saved.'));
    					return $this->redirect(['action' => 'index']);
    				}
    			}
    		} else {
    			$this->Flash->error(__('The candidate could not be saved. Please, try again.'));
    		}
    	}
    
    	$cvs = $this->Candidates->Cvs->find('list', ['limit' => 200]);
    	$phones = $this->Candidates->Phones->find('list', ['limit' => 200]);
    	$stateProvinces = $this->Candidates->Addresses->StateProvinces->find('list', ['limit' => 200]);
    	$phoneTypes = $this->Candidates->Phones->PhoneTypes->find('list', ['limit' => 200]);
    	$this->set(compact('candidate', 'cvs', 'phones', 'phoneTypes', 'stateProvinces'));
    	$this->set('_serialize', ['candidate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Candidate id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $candidate = $this->Candidates->get($id, [
            'contain' => ['Phones']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $candidate = $this->Candidates->patchEntity($candidate, $this->request->data);
            if ($this->Candidates->save($candidate)) {
                $this->Flash->success(__('The candidate has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The candidate could not be saved. Please, try again.'));
            }
        }
        $users = $this->Candidates->Users->find('list', ['limit' => 200]);
        $phones = $this->Candidates->Phones->find('list', ['limit' => 200]);
        $this->set(compact('candidate', 'users', 'phones'));
        $this->set('_serialize', ['candidate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Candidate id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $candidate = $this->Candidates->get($id);
        if ($this->Candidates->delete($candidate)) {
            $this->Flash->success(__('The candidate has been deleted.'));
        } else {
            $this->Flash->error(__('The candidate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
