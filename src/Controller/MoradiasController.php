<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Moradias Controller
 *
 * @property \App\Model\Table\MoradiasTable $Moradias
 */
class MoradiasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $moradias = $this->paginate($this->Moradias);

        $this->set(compact('moradias'));
        $this->set('_serialize', ['moradias']);
    }

    /**
     * View method
     *
     * @param string|null $id Moradia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $moradia = $this->Moradias->get($id, [
            'contain' => []
        ]);

        $this->set('moradia', $moradia);
        $this->set('_serialize', ['moradia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $moradia = $this->Moradias->newEntity();
        if ($this->request->is('post')) {
            $moradia = $this->Moradias->patchEntity($moradia, $this->request->data);
            if ($this->Moradias->save($moradia)) {
                $this->Flash->success(__('The moradia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The moradia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('moradia'));
        $this->set('_serialize', ['moradia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Moradia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $moradia = $this->Moradias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $moradia = $this->Moradias->patchEntity($moradia, $this->request->data);
            if ($this->Moradias->save($moradia)) {
                $this->Flash->success(__('The moradia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The moradia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('moradia'));
        $this->set('_serialize', ['moradia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Moradia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $moradia = $this->Moradias->get($id);
        if ($this->Moradias->delete($moradia)) {
            $this->Flash->success(__('The moradia has been deleted.'));
        } else {
            $this->Flash->error(__('The moradia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
