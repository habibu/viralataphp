<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoMoradias Controller
 *
 * @property \App\Model\Table\TipoMoradiasTable $TipoMoradias
 */
class TipoMoradiasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipoMoradias = $this->paginate($this->TipoMoradias);

        $this->set(compact('tipoMoradias'));
        $this->set('_serialize', ['tipoMoradias']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Moradia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoMoradia = $this->TipoMoradias->get($id, [
            'contain' => []
        ]);

        $this->set('tipoMoradia', $tipoMoradia);
        $this->set('_serialize', ['tipoMoradia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoMoradia = $this->TipoMoradias->newEntity();
        if ($this->request->is('post')) {
            $tipoMoradia = $this->TipoMoradias->patchEntity($tipoMoradia, $this->request->data);
            if ($this->TipoMoradias->save($tipoMoradia)) {
                $this->Flash->success(__('The tipo moradia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo moradia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoMoradia'));
        $this->set('_serialize', ['tipoMoradia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Moradia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoMoradia = $this->TipoMoradias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoMoradia = $this->TipoMoradias->patchEntity($tipoMoradia, $this->request->data);
            if ($this->TipoMoradias->save($tipoMoradia)) {
                $this->Flash->success(__('The tipo moradia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo moradia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoMoradia'));
        $this->set('_serialize', ['tipoMoradia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Moradia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoMoradia = $this->TipoMoradias->get($id);
        if ($this->TipoMoradias->delete($tipoMoradia)) {
            $this->Flash->success(__('The tipo moradia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo moradia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
