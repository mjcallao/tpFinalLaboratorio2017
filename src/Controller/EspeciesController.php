<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Especies Controller
 *
 * @property \App\Model\Table\EspeciesTable $Especies
 *
 * @method \App\Model\Entity\Especy[] paginate($object = null, array $settings = [])
 */
class EspeciesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $especies = $this->paginate($this->Especies);

        $this->set(compact('especies'));
        $this->set('_serialize', ['especies']);
    }

    /**
     * View method
     *
     * @param string|null $id Especy id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $especy = $this->Especies->get($id, [
            'contain' => []
        ]);

        $this->set('especy', $especy);
        $this->set('_serialize', ['especy']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $especy = $this->Especies->newEntity();
        if ($this->request->is('post')) {
            $especy = $this->Especies->patchEntity($especy, $this->request->getData());
            if ($this->Especies->save($especy)) {
                $this->Flash->success(__('The especy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especy could not be saved. Please, try again.'));
        }
        $this->set(compact('especy'));
        $this->set('_serialize', ['especy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Especy id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $especy = $this->Especies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especy = $this->Especies->patchEntity($especy, $this->request->getData());
            if ($this->Especies->save($especy)) {
                $this->Flash->success(__('The especy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especy could not be saved. Please, try again.'));
        }
        $this->set(compact('especy'));
        $this->set('_serialize', ['especy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Especy id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $especy = $this->Especies->get($id);
        if ($this->Especies->delete($especy)) {
            $this->Flash->success(__('The especy has been deleted.'));
        } else {
            $this->Flash->error(__('The especy could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
