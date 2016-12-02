<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReadyToTravels Controller
 *
 * @property \App\Model\Table\ReadyToTravelsTable $ReadyToTravels
 */
class ReadyToTravelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $readyToTravels = $this->paginate($this->ReadyToTravels);

        $this->set(compact('readyToTravels'));
        $this->set('_serialize', ['readyToTravels']);
    }

    /**
     * View method
     *
     * @param string|null $id Ready To Travel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $readyToTravel = $this->ReadyToTravels->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('readyToTravel', $readyToTravel);
        $this->set('_serialize', ['readyToTravel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $readyToTravel = $this->ReadyToTravels->newEntity();
        if ($this->request->is('post')) {
            $readyToTravel = $this->ReadyToTravels->patchEntity($readyToTravel, $this->request->data);
            if ($this->ReadyToTravels->save($readyToTravel)) {
                $this->Flash->success(__('The ready to travel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ready to travel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('readyToTravel'));
        $this->set('_serialize', ['readyToTravel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ready To Travel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $readyToTravel = $this->ReadyToTravels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $readyToTravel = $this->ReadyToTravels->patchEntity($readyToTravel, $this->request->data);
            if ($this->ReadyToTravels->save($readyToTravel)) {
                $this->Flash->success(__('The ready to travel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ready to travel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('readyToTravel'));
        $this->set('_serialize', ['readyToTravel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ready To Travel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $readyToTravel = $this->ReadyToTravels->get($id);
        if ($this->ReadyToTravels->delete($readyToTravel)) {
            $this->Flash->success(__('The ready to travel has been deleted.'));
        } else {
            $this->Flash->error(__('The ready to travel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
