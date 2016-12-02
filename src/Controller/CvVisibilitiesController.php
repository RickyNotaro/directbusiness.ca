<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CvVisibilities Controller
 *
 * @property \App\Model\Table\CvVisibilitiesTable $CvVisibilities
 */
class CvVisibilitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cvVisibilities = $this->paginate($this->CvVisibilities);

        $this->set(compact('cvVisibilities'));
        $this->set('_serialize', ['cvVisibilities']);
    }

    /**
     * View method
     *
     * @param string|null $id Cv Visibility id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cvVisibility = $this->CvVisibilities->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('cvVisibility', $cvVisibility);
        $this->set('_serialize', ['cvVisibility']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cvVisibility = $this->CvVisibilities->newEntity();
        if ($this->request->is('post')) {
            $cvVisibility = $this->CvVisibilities->patchEntity($cvVisibility, $this->request->data);
            if ($this->CvVisibilities->save($cvVisibility)) {
                $this->Flash->success(__('The cv visibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cv visibility could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cvVisibility'));
        $this->set('_serialize', ['cvVisibility']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cv Visibility id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cvVisibility = $this->CvVisibilities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cvVisibility = $this->CvVisibilities->patchEntity($cvVisibility, $this->request->data);
            if ($this->CvVisibilities->save($cvVisibility)) {
                $this->Flash->success(__('The cv visibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cv visibility could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cvVisibility'));
        $this->set('_serialize', ['cvVisibility']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cv Visibility id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cvVisibility = $this->CvVisibilities->get($id);
        if ($this->CvVisibilities->delete($cvVisibility)) {
            $this->Flash->success(__('The cv visibility has been deleted.'));
        } else {
            $this->Flash->error(__('The cv visibility could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
