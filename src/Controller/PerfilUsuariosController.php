<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerfilUsuarios Controller
 *
 * @property \App\Model\Table\PerfilUsuariosTable $PerfilUsuarios
 *
 * @method \App\Model\Entity\PerfilUsuario[] paginate($object = null, array $settings = [])
 */
class PerfilUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $perfilUsuarios = $this->paginate($this->PerfilUsuarios);

        $this->set(compact('perfilUsuarios'));
        $this->set('_serialize', ['perfilUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Perfil Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfilUsuario = $this->PerfilUsuarios->get($id, [
            'contain' => []
        ]);

        $this->set('perfilUsuario', $perfilUsuario);
        $this->set('_serialize', ['perfilUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfilUsuario = $this->PerfilUsuarios->newEntity();
        if ($this->request->is('post')) {
            $perfilUsuario = $this->PerfilUsuarios->patchEntity($perfilUsuario, $this->request->getData());
            if ($this->PerfilUsuarios->save($perfilUsuario)) {
                $this->Flash->success(__('The perfil usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfil usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('perfilUsuario'));
        $this->set('_serialize', ['perfilUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfil Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perfilUsuario = $this->PerfilUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfilUsuario = $this->PerfilUsuarios->patchEntity($perfilUsuario, $this->request->getData());
            if ($this->PerfilUsuarios->save($perfilUsuario)) {
                $this->Flash->success(__('The perfil usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfil usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('perfilUsuario'));
        $this->set('_serialize', ['perfilUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfil Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfilUsuario = $this->PerfilUsuarios->get($id);
        if ($this->PerfilUsuarios->delete($perfilUsuario)) {
            $this->Flash->success(__('The perfil usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The perfil usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
