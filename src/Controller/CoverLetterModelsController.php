<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoverLetterModels Controller
 *
 * @property \App\Model\Table\CoverLetterModelsTable $CoverLetterModels
 */
class CoverLetterModelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $coverLetterModels = $this->paginate($this->CoverLetterModels);

        $this->set(compact('coverLetterModels'));
        $this->set('_serialize', ['coverLetterModels']);
    }

    /**
     * View method
     *
     * @param string|null $id Cover Letter Model id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coverLetterModel = $this->CoverLetterModels->get($id, [
            'contain' => ['CoverLetters']
        ]);

        $this->set('coverLetterModel', $coverLetterModel);
        $this->set('_serialize', ['coverLetterModel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coverLetterModel = $this->CoverLetterModels->newEntity();
        if ($this->request->is('post')) {
            $coverLetterModel = $this->CoverLetterModels->patchEntity($coverLetterModel, $this->request->data);
            if ($this->CoverLetterModels->save($coverLetterModel)) {
                $this->Flash->success(__('The cover letter model has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cover letter model could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coverLetterModel'));
        $this->set('_serialize', ['coverLetterModel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cover Letter Model id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coverLetterModel = $this->CoverLetterModels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coverLetterModel = $this->CoverLetterModels->patchEntity($coverLetterModel, $this->request->data);
            if ($this->CoverLetterModels->save($coverLetterModel)) {
                $this->Flash->success(__('The cover letter model has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cover letter model could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coverLetterModel'));
        $this->set('_serialize', ['coverLetterModel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cover Letter Model id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coverLetterModel = $this->CoverLetterModels->get($id);
        if ($this->CoverLetterModels->delete($coverLetterModel)) {
            $this->Flash->success(__('The cover letter model has been deleted.'));
        } else {
            $this->Flash->error(__('The cover letter model could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
