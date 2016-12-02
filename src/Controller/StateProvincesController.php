<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StateProvinces Controller
 *
 * @property \App\Model\Table\StateProvincesTable $StateProvinces
 */
class StateProvincesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CountryRegions']
        ];
        $stateProvinces = $this->paginate($this->StateProvinces);

        $this->set(compact('stateProvinces'));
        $this->set('_serialize', ['stateProvinces']);
    }

    /**
     * View method
     *
     * @param string|null $id State Province id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stateProvince = $this->StateProvinces->get($id, [
            'contain' => ['CountryRegions', 'Addresses']
        ]);

        $this->set('stateProvince', $stateProvince);
        $this->set('_serialize', ['stateProvince']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stateProvince = $this->StateProvinces->newEntity();
        if ($this->request->is('post')) {
            $stateProvince = $this->StateProvinces->patchEntity($stateProvince, $this->request->data);
            if ($this->StateProvinces->save($stateProvince)) {
                $this->Flash->success(__('The state province has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The state province could not be saved. Please, try again.'));
            }
        }
        $countryRegions = $this->StateProvinces->CountryRegions->find('list', ['limit' => 200]);
        $this->set(compact('stateProvince', 'countryRegions'));
        $this->set('_serialize', ['stateProvince']);
    }

    /**
     * Edit method
     *
     * @param string|null $id State Province id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stateProvince = $this->StateProvinces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stateProvince = $this->StateProvinces->patchEntity($stateProvince, $this->request->data);
            if ($this->StateProvinces->save($stateProvince)) {
                $this->Flash->success(__('The state province has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The state province could not be saved. Please, try again.'));
            }
        }
        $countryRegions = $this->StateProvinces->CountryRegions->find('list', ['limit' => 200]);
        $this->set(compact('stateProvince', 'countryRegions'));
        $this->set('_serialize', ['stateProvince']);
    }

    /**
     * Delete method
     *
     * @param string|null $id State Province id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateProvince = $this->StateProvinces->get($id);
        if ($this->StateProvinces->delete($stateProvince)) {
            $this->Flash->success(__('The state province has been deleted.'));
        } else {
            $this->Flash->error(__('The state province could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
