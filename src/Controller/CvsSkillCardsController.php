<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CvsSkillCards Controller
 *
 * @property \App\Model\Table\CvsSkillCardsTable $CvsSkillCards
 */
class CvsSkillCardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cvs', 'SkillCards']
        ];
        $cvsSkillCards = $this->paginate($this->CvsSkillCards);

        $this->set(compact('cvsSkillCards'));
        $this->set('_serialize', ['cvsSkillCards']);
    }

    /**
     * View method
     *
     * @param string|null $id Cvs Skill Card id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cvsSkillCard = $this->CvsSkillCards->get($id, [
            'contain' => ['Cvs', 'SkillCards']
        ]);

        $this->set('cvsSkillCard', $cvsSkillCard);
        $this->set('_serialize', ['cvsSkillCard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cvsSkillCard = $this->CvsSkillCards->newEntity();
        if ($this->request->is('post')) {
            $cvsSkillCard = $this->CvsSkillCards->patchEntity($cvsSkillCard, $this->request->data);
            if ($this->CvsSkillCards->save($cvsSkillCard)) {
                $this->Flash->success(__('The cvs skill card has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cvs skill card could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->CvsSkillCards->Cvs->find('list', ['limit' => 200]);
        $skillCards = $this->CvsSkillCards->SkillCards->find('list', ['limit' => 200]);
        $this->set(compact('cvsSkillCard', 'cvs', 'skillCards'));
        $this->set('_serialize', ['cvsSkillCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cvs Skill Card id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cvsSkillCard = $this->CvsSkillCards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cvsSkillCard = $this->CvsSkillCards->patchEntity($cvsSkillCard, $this->request->data);
            if ($this->CvsSkillCards->save($cvsSkillCard)) {
                $this->Flash->success(__('The cvs skill card has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cvs skill card could not be saved. Please, try again.'));
            }
        }
        $cvs = $this->CvsSkillCards->Cvs->find('list', ['limit' => 200]);
        $skillCards = $this->CvsSkillCards->SkillCards->find('list', ['limit' => 200]);
        $this->set(compact('cvsSkillCard', 'cvs', 'skillCards'));
        $this->set('_serialize', ['cvsSkillCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cvs Skill Card id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cvsSkillCard = $this->CvsSkillCards->get($id);
        if ($this->CvsSkillCards->delete($cvsSkillCard)) {
            $this->Flash->success(__('The cvs skill card has been deleted.'));
        } else {
            $this->Flash->error(__('The cvs skill card could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
