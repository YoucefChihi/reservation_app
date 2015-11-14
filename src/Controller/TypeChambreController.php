<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeChambre Controller
 *
 * @property \App\Model\Table\TypeChambreTable $TypeChambre
 */
class TypeChambreController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('typeChambre', $this->paginate($this->TypeChambre));
        $this->set('_serialize', ['typeChambre']);
    }

    /**
     * View method
     *
     * @param string|null $id Type Chambre id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeChambre = $this->TypeChambre->get($id, [
            'contain' => []
        ]);
        $this->set('typeChambre', $typeChambre);
        $this->set('_serialize', ['typeChambre']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeChambre = $this->TypeChambre->newEntity();
        if ($this->request->is('post')) {
            $typeChambre = $this->TypeChambre->patchEntity($typeChambre, $this->request->data);
            if ($this->TypeChambre->save($typeChambre)) {
                $this->Flash->success(__('The type chambre has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type chambre could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeChambre'));
        $this->set('_serialize', ['typeChambre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Chambre id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeChambre = $this->TypeChambre->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeChambre = $this->TypeChambre->patchEntity($typeChambre, $this->request->data);
            if ($this->TypeChambre->save($typeChambre)) {
                $this->Flash->success(__('The type chambre has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type chambre could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeChambre'));
        $this->set('_serialize', ['typeChambre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Chambre id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeChambre = $this->TypeChambre->get($id);
        if ($this->TypeChambre->delete($typeChambre)) {
            $this->Flash->success(__('The type chambre has been deleted.'));
        } else {
            $this->Flash->error(__('The type chambre could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
