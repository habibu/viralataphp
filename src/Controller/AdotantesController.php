<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Adotantes Controller
 *
 * @property \App\Model\Table\AdotantesTable $Adotantes
 */
class AdotantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $adotantes = $this->paginate($this->Adotantes);

        $this->set(compact('adotantes'));
        $this->set('_serialize', ['adotantes']);
    }

    /**
     * View method
     *
     * @param string|null $id Adotante id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adotante = $this->Adotantes->get($id, [
            'contain' => []
        ]);

        $this->set('adotante', $adotante);
        $this->set('_serialize', ['adotante']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adotante = $this->Adotantes->newEntity();
        if ($this->request->is('post')) {
            $adotante = $this->Adotantes->patchEntity($adotante, $this->request->data);
            if ($this->Adotantes->save($adotante)) {
                $this->Flash->success(__('The adotante has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adotante could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adotante'));
        $this->set('_serialize', ['adotante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adotante id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adotante = $this->Adotantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adotante = $this->Adotantes->patchEntity($adotante, $this->request->data);
            if ($this->Adotantes->save($adotante)) {
                $this->Flash->success(__('The adotante has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adotante could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adotante'));
        $this->set('_serialize', ['adotante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adotante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adotante = $this->Adotantes->get($id);
        if ($this->Adotantes->delete($adotante)) {
            $this->Flash->success(__('The adotante has been deleted.'));
        } else {
            $this->Flash->error(__('The adotante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
