<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CareerLevels Controller
 *
 * @property \App\Model\Table\CareerLevelsTable $CareerLevels
 */
class CareerLevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $careerLevels = $this->paginate($this->CareerLevels);

        $this->set(compact('careerLevels'));
        $this->set('_serialize', ['careerLevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Career Level id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $careerLevel = $this->CareerLevels->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('careerLevel', $careerLevel);
        $this->set('_serialize', ['careerLevel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $careerLevel = $this->CareerLevels->newEntity();
        if ($this->request->is('post')) {
            $careerLevel = $this->CareerLevels->patchEntity($careerLevel, $this->request->data);
            if ($this->CareerLevels->save($careerLevel)) {
                $this->Flash->success(__('The career level has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The career level could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('careerLevel'));
        $this->set('_serialize', ['careerLevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Career Level id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $careerLevel = $this->CareerLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $careerLevel = $this->CareerLevels->patchEntity($careerLevel, $this->request->data);
            if ($this->CareerLevels->save($careerLevel)) {
                $this->Flash->success(__('The career level has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The career level could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('careerLevel'));
        $this->set('_serialize', ['careerLevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Career Level id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $careerLevel = $this->CareerLevels->get($id);
        if ($this->CareerLevels->delete($careerLevel)) {
            $this->Flash->success(__('The career level has been deleted.'));
        } else {
            $this->Flash->error(__('The career level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
