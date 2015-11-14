<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PrixAdulte Controller
 *
 * @property \App\Model\Table\PrixAdulteTable $PrixAdulte
 */
class PrixAdulteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('prixAdulte', $this->paginate($this->PrixAdulte));
        $this->set('_serialize', ['prixAdulte']);
    }

    /**
     * View method
     *
     * @param string|null $id Prix Adulte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prixAdulte = $this->PrixAdulte->get($id, [
            'contain' => []
        ]);
        $this->set('prixAdulte', $prixAdulte);
        $this->set('_serialize', ['prixAdulte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prixAdulte = $this->PrixAdulte->newEntity();
        if ($this->request->is('post')) {
            $prixAdulte = $this->PrixAdulte->patchEntity($prixAdulte, $this->request->data);
            if ($this->PrixAdulte->save($prixAdulte)) {
                $this->Flash->success(__('The prix adulte has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prix adulte could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prixAdulte'));
        $this->set('_serialize', ['prixAdulte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prix Adulte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prixAdulte = $this->PrixAdulte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prixAdulte = $this->PrixAdulte->patchEntity($prixAdulte, $this->request->data);
            if ($this->PrixAdulte->save($prixAdulte)) {
                $this->Flash->success(__('The prix adulte has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prix adulte could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prixAdulte'));
        $this->set('_serialize', ['prixAdulte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prix Adulte id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prixAdulte = $this->PrixAdulte->get($id);
        if ($this->PrixAdulte->delete($prixAdulte)) {
            $this->Flash->success(__('The prix adulte has been deleted.'));
        } else {
            $this->Flash->error(__('The prix adulte could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
