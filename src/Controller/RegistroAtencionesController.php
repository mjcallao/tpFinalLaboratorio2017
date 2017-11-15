<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegistroAtenciones Controller
 *
 * @property \App\Model\Table\RegistroAtencionesTable $RegistroAtenciones
 *
 * @method \App\Model\Entity\RegistroAtencione[] paginate($object = null, array $settings = [])
 */
class RegistroAtencionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $registroAtenciones = $this->paginate($this->RegistroAtenciones);

        $this->set(compact('registroAtenciones'));
        $this->set('_serialize', ['registroAtenciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Registro Atencione id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registroAtencione = $this->RegistroAtenciones->get($id, [
            'contain' => []
        ]);

        $this->set('registroAtencione', $registroAtencione);
        $this->set('_serialize', ['registroAtencione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registroAtencione = $this->RegistroAtenciones->newEntity();
        if ($this->request->is('post')) {
            $registroAtencione = $this->RegistroAtenciones->patchEntity($registroAtencione, $this->request->getData());
            if ($this->RegistroAtenciones->save($registroAtencione)) {
                $this->Flash->success(__('The registro atencione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro atencione could not be saved. Please, try again.'));
        }
        $this->set(compact('registroAtencione'));
        $this->set('_serialize', ['registroAtencione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Registro Atencione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registroAtencione = $this->RegistroAtenciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registroAtencione = $this->RegistroAtenciones->patchEntity($registroAtencione, $this->request->getData());
            if ($this->RegistroAtenciones->save($registroAtencione)) {
                $this->Flash->success(__('The registro atencione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registro atencione could not be saved. Please, try again.'));
        }
        $this->set(compact('registroAtencione'));
        $this->set('_serialize', ['registroAtencione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Registro Atencione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registroAtencione = $this->RegistroAtenciones->get($id);
        if ($this->RegistroAtenciones->delete($registroAtencione)) {
            $this->Flash->success(__('The registro atencione has been deleted.'));
        } else {
            $this->Flash->error(__('The registro atencione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
