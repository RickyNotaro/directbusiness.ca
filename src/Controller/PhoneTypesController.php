<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PhoneTypes Controller
 *
 * @property \App\Model\Table\PhoneTypesTable $PhoneTypes
 */
class PhoneTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $phoneTypes = $this->paginate($this->PhoneTypes);

        $this->set(compact('phoneTypes'));
        $this->set('_serialize', ['phoneTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Phone Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $phoneType = $this->PhoneTypes->get($id, [
            'contain' => ['Phones']
        ]);

        $this->set('phoneType', $phoneType);
        $this->set('_serialize', ['phoneType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $phoneType = $this->PhoneTypes->newEntity();
        if ($this->request->is('post')) {
            $phoneType = $this->PhoneTypes->patchEntity($phoneType, $this->request->data);
            if ($this->PhoneTypes->save($phoneType)) {
                $this->Flash->success(__('The phone type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The phone type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('phoneType'));
        $this->set('_serialize', ['phoneType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Phone Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $phoneType = $this->PhoneTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $phoneType = $this->PhoneTypes->patchEntity($phoneType, $this->request->data);
            if ($this->PhoneTypes->save($phoneType)) {
                $this->Flash->success(__('The phone type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The phone type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('phoneType'));
        $this->set('_serialize', ['phoneType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Phone Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $phoneType = $this->PhoneTypes->get($id);
        if ($this->PhoneTypes->delete($phoneType)) {
            $this->Flash->success(__('The phone type has been deleted.'));
        } else {
            $this->Flash->error(__('The phone type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
