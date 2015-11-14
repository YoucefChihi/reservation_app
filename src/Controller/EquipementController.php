<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipement Controller
 *
 * @property \App\Model\Table\EquipementTable $Equipement
 */
class EquipementController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('equipement', $this->paginate($this->Equipement));
        $this->set('_serialize', ['equipement']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipement id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipement = $this->Equipement->get($id, [
            'contain' => ['Hotel']
        ]);
        $this->set('equipement', $equipement);
        $this->set('_serialize', ['equipement']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipement = $this->Equipement->newEntity();
        if ($this->request->is('post')) {
            $equipement = $this->Equipement->patchEntity($equipement, $this->request->data);
            if ($this->Equipement->save($equipement)) {
                $this->Flash->success(__('The equipement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipement could not be saved. Please, try again.'));
            }
        }
        $hotel = $this->Equipement->Hotel->find('list', ['limit' => 200]);
        $this->set(compact('equipement', 'hotel'));
        $this->set('_serialize', ['equipement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipement id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipement = $this->Equipement->get($id, [
            'contain' => ['Hotel']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipement = $this->Equipement->patchEntity($equipement, $this->request->data);
            if ($this->Equipement->save($equipement)) {
                $this->Flash->success(__('The equipement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipement could not be saved. Please, try again.'));
            }
        }
        $hotel = $this->Equipement->Hotel->find('list', ['limit' => 200]);
        $this->set(compact('equipement', 'hotel'));
        $this->set('_serialize', ['equipement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipement id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipement = $this->Equipement->get($id);
        if ($this->Equipement->delete($equipement)) {
            $this->Flash->success(__('The equipement has been deleted.'));
        } else {
            $this->Flash->error(__('The equipement could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
