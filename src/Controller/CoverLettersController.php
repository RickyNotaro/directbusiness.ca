<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * CoverLetters Controller
 *
 * @property \App\Model\Table\CoverLettersTable $CoverLetters
 */
class CoverLettersController extends AppController
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
            'contain' => ['CoverLetterModels', 'Candidates']
        ];
        $coverLetters = $this->paginate($this->CoverLetters);

        $this->set(compact('coverLetters'));
        $this->set('_serialize', ['coverLetters']);
    }

    /**
     * View method
     *
     * @param string|null $id Cover Letter id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coverLetter = $this->CoverLetters->get($id, [
            'contain' => ['CoverLetterModels', 'Candidates', 'Applys']
        ]);

        $this->set('coverLetter', $coverLetter);
        $this->set('_serialize', ['coverLetter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	$candidateid = $this->CoverLetters->Candidates->find('all')->where(['user_id' => $this->request->session()->read('Auth.User')['id']])->toArray()[0]['id'];
        $coverLetter = $this->CoverLetters->newEntity();
        if ($this->request->is('post')) {
            $coverLetter = $this->CoverLetters->patchEntity($coverLetter, $this->request->data);
            $coverLetter->candidate_id = $candidateid;
            if ($this->CoverLetters->save($coverLetter)) {
                $this->Flash->success(__('The cover letter has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cover letter could not be saved. Please, try again.'));
            }
        }

        $coverLetterCount = $this->CoverLetters->find('all')->where(['candidate_id' => $candidateid])->count();
        if ($coverLetterCount >= 5) {
        	$this->Flash->error(__('You can only add up to 5 cover letters.'));
        	return $this->redirect(['action' => 'index']);
        }
        

        $coverLetterModels = $this->CoverLetters->CoverLetterModels->find('list', ['limit' => 200]);
        $coverLetterOneText = $this->CoverLetters->CoverLetterModels->find('all')->where(['id' => "1"])->toArray()[0]['TEXT'];
        $coverLetterTwoText = $this->CoverLetters->CoverLetterModels->find('all')->where(['id' => "2"])->toArray()[0]['TEXT'];

        $this->set(compact('coverLetter', 'coverLetterModels', 'coverLetterOneText', 'coverLetterTwoText'));
        $this->set('_serialize', ['coverLetter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cover Letter id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coverLetter = $this->CoverLetters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coverLetter = $this->CoverLetters->patchEntity($coverLetter, $this->request->data);
            if ($this->CoverLetters->save($coverLetter)) {
                $this->Flash->success(__('The cover letter has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cover letter could not be saved. Please, try again.'));
            }
        }
        $coverLetterModels = $this->CoverLetters->CoverLetterModels->find('list', ['limit' => 200]);
        $candidate = $this->CoverLetters->Candidates->find('list')->where(['user_id' => $this->request->session()->read('Auth.User')['id']]);
        $this->set(compact('coverLetter', 'coverLetterModels', 'candidate'));
        $this->set('_serialize', ['coverLetter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cover Letter id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coverLetter = $this->CoverLetters->get($id);
        if ($this->CoverLetters->delete($coverLetter)) {
            $this->Flash->success(__('The cover letter has been deleted.'));
        } else {
            $this->Flash->error(__('The cover letter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
