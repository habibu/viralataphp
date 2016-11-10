<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prontuarios Controller
 *
 * @property \App\Model\Table\ProntuariosTable $Prontuarios
 */
class ProntuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $prontuarios = $this->paginate($this->Prontuarios);

        $this->set(compact('prontuarios'));
        $this->set('_serialize', ['prontuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Prontuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prontuario = $this->Prontuarios->get($id, [
            'contain' => []
        ]);

        $this->set('prontuario', $prontuario);
        $this->set('_serialize', ['prontuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prontuario = $this->Prontuarios->newEntity();
        if ($this->request->is('post')) {
            $prontuario = $this->Prontuarios->patchEntity($prontuario, $this->request->data);
            if ($this->Prontuarios->save($prontuario)) {
                $this->Flash->success(__('The prontuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prontuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prontuario'));
        $this->set('_serialize', ['prontuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prontuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prontuario = $this->Prontuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prontuario = $this->Prontuarios->patchEntity($prontuario, $this->request->data);
            if ($this->Prontuarios->save($prontuario)) {
                $this->Flash->success(__('The prontuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prontuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prontuario'));
        $this->set('_serialize', ['prontuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prontuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prontuario = $this->Prontuarios->get($id);
        if ($this->Prontuarios->delete($prontuario)) {
            $this->Flash->success(__('The prontuario has been deleted.'));
        } else {
            $this->Flash->error(__('The prontuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
