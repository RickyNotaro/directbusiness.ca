<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CvsWorkingLicences Controller
 *
 * @property \App\Model\Table\CvsWorkingLicencesTable $CvsWorkingLicences
 */
class CvsWorkingLicencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cvs', 'WorkingLicences']
        ];
        $cvsWorkingLicences = $this->paginate($this->CvsWorkingLicences);

        $this->set(compact('cvsWorkingLicences'));
        $this->set('_serialize', ['cvsWorkingLicences']);
    }

    /**
     * View method
     *
     * @param string|null $id Cvs Working Licence id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cvsWorkingLicence = $this->CvsWorkingLicences->get($id, [
            'contain' => ['Cvs', 'WorkingLicences']
        ]);

        $this->set('cvsWorkingLicence', $cvsWorkingLicence);
        $this->set('_serialize', ['cvsWorkingLicence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cvsWorkingLicence = $this->CvsWorkingLicences->newEntity();
        if ($this->request->is('post')) {
            $cvsWorkingLicence = $this->CvsWorkingLicences->patchEntity($cvsWorkingLicence, $this->request->data);
            if ($this->CvsWorkingLicences->save($cvsWorkingLicence)) {
                $this->Flash->success(__('The cvs working licence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cvs working licence could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->CvsWorkingLicences->Cvs->find('list', ['limit' => 200]);
        $workingLicences = $this->CvsWorkingLicences->WorkingLicences->find('list', ['limit' => 200]);
        $this->set(compact('cvsWorkingLicence', 'cvs', 'workingLicences'));
        $this->set('_serialize', ['cvsWorkingLicence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cvs Working Licence id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cvsWorkingLicence = $this->CvsWorkingLicences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cvsWorkingLicence = $this->CvsWorkingLicences->patchEntity($cvsWorkingLicence, $this->request->data);
            if ($this->CvsWorkingLicences->save($cvsWorkingLicence)) {
                $this->Flash->success(__('The cvs working licence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cvs working licence could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->CvsWorkingLicences->Cvs->find('list', ['limit' => 200]);
        $workingLicences = $this->CvsWorkingLicences->WorkingLicences->find('list', ['limit' => 200]);
        $this->set(compact('cvsWorkingLicence', 'cvs', 'workingLicences'));
        $this->set('_serialize', ['cvsWorkingLicence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cvs Working Licence id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cvsWorkingLicence = $this->CvsWorkingLicences->get($id);
        if ($this->CvsWorkingLicences->delete($cvsWorkingLicence)) {
            $this->Flash->success(__('The cvs working licence has been deleted.'));
        } else {
            $this->Flash->error(__('The cvs working licence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
