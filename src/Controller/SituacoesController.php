<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Situacoes Controller
 *
 * @property \App\Model\Table\SituacoesTable $Situacoes
 */
class SituacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $situacoes = $this->paginate($this->Situacoes);

        $this->set(compact('situacoes'));
        $this->set('_serialize', ['situacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Situaco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $situaco = $this->Situacoes->get($id, [
            'contain' => []
        ]);

        $this->set('situaco', $situaco);
        $this->set('_serialize', ['situaco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $situaco = $this->Situacoes->newEntity();
        if ($this->request->is('post')) {
            $situaco = $this->Situacoes->patchEntity($situaco, $this->request->data);
            if ($this->Situacoes->save($situaco)) {
                $this->Flash->success(__('The situaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The situaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('situaco'));
        $this->set('_serialize', ['situaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Situaco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $situaco = $this->Situacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $situaco = $this->Situacoes->patchEntity($situaco, $this->request->data);
            if ($this->Situacoes->save($situaco)) {
                $this->Flash->success(__('The situaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The situaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('situaco'));
        $this->set('_serialize', ['situaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Situaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $situaco = $this->Situacoes->get($id);
        if ($this->Situacoes->delete($situaco)) {
            $this->Flash->success(__('The situaco has been deleted.'));
        } else {
            $this->Flash->error(__('The situaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
