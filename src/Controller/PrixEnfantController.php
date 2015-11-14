<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PrixEnfant Controller
 *
 * @property \App\Model\Table\PrixEnfantTable $PrixEnfant
 */
class PrixEnfantController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('prixEnfant', $this->paginate($this->PrixEnfant));
        $this->set('_serialize', ['prixEnfant']);
    }

    /**
     * View method
     *
     * @param string|null $id Prix Enfant id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prixEnfant = $this->PrixEnfant->get($id, [
            'contain' => []
        ]);
        $this->set('prixEnfant', $prixEnfant);
        $this->set('_serialize', ['prixEnfant']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prixEnfant = $this->PrixEnfant->newEntity();
        if ($this->request->is('post')) {
            $prixEnfant = $this->PrixEnfant->patchEntity($prixEnfant, $this->request->data);
            if ($this->PrixEnfant->save($prixEnfant)) {
                $this->Flash->success(__('The prix enfant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prix enfant could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prixEnfant'));
        $this->set('_serialize', ['prixEnfant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prix Enfant id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prixEnfant = $this->PrixEnfant->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prixEnfant = $this->PrixEnfant->patchEntity($prixEnfant, $this->request->data);
            if ($this->PrixEnfant->save($prixEnfant)) {
                $this->Flash->success(__('The prix enfant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prix enfant could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prixEnfant'));
        $this->set('_serialize', ['prixEnfant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prix Enfant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prixEnfant = $this->PrixEnfant->get($id);
        if ($this->PrixEnfant->delete($prixEnfant)) {
            $this->Flash->success(__('The prix enfant has been deleted.'));
        } else {
            $this->Flash->error(__('The prix enfant could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
