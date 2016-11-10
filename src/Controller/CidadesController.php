<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cidades Controller
 *
 * @property \App\Model\Table\CidadesTable $Cidades
 */
class CidadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cidades = $this->paginate($this->Cidades);

        $this->set(compact('cidades'));
        $this->set('_serialize', ['cidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cidade = $this->Cidades->get($id, [
            'contain' => []
        ]);

        $this->set('cidade', $cidade);
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cidade = $this->Cidades->newEntity();
        if ($this->request->is('post')) {
            $cidade = $this->Cidades->patchEntity($cidade, $this->request->data);
            if ($this->Cidades->save($cidade)) {
                $this->Flash->success(__('The cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cidade'));
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cidade = $this->Cidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cidade = $this->Cidades->patchEntity($cidade, $this->request->data);
            if ($this->Cidades->save($cidade)) {
                $this->Flash->success(__('The cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cidade'));
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cidade = $this->Cidades->get($id);
        if ($this->Cidades->delete($cidade)) {
            $this->Flash->success(__('The cidade has been deleted.'));
        } else {
            $this->Flash->error(__('The cidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
