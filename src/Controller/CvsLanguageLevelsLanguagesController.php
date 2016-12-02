<?php
namespace App\Controller;
use App\Model\Entity\Role;
use App\Controller\AppController;

/**
 * CvsLanguageLevelsLanguages Controller
 *
 * @property \App\Model\Table\CvsLanguageLevelsLanguagesTable $CvsLanguageLevelsLanguages
 */
class CvsLanguageLevelsLanguagesController extends AppController
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
            'contain' => ['Cvs', 'LanguageLevels', 'Languages']
        ];
        $cvsLanguageLevelsLanguages = $this->paginate($this->CvsLanguageLevelsLanguages);

        $this->set(compact('cvsLanguageLevelsLanguages'));
        $this->set('_serialize', ['cvsLanguageLevelsLanguages']);
    }

    /**
     * View method
     *
     * @param string|null $id Cvs Language Levels Language id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cvsLanguageLevelsLanguage = $this->CvsLanguageLevelsLanguages->get($id, [
            'contain' => ['Cvs', 'LanguageLevels', 'Languages']
        ]);

        $this->set('cvsLanguageLevelsLanguage', $cvsLanguageLevelsLanguage);
        $this->set('_serialize', ['cvsLanguageLevelsLanguage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cvsLanguageLevelsLanguage = $this->CvsLanguageLevelsLanguages->newEntity();
        if ($this->request->is('post')) {
            $cvsLanguageLevelsLanguage = $this->CvsLanguageLevelsLanguages->patchEntity($cvsLanguageLevelsLanguage, $this->request->data);
            if ($this->CvsLanguageLevelsLanguages->save($cvsLanguageLevelsLanguage)) {
                $this->Flash->success(__('The cvs language levels language has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cvs language levels language could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->CvsLanguageLevelsLanguages->Cvs->find('list', ['limit' => 200]);
        $languageLevels = $this->CvsLanguageLevelsLanguages->LanguageLevels->find('list', ['limit' => 200]);
        $languages = $this->CvsLanguageLevelsLanguages->Languages->find('list', ['limit' => 200]);
        $this->set(compact('cvsLanguageLevelsLanguage', 'cvs', 'languageLevels', 'languages'));
        $this->set('_serialize', ['cvsLanguageLevelsLanguage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cvs Language Levels Language id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cvsLanguageLevelsLanguage = $this->CvsLanguageLevelsLanguages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cvsLanguageLevelsLanguage = $this->CvsLanguageLevelsLanguages->patchEntity($cvsLanguageLevelsLanguage, $this->request->data);
            if ($this->CvsLanguageLevelsLanguages->save($cvsLanguageLevelsLanguage)) {
                $this->Flash->success(__('The cvs language levels language has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cvs language levels language could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->CvsLanguageLevelsLanguages->Cvs->find('list', ['limit' => 200]);
        $languageLevels = $this->CvsLanguageLevelsLanguages->LanguageLevels->find('list', ['limit' => 200]);
        $languages = $this->CvsLanguageLevelsLanguages->Languages->find('list', ['limit' => 200]);
        $this->set(compact('cvsLanguageLevelsLanguage', 'cvs', 'languageLevels', 'languages'));
        $this->set('_serialize', ['cvsLanguageLevelsLanguage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cvs Language Levels Language id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cvsLanguageLevelsLanguage = $this->CvsLanguageLevelsLanguages->get($id);
        if ($this->CvsLanguageLevelsLanguages->delete($cvsLanguageLevelsLanguage)) {
            $this->Flash->success(__('The cvs language levels language has been deleted.'));
        } else {
            $this->Flash->error(__('The cvs language levels language could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
