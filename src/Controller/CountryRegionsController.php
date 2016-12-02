<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CountryRegions Controller
 *
 * @property \App\Model\Table\CountryRegionsTable $CountryRegions
 */
class CountryRegionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $countryRegions = $this->paginate($this->CountryRegions);

        $this->set(compact('countryRegions'));
        $this->set('_serialize', ['countryRegions']);
    }

    /**
     * View method
     *
     * @param string|null $id Country Region id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $countryRegion = $this->CountryRegions->get($id, [
            'contain' => ['StateProvinces']
        ]);

        $this->set('countryRegion', $countryRegion);
        $this->set('_serialize', ['countryRegion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $countryRegion = $this->CountryRegions->newEntity();
        if ($this->request->is('post')) {
            $countryRegion = $this->CountryRegions->patchEntity($countryRegion, $this->request->data);
            if ($this->CountryRegions->save($countryRegion)) {
                $this->Flash->success(__('The country region has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The country region could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('countryRegion'));
        $this->set('_serialize', ['countryRegion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Country Region id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $countryRegion = $this->CountryRegions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $countryRegion = $this->CountryRegions->patchEntity($countryRegion, $this->request->data);
            if ($this->CountryRegions->save($countryRegion)) {
                $this->Flash->success(__('The country region has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The country region could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('countryRegion'));
        $this->set('_serialize', ['countryRegion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Country Region id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $countryRegion = $this->CountryRegions->get($id);
        if ($this->CountryRegions->delete($countryRegion)) {
            $this->Flash->success(__('The country region has been deleted.'));
        } else {
            $this->Flash->error(__('The country region could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
