<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Feiras Controller
 *
 * @property \App\Model\Table\FeirasTable $Feiras
 */
class FeirasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $feiras = $this->paginate($this->Feiras);

        $this->set(compact('feiras'));
        $this->set('_serialize', ['feiras']);
    }

    /**
     * View method
     *
     * @param string|null $id Feira id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feira = $this->Feiras->get($id, [
            'contain' => []
        ]);

        $this->set('feira', $feira);
        $this->set('_serialize', ['feira']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feira = $this->Feiras->newEntity();
        if ($this->request->is('post')) {
            $feira = $this->Feiras->patchEntity($feira, $this->request->data);
            if ($this->Feiras->save($feira)) {
                $this->Flash->success(__('The feira has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feira could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('feira'));
        $this->set('_serialize', ['feira']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Feira id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feira = $this->Feiras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feira = $this->Feiras->patchEntity($feira, $this->request->data);
            if ($this->Feiras->save($feira)) {
                $this->Flash->success(__('The feira has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feira could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('feira'));
        $this->set('_serialize', ['feira']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feira id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feira = $this->Feiras->get($id);
        if ($this->Feiras->delete($feira)) {
            $this->Flash->success(__('The feira has been deleted.'));
        } else {
            $this->Flash->error(__('The feira could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
