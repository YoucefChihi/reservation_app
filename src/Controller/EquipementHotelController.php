<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EquipementHotel Controller
 *
 * @property \App\Model\Table\EquipementHotelTable $EquipementHotel
 */
class EquipementHotelController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('equipementHotel', $this->paginate($this->EquipementHotel));
        $this->set('_serialize', ['equipementHotel']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipement Hotel id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipementHotel = $this->EquipementHotel->get($id, [
            'contain' => []
        ]);
        $this->set('equipementHotel', $equipementHotel);
        $this->set('_serialize', ['equipementHotel']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipementHotel = $this->EquipementHotel->newEntity();
        if ($this->request->is('post')) {
            $equipementHotel = $this->EquipementHotel->patchEntity($equipementHotel, $this->request->data);
            if ($this->EquipementHotel->save($equipementHotel)) {
                $this->Flash->success(__('The equipement hotel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipement hotel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('equipementHotel'));
        $this->set('_serialize', ['equipementHotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipement Hotel id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipementHotel = $this->EquipementHotel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipementHotel = $this->EquipementHotel->patchEntity($equipementHotel, $this->request->data);
            if ($this->EquipementHotel->save($equipementHotel)) {
                $this->Flash->success(__('The equipement hotel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipement hotel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('equipementHotel'));
        $this->set('_serialize', ['equipementHotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipement Hotel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipementHotel = $this->EquipementHotel->get($id);
        if ($this->EquipementHotel->delete($equipementHotel)) {
            $this->Flash->success(__('The equipement hotel has been deleted.'));
        } else {
            $this->Flash->error(__('The equipement hotel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
