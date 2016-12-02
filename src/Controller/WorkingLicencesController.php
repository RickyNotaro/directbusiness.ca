<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WorkingLicences Controller
 *
 * @property \App\Model\Table\WorkingLicencesTable $WorkingLicences
 */
class WorkingLicencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $workingLicences = $this->paginate($this->WorkingLicences);

        $this->set(compact('workingLicences'));
        $this->set('_serialize', ['workingLicences']);
    }

    /**
     * View method
     *
     * @param string|null $id Working Licence id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workingLicence = $this->WorkingLicences->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('workingLicence', $workingLicence);
        $this->set('_serialize', ['workingLicence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workingLicence = $this->WorkingLicences->newEntity();
        if ($this->request->is('post')) {
            $workingLicence = $this->WorkingLicences->patchEntity($workingLicence, $this->request->data);
            if ($this->WorkingLicences->save($workingLicence)) {
                $this->Flash->success(__('The working licence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The working licence could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->WorkingLicences->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('workingLicence', 'cvs'));
        $this->set('_serialize', ['workingLicence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Working Licence id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workingLicence = $this->WorkingLicences->get($id, [
            'contain' => ['Cvs']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workingLicence = $this->WorkingLicences->patchEntity($workingLicence, $this->request->data);
            if ($this->WorkingLicences->save($workingLicence)) {
                $this->Flash->success(__('The working licence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The working licence could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->WorkingLicences->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('workingLicence', 'cvs'));
        $this->set('_serialize', ['workingLicence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Working Licence id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workingLicence = $this->WorkingLicences->get($id);
        if ($this->WorkingLicences->delete($workingLicence)) {
            $this->Flash->success(__('The working licence has been deleted.'));
        } else {
            $this->Flash->error(__('The working licence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
