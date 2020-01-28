<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avances Controller
 *
 * @property \App\Model\Table\AvancesTable $Avances
 *
 * @method \App\Model\Entity\Avance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvancesController extends AppController
{

    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->action, ['add', 'view', 'edit', 'delete']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'conditions' => ['user_id' => $this->Auth->user('id')]
        ];
        $avances = $this->paginate($this->Avances);

        $this->set(compact('avances'));
    }

    /**
     * View method
     *
     * @param string|null $id Avance id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avance = $this->Avances->get($id, [
            'contain' => ['Proyectos', 'Users'],
        ]);

        $this->set('avance', $avance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avance = $this->Avances->newEntity();
        if ($this->request->is('post')) {
            $avance = $this->Avances->patchEntity($avance, $this->request->getData());
            if ($this->Avances->save($avance)) {
                $this->Flash->success(__('The avance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avance could not be saved. Please, try again.'));
        }
        $proyectos = $this->Avances->Proyectos->find('list', ['limit' => 200]);
        $users = $this->Avances->Users->find('list', ['limit' => 200]);
        $this->set(compact('avance', 'proyectos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Avance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avance = $this->Avances->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avance = $this->Avances->patchEntity($avance, $this->request->getData());
            if ($this->Avances->save($avance)) {
                $this->Flash->success(__('The avance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avance could not be saved. Please, try again.'));
        }
        $proyectos = $this->Avances->Proyectos->find('list', ['limit' => 200]);
        $users = $this->Avances->Users->find('list', ['limit' => 200]);
        $this->set(compact('avance', 'proyectos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Avance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avance = $this->Avances->get($id);
        if ($this->Avances->delete($avance)) {
            $this->Flash->success(__('The avance has been deleted.'));
        } else {
            $this->Flash->error(__('The avance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
