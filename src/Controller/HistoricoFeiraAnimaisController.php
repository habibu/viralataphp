<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HistoricoFeiraAnimais Controller
 *
 * @property \App\Model\Table\HistoricoFeiraAnimaisTable $HistoricoFeiraAnimais
 */
class HistoricoFeiraAnimaisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $historicoFeiraAnimais = $this->paginate($this->HistoricoFeiraAnimais);

        $this->set(compact('historicoFeiraAnimais'));
        $this->set('_serialize', ['historicoFeiraAnimais']);
    }

    /**
     * View method
     *
     * @param string|null $id Historico Feira Animai id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historicoFeiraAnimai = $this->HistoricoFeiraAnimais->get($id, [
            'contain' => []
        ]);

        $this->set('historicoFeiraAnimai', $historicoFeiraAnimai);
        $this->set('_serialize', ['historicoFeiraAnimai']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historicoFeiraAnimai = $this->HistoricoFeiraAnimais->newEntity();
        if ($this->request->is('post')) {
            $historicoFeiraAnimai = $this->HistoricoFeiraAnimais->patchEntity($historicoFeiraAnimai, $this->request->data);
            if ($this->HistoricoFeiraAnimais->save($historicoFeiraAnimai)) {
                $this->Flash->success(__('The historico feira animai has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historico feira animai could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('historicoFeiraAnimai'));
        $this->set('_serialize', ['historicoFeiraAnimai']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Historico Feira Animai id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historicoFeiraAnimai = $this->HistoricoFeiraAnimais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historicoFeiraAnimai = $this->HistoricoFeiraAnimais->patchEntity($historicoFeiraAnimai, $this->request->data);
            if ($this->HistoricoFeiraAnimais->save($historicoFeiraAnimai)) {
                $this->Flash->success(__('The historico feira animai has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historico feira animai could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('historicoFeiraAnimai'));
        $this->set('_serialize', ['historicoFeiraAnimai']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Historico Feira Animai id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historicoFeiraAnimai = $this->HistoricoFeiraAnimais->get($id);
        if ($this->HistoricoFeiraAnimais->delete($historicoFeiraAnimai)) {
            $this->Flash->success(__('The historico feira animai has been deleted.'));
        } else {
            $this->Flash->error(__('The historico feira animai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
