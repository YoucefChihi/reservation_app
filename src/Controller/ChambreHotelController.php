<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChambreHotel Controller
 *
 * @property \App\Model\Table\ChambreHotelTable $ChambreHotel
 */
class ChambreHotelController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('chambreHotel', $this->paginate($this->ChambreHotel));
        $this->set('_serialize', ['chambreHotel']);
    }

    /**
     * View method
     *
     * @param string|null $id Chambre Hotel id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chambreHotel = $this->ChambreHotel->get($id, [
            'contain' => []
        ]);
        $this->set('chambreHotel', $chambreHotel);
        $this->set('_serialize', ['chambreHotel']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chambreHotel = $this->ChambreHotel->newEntity();
        if ($this->request->is('post')) {
            $chambreHotel = $this->ChambreHotel->patchEntity($chambreHotel, $this->request->data);
            if ($this->ChambreHotel->save($chambreHotel)) {
                $this->Flash->success(__('The chambre hotel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chambre hotel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('chambreHotel'));
        $this->set('_serialize', ['chambreHotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chambre Hotel id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chambreHotel = $this->ChambreHotel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chambreHotel = $this->ChambreHotel->patchEntity($chambreHotel, $this->request->data);
            if ($this->ChambreHotel->save($chambreHotel)) {
                $this->Flash->success(__('The chambre hotel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chambre hotel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('chambreHotel'));
        $this->set('_serialize', ['chambreHotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chambre Hotel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chambreHotel = $this->ChambreHotel->get($id);
        if ($this->ChambreHotel->delete($chambreHotel)) {
            $this->Flash->success(__('The chambre hotel has been deleted.'));
        } else {
            $this->Flash->error(__('The chambre hotel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
