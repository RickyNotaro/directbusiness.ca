<?php
namespace App\Controller;

use App\Model\Entity\Role;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * Files Controller
 *
 * @property \App\Model\Table\FilesTable $Files
 */
class FilesController extends AppController
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
        $files = $this->paginate($this->Files);

        $this->set(compact('files'));
        $this->set('_serialize', ['files']);
    }

    /**
     * View method
     *
     * @param string|null $id File id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $file = $this->Files->get($id);

        $this->set('file', $file);
        $this->set('_serialize', ['file']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	/*$file = $this->Files->newEntity();
    	 if ($this->request->is('post')) {
    	 $file = $this->Files->patchEntity($file, $this->request->data);
    	 if ($this->Files->save($file)) {
    	 $this->Flash->success(__('The file has been saved.'));
    
    	 return $this->redirect(['action' => 'index']);
    	 } else {
    	 $this->Flash->error(__('The file could not be saved. Please, try again.'));
    	 }
    	 }
    	 $this->set(compact('file'));
    	 $this->set('_serialize', ['file']);
    	 */
    
    	$role = $this->request->session()->read('Auth.User.role_id');
    	$candidateid = $this->Files->Candidates->find('all')->where(['user_id' => $this->request->session()->read('Auth.User')['id']])->toArray()[0]['id'];
    	if ($role == Role::ROLE_CANDIDATE || $role == Role::ROLE_ADMIN) {
    		$uploadData = '';
    		if ($this->request->is('post')) {
    			if (!empty($this->request->data['file']['name'])) {
    				$fileName = $this->request->data['file']['name'];
    				$uploadPath = 'uploads/files/';
    				$uploadFile = $uploadPath.$fileName;
    				if (move_uploaded_file($this->request->data['file']['tmp_name'], $uploadFile)) {
    					$uploadData = $this->Files->newEntity();
    					$uploadData->fileName = $fileName;
    					$uploadData->path = $uploadFile;
    					$uploadData->candidate_id = $candidateid;
    					if ($this->Files->save($uploadData)) {
    						$this->Flash->success(__('CV has been uploaded and inserted successfully.'));
    						$this->redirect(['action' => 'index']);
    					} else {
    						$this->Flash->error(__('Unable to upload CV, please try again.'));
    					}
    				} else {
    					$this->Flash->error(__('Unable to move CV. It may already exist.'));
    				}
    			} else {
    				$this->Flash->error(__('Please choose a CV to upload.'));
    			}
    			 
    		}
    		$this->set(compact('file', 'uploadData'));
    		$this->set('_serialize', ['file', 'uploadData']);
    	} else {
    		$this->Flash->error(__('You must be a candidate to upload a CV.'));
    		return $this->redirect(['action' => 'index']);
    	}
    }

    /**
     * Edit method
     *
     * @param string|null $id File id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->Files->patchEntity($file, $this->request->data);
            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The file could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('file'));
        $this->set('_serialize', ['file']);
    }

    /**
     * Delete method
     *
     * @param string|null $id File id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $file = $this->Files->get($id);
        if ($this->Files->delete($file)) {
            $this->Flash->success(__('The file has been deleted.'));
        } else {
            $this->Flash->error(__('The file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
