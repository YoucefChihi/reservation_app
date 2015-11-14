<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HotelImage Controller
 *
 * @property \App\Model\Table\HotelImageTable $HotelImage
 */
class HotelImageController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('hotelImage', $this->paginate($this->HotelImage));
        $this->set('_serialize', ['hotelImage']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotel Image id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelImage = $this->HotelImage->get($id, [
            'contain' => []
        ]);
        $this->set('hotelImage', $hotelImage);
        $this->set('_serialize', ['hotelImage']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotelImage = $this->HotelImage->newEntity();
        if ($this->request->is('post')) {
            $hotelImage = $this->HotelImage->patchEntity($hotelImage, $this->request->data);
            if ($this->HotelImage->save($hotelImage)) {
                $this->Flash->success(__('The hotel image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hotel image could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hotelImage'));
        $this->set('_serialize', ['hotelImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel Image id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotelImage = $this->HotelImage->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelImage = $this->HotelImage->patchEntity($hotelImage, $this->request->data);
            if ($this->HotelImage->save($hotelImage)) {
                $this->Flash->success(__('The hotel image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hotel image could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hotelImage'));
        $this->set('_serialize', ['hotelImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotelImage = $this->HotelImage->get($id);
        if ($this->HotelImage->delete($hotelImage)) {
            $this->Flash->success(__('The hotel image has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
