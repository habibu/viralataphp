<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SolicitacaoAdocoes Controller
 *
 * @property \App\Model\Table\SolicitacaoAdocoesTable $SolicitacaoAdocoes
 */
class SolicitacaoAdocoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $solicitacaoAdocoes = $this->paginate($this->SolicitacaoAdocoes);

        $this->set(compact('solicitacaoAdocoes'));
        $this->set('_serialize', ['solicitacaoAdocoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Solicitacao Adoco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitacaoAdoco = $this->SolicitacaoAdocoes->get($id, [
            'contain' => []
        ]);

        $this->set('solicitacaoAdoco', $solicitacaoAdoco);
        $this->set('_serialize', ['solicitacaoAdoco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitacaoAdoco = $this->SolicitacaoAdocoes->newEntity();
        if ($this->request->is('post')) {
            $solicitacaoAdoco = $this->SolicitacaoAdocoes->patchEntity($solicitacaoAdoco, $this->request->data);
            if ($this->SolicitacaoAdocoes->save($solicitacaoAdoco)) {
                $this->Flash->success(__('The solicitacao adoco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitacao adoco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('solicitacaoAdoco'));
        $this->set('_serialize', ['solicitacaoAdoco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitacao Adoco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitacaoAdoco = $this->SolicitacaoAdocoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitacaoAdoco = $this->SolicitacaoAdocoes->patchEntity($solicitacaoAdoco, $this->request->data);
            if ($this->SolicitacaoAdocoes->save($solicitacaoAdoco)) {
                $this->Flash->success(__('The solicitacao adoco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitacao adoco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('solicitacaoAdoco'));
        $this->set('_serialize', ['solicitacaoAdoco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitacao Adoco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitacaoAdoco = $this->SolicitacaoAdocoes->get($id);
        if ($this->SolicitacaoAdocoes->delete($solicitacaoAdoco)) {
            $this->Flash->success(__('The solicitacao adoco has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitacao adoco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
