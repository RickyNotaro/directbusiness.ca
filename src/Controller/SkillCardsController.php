<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SkillCards Controller
 *
 * @property \App\Model\Table\SkillCardsTable $SkillCards
 */
class SkillCardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $skillCards = $this->paginate($this->SkillCards);

        $this->set(compact('skillCards'));
        $this->set('_serialize', ['skillCards']);
    }

    /**
     * View method
     *
     * @param string|null $id Skill Card id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skillCard = $this->SkillCards->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('skillCard', $skillCard);
        $this->set('_serialize', ['skillCard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skillCard = $this->SkillCards->newEntity();
        if ($this->request->is('post')) {
            $skillCard = $this->SkillCards->patchEntity($skillCard, $this->request->data);
            if ($this->SkillCards->save($skillCard)) {
                $this->Flash->success(__('The skill card has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The skill card could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->SkillCards->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('skillCard', 'cvs'));
        $this->set('_serialize', ['skillCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Skill Card id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skillCard = $this->SkillCards->get($id, [
            'contain' => ['Cvs']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skillCard = $this->SkillCards->patchEntity($skillCard, $this->request->data);
            if ($this->SkillCards->save($skillCard)) {
                $this->Flash->success(__('The skill card has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The skill card could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->SkillCards->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('skillCard', 'cvs'));
        $this->set('_serialize', ['skillCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Skill Card id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skillCard = $this->SkillCards->get($id);
        if ($this->SkillCards->delete($skillCard)) {
            $this->Flash->success(__('The skill card has been deleted.'));
        } else {
            $this->Flash->error(__('The skill card could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
