<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vacunas Controller
 *
 * @property \App\Model\Table\VacunasTable $Vacunas
 *
 * @method \App\Model\Entity\Vacuna[] paginate($object = null, array $settings = [])
 */
class VacunasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $vacunas = $this->paginate($this->Vacunas);

        $this->set(compact('vacunas'));
        $this->set('_serialize', ['vacunas']);
    }

    /**
     * View method
     *
     * @param string|null $id Vacuna id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vacuna = $this->Vacunas->get($id, [
            'contain' => []
        ]);

        $this->set('vacuna', $vacuna);
        $this->set('_serialize', ['vacuna']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vacuna = $this->Vacunas->newEntity();
        if ($this->request->is('post')) {
            $vacuna = $this->Vacunas->patchEntity($vacuna, $this->request->getData());
            if ($this->Vacunas->save($vacuna)) {
                $this->Flash->success(__('The vacuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vacuna could not be saved. Please, try again.'));
        }
        $this->set(compact('vacuna'));
        $this->set('_serialize', ['vacuna']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vacuna id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vacuna = $this->Vacunas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vacuna = $this->Vacunas->patchEntity($vacuna, $this->request->getData());
            if ($this->Vacunas->save($vacuna)) {
                $this->Flash->success(__('The vacuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vacuna could not be saved. Please, try again.'));
        }
        $this->set(compact('vacuna'));
        $this->set('_serialize', ['vacuna']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vacuna id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vacuna = $this->Vacunas->get($id);
        if ($this->Vacunas->delete($vacuna)) {
            $this->Flash->success(__('The vacuna has been deleted.'));
        } else {
            $this->Flash->error(__('The vacuna could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
