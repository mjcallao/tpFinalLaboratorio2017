<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mascotas Controller
 *
 * @property \App\Model\Table\MascotasTable $Mascotas
 *
 * @method \App\Model\Entity\Mascota[] paginate($object = null, array $settings = [])
 */
class MascotasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mascotas = $this->paginate($this->Mascotas);

        $this->set(compact('mascotas'));
        $this->set('_serialize', ['mascotas']);
    }

    /**
     * View method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mascota = $this->Mascotas->get($id, [
            'contain' => []
        ]);

        $this->set('mascota', $mascota);
        $this->set('_serialize', ['mascota']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mascota = $this->Mascotas->newEntity();
        if ($this->request->is('post')) {
            $mascota = $this->Mascotas->patchEntity($mascota, $this->request->getData());
            if ($this->Mascotas->save($mascota)) {
                $this->Flash->success(__('The mascota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mascota could not be saved. Please, try again.'));
        }
        $this->set(compact('mascota'));
        $this->set('_serialize', ['mascota']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mascota = $this->Mascotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mascota = $this->Mascotas->patchEntity($mascota, $this->request->getData());
            if ($this->Mascotas->save($mascota)) {
                $this->Flash->success(__('The mascota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mascota could not be saved. Please, try again.'));
        }
        $this->set(compact('mascota'));
        $this->set('_serialize', ['mascota']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mascota = $this->Mascotas->get($id);
        if ($this->Mascotas->delete($mascota)) {
            $this->Flash->success(__('The mascota has been deleted.'));
        } else {
            $this->Flash->error(__('The mascota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
