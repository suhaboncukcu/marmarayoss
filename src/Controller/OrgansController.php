<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Organs Controller
 *
 * @property \App\Model\Table\OrgansTable $Organs
 *
 * @method \App\Model\Entity\Organ[] paginate($object = null, array $settings = [])
 */
class OrgansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $organs = $this->paginate($this->Organs);

        $this->set(compact('organs'));
        $this->set('_serialize', ['organs']);
    }

    /**
     * View method
     *
     * @param string|null $id Organ id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organ = $this->Organs->get($id, [
            'contain' => ['Categories', 'Requests']
        ]);

        $this->set('organ', $organ);
        $this->set('_serialize', ['organ']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organ = $this->Organs->newEntity();
        if ($this->request->is('post')) {
            $organ = $this->Organs->patchEntity($organ, $this->request->getData());
            if ($this->Organs->save($organ)) {
                $this->Flash->success(__('The organ has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organ could not be saved. Please, try again.'));
        }
        $categories = $this->Organs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('organ', 'categories'));
        $this->set('_serialize', ['organ']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Organ id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organ = $this->Organs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organ = $this->Organs->patchEntity($organ, $this->request->getData());
            if ($this->Organs->save($organ)) {
                $this->Flash->success(__('The organ has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organ could not be saved. Please, try again.'));
        }
        $categories = $this->Organs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('organ', 'categories'));
        $this->set('_serialize', ['organ']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Organ id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organ = $this->Organs->get($id);
        if ($this->Organs->delete($organ)) {
            $this->Flash->success(__('The organ has been deleted.'));
        } else {
            $this->Flash->error(__('The organ could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
