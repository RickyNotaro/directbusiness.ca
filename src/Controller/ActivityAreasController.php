<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ActivityAreas Controller
 *
 * @property \App\Model\Table\ActivityAreasTable $ActivityAreas
 */
class ActivityAreasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $activityAreas = $this->paginate($this->ActivityAreas);

        $this->set(compact('activityAreas'));
        $this->set('_serialize', ['activityAreas']);
    }

    /**
     * View method
     *
     * @param string|null $id Activity Area id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activityArea = $this->ActivityAreas->get($id, [
            'contain' => ['Cvs', 'Enterprises', 'Jobs']
        ]);

        $this->set('activityArea', $activityArea);
        $this->set('_serialize', ['activityArea']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activityArea = $this->ActivityAreas->newEntity();
        if ($this->request->is('post')) {
            $activityArea = $this->ActivityAreas->patchEntity($activityArea, $this->request->data);
            if ($this->ActivityAreas->save($activityArea)) {
                $this->Flash->success(__('The activity area has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The activity area could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('activityArea'));
        $this->set('_serialize', ['activityArea']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Activity Area id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activityArea = $this->ActivityAreas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activityArea = $this->ActivityAreas->patchEntity($activityArea, $this->request->data);
            if ($this->ActivityAreas->save($activityArea)) {
                $this->Flash->success(__('The activity area has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The activity area could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('activityArea'));
        $this->set('_serialize', ['activityArea']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Activity Area id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activityArea = $this->ActivityAreas->get($id);
        if ($this->ActivityAreas->delete($activityArea)) {
            $this->Flash->success(__('The activity area has been deleted.'));
        } else {
            $this->Flash->error(__('The activity area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
