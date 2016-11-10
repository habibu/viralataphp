<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Acompanhamentos Controller
 *
 * @property \App\Model\Table\AcompanhamentosTable $Acompanhamentos
 */
class AcompanhamentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $acompanhamentos = $this->paginate($this->Acompanhamentos);

        $this->set(compact('acompanhamentos'));
        $this->set('_serialize', ['acompanhamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Acompanhamento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acompanhamento = $this->Acompanhamentos->get($id, [
            'contain' => []
        ]);

        $this->set('acompanhamento', $acompanhamento);
        $this->set('_serialize', ['acompanhamento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acompanhamento = $this->Acompanhamentos->newEntity();
        if ($this->request->is('post')) {
            $acompanhamento = $this->Acompanhamentos->patchEntity($acompanhamento, $this->request->data);
            if ($this->Acompanhamentos->save($acompanhamento)) {
                $this->Flash->success(__('The acompanhamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The acompanhamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('acompanhamento'));
        $this->set('_serialize', ['acompanhamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Acompanhamento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acompanhamento = $this->Acompanhamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acompanhamento = $this->Acompanhamentos->patchEntity($acompanhamento, $this->request->data);
            if ($this->Acompanhamentos->save($acompanhamento)) {
                $this->Flash->success(__('The acompanhamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The acompanhamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('acompanhamento'));
        $this->set('_serialize', ['acompanhamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Acompanhamento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acompanhamento = $this->Acompanhamentos->get($id);
        if ($this->Acompanhamentos->delete($acompanhamento)) {
            $this->Flash->success(__('The acompanhamento has been deleted.'));
        } else {
            $this->Flash->error(__('The acompanhamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
