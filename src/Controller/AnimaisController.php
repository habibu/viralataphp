<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Animais Controller
 *
 * @property \App\Model\Table\AnimaisTable $Animais
 */
class AnimaisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $animais = $this->paginate($this->Animais);

        $this->set(compact('animais'));
        $this->set('_serialize', ['animais']);
    }

    /**
     * View method
     *
     * @param string|null $id Animai id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animai = $this->Animais->get($id, [
            'contain' => []
        ]);

        $this->set('animai', $animai);
        $this->set('_serialize', ['animai']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animai = $this->Animais->newEntity();
        if ($this->request->is('post')) {
            $animai = $this->Animais->patchEntity($animai, $this->request->data);
            if ($this->Animais->save($animai)) {
                $this->Flash->success(__('The animai has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The animai could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('animai'));
        $this->set('_serialize', ['animai']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Animai id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animai = $this->Animais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animai = $this->Animais->patchEntity($animai, $this->request->data);
            if ($this->Animais->save($animai)) {
                $this->Flash->success(__('The animai has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The animai could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('animai'));
        $this->set('_serialize', ['animai']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Animai id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animai = $this->Animais->get($id);
        if ($this->Animais->delete($animai)) {
            $this->Flash->success(__('The animai has been deleted.'));
        } else {
            $this->Flash->error(__('The animai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
