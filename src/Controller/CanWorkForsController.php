<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CanWorkFors Controller
 *
 * @property \App\Model\Table\CanWorkForsTable $CanWorkFors
 */
class CanWorkForsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $canWorkFors = $this->paginate($this->CanWorkFors);

        $this->set(compact('canWorkFors'));
        $this->set('_serialize', ['canWorkFors']);
    }

    /**
     * View method
     *
     * @param string|null $id Can Work For id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $canWorkFor = $this->CanWorkFors->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('canWorkFor', $canWorkFor);
        $this->set('_serialize', ['canWorkFor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $canWorkFor = $this->CanWorkFors->newEntity();
        if ($this->request->is('post')) {
            $canWorkFor = $this->CanWorkFors->patchEntity($canWorkFor, $this->request->data);
            if ($this->CanWorkFors->save($canWorkFor)) {
                $this->Flash->success(__('The can work for has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The can work for could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('canWorkFor'));
        $this->set('_serialize', ['canWorkFor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Can Work For id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $canWorkFor = $this->CanWorkFors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $canWorkFor = $this->CanWorkFors->patchEntity($canWorkFor, $this->request->data);
            if ($this->CanWorkFors->save($canWorkFor)) {
                $this->Flash->success(__('The can work for has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The can work for could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('canWorkFor'));
        $this->set('_serialize', ['canWorkFor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Can Work For id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $canWorkFor = $this->CanWorkFors->get($id);
        if ($this->CanWorkFors->delete($canWorkFor)) {
            $this->Flash->success(__('The can work for has been deleted.'));
        } else {
            $this->Flash->error(__('The can work for could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
