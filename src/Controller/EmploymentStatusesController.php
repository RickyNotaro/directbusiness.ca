<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmploymentStatuses Controller
 *
 * @property \App\Model\Table\EmploymentStatusesTable $EmploymentStatuses
 */
class EmploymentStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $employmentStatuses = $this->paginate($this->EmploymentStatuses);

        $this->set(compact('employmentStatuses'));
        $this->set('_serialize', ['employmentStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Employment Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employmentStatus = $this->EmploymentStatuses->get($id, [
            'contain' => ['Cvs', 'Jobs']
        ]);

        $this->set('employmentStatus', $employmentStatus);
        $this->set('_serialize', ['employmentStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employmentStatus = $this->EmploymentStatuses->newEntity();
        if ($this->request->is('post')) {
            $employmentStatus = $this->EmploymentStatuses->patchEntity($employmentStatus, $this->request->data);
            if ($this->EmploymentStatuses->save($employmentStatus)) {
                $this->Flash->success(__('The employment status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employment status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('employmentStatus'));
        $this->set('_serialize', ['employmentStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Employment Status id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employmentStatus = $this->EmploymentStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employmentStatus = $this->EmploymentStatuses->patchEntity($employmentStatus, $this->request->data);
            if ($this->EmploymentStatuses->save($employmentStatus)) {
                $this->Flash->success(__('The employment status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employment status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('employmentStatus'));
        $this->set('_serialize', ['employmentStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employment Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employmentStatus = $this->EmploymentStatuses->get($id);
        if ($this->EmploymentStatuses->delete($employmentStatus)) {
            $this->Flash->success(__('The employment status has been deleted.'));
        } else {
            $this->Flash->error(__('The employment status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
