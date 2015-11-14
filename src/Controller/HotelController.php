<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hotel Controller
 *
 * @property \App\Model\Table\HotelTable $Hotel
 */
class HotelController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('hotel', $this->paginate($this->Hotel));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotel id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotel = $this->Hotel->get($id, [
            'contain' => ['Equipement']
        ]);
        $this->set('hotel', $hotel);
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotel = $this->Hotel->newEntity();
        if ($this->request->is('post')) {
            $hotel = $this->Hotel->patchEntity($hotel, $this->request->data);
            if ($this->Hotel->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
            }
        }
        $equipement = $this->Hotel->Equipement->find('list', ['limit' => 200]);
        $this->set(compact('hotel', 'equipement'));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotel = $this->Hotel->get($id, [
            'contain' => ['Equipement']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotel = $this->Hotel->patchEntity($hotel, $this->request->data);
            if ($this->Hotel->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
            }
        }
        $equipement = $this->Hotel->Equipement->find('list', ['limit' => 200]);
        $this->set(compact('hotel', 'equipement'));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotel = $this->Hotel->get($id);
        if ($this->Hotel->delete($hotel)) {
            $this->Flash->success(__('The hotel has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
