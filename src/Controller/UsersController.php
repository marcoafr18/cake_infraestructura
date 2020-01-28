<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->action, ['home', 'view', 'logout']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function login()
    {
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error('Los datos son invalidos, por favor intente nuevamente', ['key' => 'auth']);
            }
        }

        if($this->Auth->user())
        {
            return $this->redirect(['controller' =>'Users', 'action' => 'home']);
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function home()
    {
        $this->render();
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id)
    {
        $user= $this->Users->get($id);
        /*$user = $this->Users->get($id, [
            'contain' => ['Avances', 'Programas', 'Proyectos'],
        ]);*/

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            //debug($this->request->data);
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('El Usuario ha sido creado correctamente');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('El usuario no pudo ser creado, por favor intente nuevamente');
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('El usuario ha sido modificado.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('El usuario no pudo ser modificaco, por favor intente de nuevo.');
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('El usuario ha sido eliminado.');
        } else {
            $this->Flash->error('El usuario no pudo ser eliminado, intente nuevamente por favor');
        }

        return $this->redirect(['action' => 'index']);
    }
}
