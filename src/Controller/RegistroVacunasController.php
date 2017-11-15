<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegistroVacunas Controller
 *
 * @property \App\Model\Table\RegistroVacunasTable $RegistroVacunas
 *
 * @method \App\Model\Entity\RegistroVacuna[] paginate($object = null, array $settings = [])
 */
class RegistroVacunasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $registroVacunas = $this->paginate($this->RegistroVacunas);

        $this->set(compact('registroVacunas'));
        $this->set('_serialize', ['registroVacunas']);
    }

    /**
     * View method
     *
     * @param string|null $id Registro Vacuna id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registroVacuna = $this->RegistroVacunas->get($id, [
            'contain' => []
        ]);

        $this->set('registroVacuna', $registroVacuna);
        $this->set('_serialize', ['registroVacuna']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registroVacuna = $this->RegistroVacunas->newEntity();
        if ($this->request->is('post')) {
            $registroVacuna = $this->RegistroVacunas->patchEntity($registroVacuna, $this->request->getData());
            if ($this->RegistroVacunas->save($registroVacuna)) {
                $this->Flash->success(__('The registro vacuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro vacuna could not be saved. Please, try again.'));
        }
        $this->set(compact('registroVacuna'));
        $this->set('_serialize', ['registroVacuna']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Registro Vacuna id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registroVacuna = $this->RegistroVacunas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registroVacuna = $this->RegistroVacunas->patchEntity($registroVacuna, $this->request->getData());
            if ($this->RegistroVacunas->save($registroVacuna)) {
                $this->Flash->success(__('The registro vacuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro vacuna could not be saved. Please, try again.'));
        }
        $this->set(compact('registroVacuna'));
        $this->set('_serialize', ['registroVacuna']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Registro Vacuna id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registroVacuna = $this->RegistroVacunas->get($id);
        if ($this->RegistroVacunas->delete($registroVacuna)) {
            $this->Flash->success(__('The registro vacuna has been deleted.'));
        } else {
            $this->Flash->error(__('The registro vacuna could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
