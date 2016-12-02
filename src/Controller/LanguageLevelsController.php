<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LanguageLevels Controller
 *
 * @property \App\Model\Table\LanguageLevelsTable $LanguageLevels
 */
class LanguageLevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $languageLevels = $this->paginate($this->LanguageLevels);

        $this->set(compact('languageLevels'));
        $this->set('_serialize', ['languageLevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Language Level id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $languageLevel = $this->LanguageLevels->get($id, [
            'contain' => ['CvsLanguageLevelsLanguages']
        ]);

        $this->set('languageLevel', $languageLevel);
        $this->set('_serialize', ['languageLevel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $languageLevel = $this->LanguageLevels->newEntity();
        if ($this->request->is('post')) {
            $languageLevel = $this->LanguageLevels->patchEntity($languageLevel, $this->request->data);
            if ($this->LanguageLevels->save($languageLevel)) {
                $this->Flash->success(__('The language level has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The language level could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('languageLevel'));
        $this->set('_serialize', ['languageLevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Language Level id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $languageLevel = $this->LanguageLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $languageLevel = $this->LanguageLevels->patchEntity($languageLevel, $this->request->data);
            if ($this->LanguageLevels->save($languageLevel)) {
                $this->Flash->success(__('The language level has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The language level could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('languageLevel'));
        $this->set('_serialize', ['languageLevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Language Level id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $languageLevel = $this->LanguageLevels->get($id);
        if ($this->LanguageLevels->delete($languageLevel)) {
            $this->Flash->success(__('The language level has been deleted.'));
        } else {
            $this->Flash->error(__('The language level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
